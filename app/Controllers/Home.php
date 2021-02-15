<?php

namespace App\Controllers;

use App\Models\Auth_model;
use App\Models\Home_model;

class Home extends BaseController
{
    protected $auth, $home;
    public function __construct()
    {
        $this->auth = new Auth_model();
        $this->home = new Home_model();
    }
    public function index()
    {
        $data = [
            'title' => 'YukNgekos.com | Website Kosan Terpopuler',
            'user'  => $this->auth->auth_user(),
            'home'  => $this->home->getAllDataKosan(6)
        ];
        return view('Home/HomePages/home', $data);
    }
    public function kosan()
    {
        $data = [
            'title' => 'YukNgekos.com | Daftar-daftar kosan',
            'user'  => $this->auth->auth_user(),
            'home'  => $this->home->getAllDataKosan()
        ];
        return view('Home/HomePages/kosan', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => 'YukNgekos.com | Detail Kosan ' . $slug,
            'user'  => $this->auth->auth_user(),
            'home'  => $this->home->getAllDataKosan(null, $slug),
            'homeLimit'  => $this->home->getAllDataKosan(4)
        ];
        if (empty($data['home'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Halaman ' . $slug . ' Tidak Di Temukan');
        }
        return view('Home/HomePages/detail_kosan', $data);
    }
    public function blog()
    {
        $data = [
            'title' => 'YukNgekos.com | Blog YukNgekos',
            'user'  => $this->auth->auth_user()
        ];
        return view('Home/HomePages/blog', $data);
    }
    public function tentang()
    {
        $data = [
            'title' => 'YukNgekos.com | Tentang YukNgekos',
            'user'  => $this->auth->auth_user()
        ];
        return view('Home/HomePages/tentang', $data);
    }
    public function kontak()
    {
        $data = [
            'title' => 'YukNgekos.com | Kritik dan saran',
            'user'  => $this->auth->auth_user()
        ];
        return view('Home/HomePages/kontak', $data);
    }
}
