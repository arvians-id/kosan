<?php

namespace App\Controllers;

use App\Models\Mitra_model;
use App\Models\Auth_model;

class Mitra extends BaseController
{
    protected $userMitra, $auth;
    public function __construct()
    {
        $this->userMitra = new Mitra_model();
        $this->auth = new Auth_model();
    }
    // Halaman Awal Mitra
    public function index()
    {
        $data = [
            'title' => 'YukNgekos.com | mitra Kosan',
            'mitra'  => $this->auth->auth_user()
        ];
        return view('mitra/mitraPages/home', $data);
    }
    // Halaman Profil
    public function profil()
    {
        $data = [
            'title' => 'Profil',
            'mitra' => $this->auth->auth_user(),
        ];
        return view('mitra/mitraPages/profil', $data);
    }
    // Halaman Edit Profil
    public function edit_profil()
    {
        $data = [
            'title' => 'Edit Profil',
            'mitra' => $this->auth->auth_user(),
            'validation' => \Config\Services::validation()
        ];
        return view('mitra/mitraPages/edit_profil', $data);
    }
    // Edit Profil
    public function save_edit_profil($id)
    {
        if (!$this->validate('editProfil')) {
            return redirect()->to('/mitra/profil/edit-profil')->withInput();
        }

        $photo = $this->request->getFile('image');
        $photoLama = $this->request->getPost('hid_image');
        $photoDatabase = $this->auth->auth_user();
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
        $this->userMitra->editProfil($data, $id);
        session()->setFlashdata('pesan', 'diubah');
        return redirect()->to('/mitra/profil');
    }
    // Halaman Kosan
    public function create()
    {
        $data = [
            'title' => 'YukNgekos.com | Buat Kosan',
            'mitra'  => $this->auth->auth_user(),
            'validation' => \Config\Services::validation()
        ];
        return view('mitra/mitraPages/buat_kosan', $data);
    }
    // Insert Data Kosan
    public function save_create()
    {
        if (!$this->validate('dataKosan')) {
            return redirect()->to('/mitra/create')->withInput();
        }

        $this->_insertDataUtama();
        $this->_insertDataHarga();
        $this->_insertDataDeskripsi();
        $this->_insertDataPhoto();
        $this->_insertDataFasilitas();
        // Redirect
        session()->setFlashdata('pesan', 'Ditambahkan');
        return redirect()->to('/mitra/kosan');
    }
    private function _insertDataUtama()
    {
        // Form Kosan Utama
        $slug = url_title($this->request->getPost('nama_kosan'), '-', true);
        $dataUtama = [
            'user_id' => session()->get('id'),
            'slug' => $slug,
            'nama_kosan' => htmlspecialchars(trim($this->request->getPost('nama_kosan'))),
            'provinsi_kosan' => $this->request->getPost('provinsi_kosan'),
            'kota_kosan' => $this->request->getPost('kota_kosan'),
            'kecamatan_kosan' => $this->request->getPost('kecamatan_kosan'),
            'kelurahan_kosan' => $this->request->getPost('kelurahan_kosan'),
            'alamat_kosan' => $this->request->getPost('alamat_kosan'),
            'jenis_kosan' => $this->request->getPost('jenis_kosan'),
            'tersedia_kosan' => $this->request->getPost('tersedia_kosan'),
            'panjang_kosan' => $this->request->getPost('panjang_kosan'),
            'lebar_kosan' => $this->request->getPost('lebar_kosan'),
            'booking_kosan' => $this->request->getPost('booking_kosan'),
        ];
        $this->userMitra->queryUtama(null, $dataUtama);
    }
    private function _insertDataHarga()
    {
        // Form Kosan Harga
        $dataHarga = [
            'user_id' => session()->get('id'),
            'harga_perhari' => $this->request->getPost('harga_perhari'),
            'harga_perminggu' => $this->request->getPost('harga_perminggu'),
            'harga_perbulan' => $this->request->getPost('harga_perbulan'),
            'harga_pertahun' => $this->request->getPost('harga_pertahun'),
            'minimal_pembayaran' => $this->request->getPost('minimal_pembayaran'),
        ];
        $this->userMitra->queryHarga(null, $dataHarga);
    }
    private function _insertDataDeskripsi()
    {
        // Form Kosan Deskripsi Dan Keterangan
        $dataKeterangan = [
            'user_id' => session()->get('id'),
            'deskripsi_kosan' => $this->request->getPost('deskripsi_kosan'),
            'keterangan_kosan' => $this->request->getPost('keterangan_kosan'),
        ];
        $this->userMitra->queryKeterangan(null, $dataKeterangan);
    }
    private function _insertDataPhoto()
    {
        // Form Kosan Photo
        $photo1 = $this->request->getFile('photo_1');
        $randomNamaPhoto1 = $photo1->getRandomName();
        $photo1->move('assets/img-kosan/', $randomNamaPhoto1);

        $photo2 = $this->request->getFile('photo_2');
        $randomNamaPhoto2 = $photo2->getRandomName();
        $photo2->move('assets/img-kosan/', $randomNamaPhoto2);

        $photo3 = $this->request->getFile('photo_3');
        $randomNamaPhoto3 = $photo3->getRandomName();
        $photo3->move('assets/img-kosan/', $randomNamaPhoto3);

        $dataPhoto = [
            'user_id' => session()->get('id'),
            'photo_1' => $randomNamaPhoto1,
            'photo_2' => $randomNamaPhoto2,
            'photo_3' => $randomNamaPhoto3,
        ];
        $this->userMitra->queryPhoto(null, $dataPhoto);
    }
    private function _insertDataFasilitas()
    {
        // Form Kosan Fasilitas
        $fasKosan = $this->request->getPost('fasilitas_kosan');
        ($fasKosan == '') ?  $loopKosan = 'Tidak Ada' : $loopKosan = implode(',', $fasKosan);

        $fasMandi = $this->request->getPost('fasilitas_mandi');
        ($fasMandi == '') ?  $loopMandi = 'Tidak Ada' : $loopMandi = implode(',', $fasMandi);

        $fasBersama = $this->request->getPost('fasilitas_bersama');
        ($fasBersama == '') ?  $loopBersama = 'Tidak Ada' : $loopBersama = implode(',', $fasBersama);

        $fasParkir = $this->request->getPost('fasilitas_parkir');
        ($fasParkir == '') ?  $loopParkir = 'Tidak Ada' : $loopParkir = implode(',', $fasParkir);

        $fasLingkungan = $this->request->getPost('area_lingkungan');
        ($fasLingkungan == '') ?  $loopLingkungan = 'Tidak Ada' : $loopLingkungan = implode(',', $fasLingkungan);

        $dataFasilitas = [
            'user_id' => session()->get('id'),
            'fasilitas_kosan' => $loopKosan,
            'fasilitas_mandi' => $loopMandi,
            'fasilitas_bersama' => $loopBersama,
            'fasilitas_parkir' => $loopParkir,
            'area_lingkungan' => $loopLingkungan,
        ];
        $this->userMitra->queryFasilitas(null, $dataFasilitas);
    }
    // Halaman Daftar Kosan
    public function kosan()
    {
        $data = [
            'title' => 'YukNgekos.com | Kosan Anda',
            'mitra' => $this->auth->auth_user(),
            'kosan' => $this->userMitra->getAllDataKosan()
        ];
        return view('mitra/mitraLayout/template_kosan', $data);
    }
    // Halaman Detail Kosan
    public function detail($slug)
    {
        $data = [
            'title' => 'YukNgekos.com | Detail Kosan' . $slug,
            'mitra' => $this->auth->auth_user(),
            'kosan' => $this->userMitra->getAllDataKosan($slug)
        ];
        if (empty($data['kosan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kosan dengan nama ' . $slug . ' Tidak Ditemukan');
        }
        return view('mitra/mitraPages/detail', $data);
    }
    // Halaman Edit Kosan
    public function edit($slug)
    {
        $data = [
            'title' => 'YukNgekos.com | Detail Kosan' . $slug,
            'mitra' => $this->auth->auth_user(),
            'kosan' => $this->userMitra->getAllDataKosan($slug),
            'validation' => \Config\Services::validation()
        ];
        return view('mitra/mitraPages/edit_kosan', $data);
    }
    // Edit Kosan
    public function save_edit_kosan($id)
    {
        $slugs = $this->request->getPost('slug');
        if (!$this->validate('dataEditKosan')) {
            return redirect()->to('/mitra/edit/' . $slugs)->withInput();
        }
        $this->_editDataUtama($id);
        $this->_editDataHarga($id);
        $this->_editDataDeskripsi($id);
        $this->_editDataPhoto($id, $slugs);
        $this->_editDataFasilitas($id);
        // Redirect
        session()->setFlashdata('pesan', 'Diubah');
        return redirect()->to('/mitra/kosan');
    }
    private function _editDataUtama($id)
    {
        // Form Kosan Utama
        $slug = url_title($this->request->getPost('nama_kosan'), '-', true);
        $dataUtama = [
            'slug' => $slug,
            'nama_kosan' => htmlspecialchars($this->request->getPost('nama_kosan')),
            'provinsi_kosan' => $this->request->getPost('provinsi_kosan'),
            'kota_kosan' => $this->request->getPost('kota_kosan'),
            'kecamatan_kosan' => $this->request->getPost('kecamatan_kosan'),
            'kelurahan_kosan' => $this->request->getPost('kelurahan_kosan'),
            'alamat_kosan' => $this->request->getPost('alamat_kosan'),
            'jenis_kosan' => $this->request->getPost('jenis_kosan'),
            'tersedia_kosan' => $this->request->getPost('tersedia_kosan'),
            'panjang_kosan' => $this->request->getPost('panjang_kosan'),
            'lebar_kosan' => $this->request->getPost('lebar_kosan'),
            'booking_kosan' => $this->request->getPost('booking_kosan'),
        ];
        $this->userMitra->queryUtama(['id' => $id], $dataUtama);
    }
    private function _editDataHarga($id)
    {
        // Form Kosan Harga
        $dataHarga = [
            'harga_perhari' => $this->request->getPost('harga_perhari'),
            'harga_perminggu' => $this->request->getPost('harga_perminggu'),
            'harga_perbulan' => $this->request->getPost('harga_perbulan'),
            'harga_pertahun' => $this->request->getPost('harga_pertahun'),
            'minimal_pembayaran' => $this->request->getPost('minimal_pembayaran'),
        ];
        $this->userMitra->queryHarga(['id' => $id], $dataHarga);
    }
    private function _editDataDeskripsi($id)
    {
        // Form Kosan Deskripsi Dan Keterangan
        $dataKeterangan = [
            'deskripsi_kosan' => $this->request->getPost('deskripsi_kosan'),
            'keterangan_kosan' => $this->request->getPost('keterangan_kosan'),
        ];
        $this->userMitra->queryKeterangan(['id' => $id], $dataKeterangan);
    }
    private function _editDataPhoto($id, $slug)
    {
        // Form Kosan Photo
        $photoLama1 = $this->request->getPost('hid_photo_1');
        $photoLama2 = $this->request->getPost('hid_photo_2');
        $photoLama3 = $this->request->getPost('hid_photo_3');
        $photo1 = $this->request->getFile('photo_1');
        $photo2 = $this->request->getFile('photo_2');
        $photo3 = $this->request->getFile('photo_3');
        $photoDatabase = $this->userMitra->getAllDataKosan($slug);

        if ($photo1->getError() == 4) {
            $randomNamaPhoto1 = $photoLama1;
        } else {
            unlink('assets/img-kosan/' . $photoDatabase['photo_1']);
            $randomNamaPhoto1 = $photo1->getRandomName();
            $photo1->move('assets/img-kosan/', $randomNamaPhoto1);
        }

        if ($photo2->getError() == 4) {
            $randomNamaPhoto2 = $photoLama2;
        } else {
            unlink('assets/img-kosan/' . $photoDatabase['photo_2']);
            $randomNamaPhoto2 = $photo2->getRandomName();
            $photo2->move('assets/img-kosan/', $randomNamaPhoto2);
        }

        if ($photo3->getError() == 4) {
            $randomNamaPhoto3 = $photoLama3;
        } else {
            unlink('assets/img-kosan/' . $photoDatabase['photo_3']);
            $randomNamaPhoto3 = $photo3->getRandomName();
            $photo3->move('assets/img-kosan/', $randomNamaPhoto3);
        }
        $dataPhoto = [
            'photo_1' => $randomNamaPhoto1,
            'photo_2' => $randomNamaPhoto2,
            'photo_3' => $randomNamaPhoto3,
        ];
        $this->userMitra->queryPhoto(['id' => $id], $dataPhoto);
    }
    private function _editDataFasilitas($id)
    {
        // Form Kosan Fasilitas
        $fasKosan = $this->request->getPost('fasilitas_kosan');
        ($fasKosan == '') ?  $loopKosan = 'Tidak Ada' : $loopKosan = implode(',', $fasKosan);

        $fasMandi = $this->request->getPost('fasilitas_mandi');
        ($fasMandi == '') ?  $loopMandi = 'Tidak Ada' : $loopMandi = implode(',', $fasMandi);

        $fasBersama = $this->request->getPost('fasilitas_bersama');
        ($fasBersama == '') ?  $loopBersama = 'Tidak Ada' : $loopBersama = implode(',', $fasBersama);

        $fasParkir = $this->request->getPost('fasilitas_parkir');
        ($fasParkir == '') ?  $loopParkir = 'Tidak Ada' : $loopParkir = implode(',', $fasParkir);

        $fasLingkungan = $this->request->getPost('area_lingkungan');
        ($fasLingkungan == '') ?  $loopLingkungan = 'Tidak Ada' : $loopLingkungan = implode(',', $fasLingkungan);

        $dataFasilitas = [
            'fasilitas_kosan' => $loopKosan,
            'fasilitas_mandi' => $loopMandi,
            'fasilitas_bersama' => $loopBersama,
            'fasilitas_parkir' => $loopParkir,
            'area_lingkungan' => $loopLingkungan,
        ];
        $this->userMitra->queryFasilitas(['id' => $id], $dataFasilitas);
    }
    // Delete Kosan
    public function delete()
    {
        $id = $this->request->getVar('id');
        $this->userMitra->deleteKosan($id);
        $view = ['success' => 'Dihapus'];
        echo json_encode($view);
    }
    // Logout Role Mitra
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }
}
