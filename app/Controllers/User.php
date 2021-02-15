<?php

namespace App\Controllers;

use App\Models\Admin_model;
use App\Models\Auth_model;
use App\Models\Mitra_model;

class User extends BaseController
{
    protected $user;
    public function __construct()
    {
        $this->user = new Admin_model();
        $this->userIns = new Auth_model();
        $this->userMitra = new Mitra_model();
    }
    public function index()
    {
        $data = [
            'title' => 'YukNgekos.com | User',
            'user'  => $this->user->admin(),
            'validation' => \Config\Services::Validation()
        ];
        return view('User/UserPages/user', $data);
    }
    public function save_edit($id)
    {
        if (!$this->validate('editProfilUser')) {
            return redirect()->to('/user')->withInput();
        }

        $photo = $this->request->getFile('image');
        $photoLama = $this->request->getPost('hid_image');
        $photoDatabase = $this->userIns->getUser($id);
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
            'id' => $id,
            'nama' => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'status' => $this->request->getPost('status'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'image' => $namaRandomPhoto,
        ];
        $this->userIns->save($data);
        session()->setFlashdata('pesan', 'diubah');
        return redirect()->to('/user');
    }
    public function password()
    {
        $data = [
            'title' => 'YukNgekos.com | Password',
            'user'  => $this->user->admin(),
            'validation' => \Config\Services::validation()
        ];
        return view('User/UserPages/password', $data);
    }
    public function save_password()
    {
        if (!$this->validate('savePassword')) {
            return redirect()->to('/user/password')->withInput();
        }

        $id = session()->get('id');
        $passwordDatabase = $this->userIns->getUser($id);
        $passwordAwal = $this->request->getPost('cpassword');
        $passwordBaru = $this->request->getPost('npassword');

        if (password_verify($passwordAwal, $passwordDatabase['password'])) {
            if ($passwordBaru != $passwordAwal) {
                $data = [
                    'id' => session()->get('id'),
                    'password' => password_hash($passwordBaru, PASSWORD_DEFAULT)
                ];
                $this->userIns->save($data);
                session()->setFlashdata('pesan', 'diubah');
                return redirect()->to('/user/password');
            } else {
                session()->setFlashdata('message', 'Password harus baru');
                return redirect()->to('/user/password');
            }
        } else {
            session()->setFlashdata('message', 'Password tidak sesuai');
            return redirect()->to('/user/password');
        }
    }
    public function wishlist()
    {
        $data = [
            'title' => 'YukNgekos.com | Wishlist',
            'user'  => $this->user->admin()
        ];
        return view('User/UserPages/wishlist', $data);
    }
    public function mitra()
    {
        $id = session()->get('id');
        $mitra = $this->userMitra->where('user_id', $id)->first();
        $data = [
            'title' => 'YukNgekos.com | Mitra',
            'user'  => $this->user->admin(),
            'validation' => \Config\Services::validation(),
            'mitra' => $mitra,
            'status' => $this->userMitra->statusMitra()
        ];
        if ($mitra['user_id'] == $id) {
            return view('User/UserPages/mitraOnProses', $data);
        } else {
            return view('User/UserPages/mitra', $data);
        }
    }
    public function save_mitra()
    {
        if (!$this->validate('saveMitra')) {
            return redirect()->to('/user/mitra')->withInput();
        }

        $photoKtp = $this->request->getFile('photo_ktp');
        $namaRandomPhotoKtp = $photoKtp->getRandomName();
        $photoKtp->move('assets/img-mitra', $namaRandomPhotoKtp);

        $photoSelfie = $this->request->getFile('photo_selfie');
        $namaRandomPhotoSelfie = $photoSelfie->getRandomName();
        $photoSelfie->move('assets/img-mitra', $namaRandomPhotoSelfie);

        $data = [
            'user_id' => session()->get('id'),
            'nama' => $this->request->getPost('nama'),
            'nama_kosan' => $this->request->getPost('nama_kosan'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'photo_ktp' => $namaRandomPhotoKtp,
            'photo_selfie' => $namaRandomPhotoSelfie,
            'status' => 1
        ];
        $this->userMitra->save($data);
        session()->setFlashdata('pesan', 'dikirim');
        return redirect()->to('/user/mitra');
    }
    public function batalMitra($id)
    {
        $mitra = $this->userMitra->find($id);
        unlink('assets/img-mitra/' . $mitra['photo_ktp']);
        unlink('assets/img-mitra/' . $mitra['photo_selfie']);
        $this->userMitra->delete($id);
        return redirect()->to('/user/mitra');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
