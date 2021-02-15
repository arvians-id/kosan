<?php

namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Auth_model;

class Admin extends BaseController
{
	protected $adminModel, $auth;
	public function __construct()
	{
		$this->adminModel = new Admin_model();
		$this->auth = new Auth_model();
	}
	public function index()
	{
		$data = [
			'title' => 'Selamat Datang Dihalaman Admin',
			'admin' => $this->auth->auth_user()
		];
		return view('admin/adminPages/home', $data);
	}
	public function kosan()
	{
		$data = [
			'title' => 'YukNgekos | Daftar-daftar Kosan',
			'admin' => $this->auth->auth_user(),
			'kosan' => $this->adminModel->getAllDataKosan()
		];
		return view('admin/adminPages/kosan', $data);
	}
	public function detail($slug)
	{
		$data = [
			'title' => 'YukNgekos | ' . $slug,
			'admin' => $this->auth->auth_user(),
			'kosan' => $this->adminModel->getAllDataKosan($slug),
		];
		if (empty($data['kosan'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Kosan dengan nama ' . $slug . ' Tidak Ditemukan');
		}
		return view('admin/adminPages/detail', $data);
	}
	public function profil()
	{
		$data = [
			'title' => 'Profil',
			'admin' => $this->auth->auth_user(),
		];
		return view('admin/adminPages/profil', $data);
	}
	public function edit_profil()
	{
		$data = [
			'title' => 'Edit Profil',
			'admin' => $this->auth->auth_user(),
			'validation' => \Config\Services::validation()
		];
		return view('admin/adminPages/edit_profil', $data);
	}
	public function save_edit_profil($id)
	{
		if (!$this->validate('editProfil')) {
			return redirect()->to('/admin/profil/edit-profil')->withInput();
		}

		$photo = $this->request->getFile('image');
		$photoLama = $this->request->getPost('hid_image');
		$photoDatabase = $this->adminModel->admin();
		if ($photo->getError() == 4) {
			$namaRandomPhoto = $photoLama;
		} else {
			if ($photoDatabase['image'] != 'default.png') {
				unlink('assets/img-user/' . $photoDatabase['image']);
			}
			$namaRandomPhoto = $photo->getRandomName();
			$photo->move('assets/img-user/', $namaRandomPhoto);
		}

		$data = [
			'nama' => $this->request->getPost('nama'),
			'image' => $namaRandomPhoto,
		];
		$this->adminModel->editProfil($data, $id);
		session()->setFlashdata('pesan', 'diubah');
		return redirect()->to('/admin/profil');
	}
	public function delete($id)
	{
		$this->adminModel->deleteKosan($id);
		session()->setFlashdata('pesan', 'Dihapus');
		return redirect()->to('/admin/kosan');
	}
	public function logout()
	{
		session()->destroy();
		return redirect()->to('/auth');
	}
}
