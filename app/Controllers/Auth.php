<?php

namespace App\Controllers;

use App\Models\Auth_model;

class Auth extends BaseController
{
    protected $authModel;
    public function __construct()
    {
        $this->authModel = new Auth_model();
    }
    public function index()
    {
        $data = [
            'title' => 'Halaman Login',
            'validation' => \Config\Services::validation()
        ];
        return view('auth/authPages/login', $data);
    }
    public function login()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'password tidak boleh kosong',
                ]
            ],
        ])) {
            return redirect()->to('/auth')->withInput();
        }

        $password = $this->request->getPost('password');
        $username = $this->request->getPost('username');

        $user = $this->authModel->user($username);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $field = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role_id' => $user['role_id'],
                    'isLoggedIn' => true,
                ];
                session()->set($field);
                if ($user['role_id'] == 1) {
                    return redirect()->to('/admin');
                } elseif ($user['role_id'] == 2) {
                    return redirect()->to('/mitra');
                } elseif ($user['role_id'] == 3) {
                    return redirect()->to('/');
                }
            } else {
                session()->setFlashdata('message', 'password atau username salah');
                return redirect()->to('/auth');
            }
        } else {
            session()->setFlashdata('message', 'user ' . $username . ' belum terdaftar');
            return redirect()->to('/Auth');
        }
    }
    public function registration()
    {
        $data = [
            'title' => 'Halaman Registrasi',
            'validation' => \Config\Services::validation()
        ];
        return view('auth/authPages/register', $data);
    }
    public function register()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[users_kosan.username]|min_length[6]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[users_kosan.email]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'npassword' => [
                'rules' => 'required|min_length[6]|matches[rpassword]',
                'errors' => [
                    'required' => 'password tidak boleh kosong',
                    'min_length' => 'password harus lebih dari 6',
                    'matches' => 'password tidak sama'
                ]
            ],
            'rpassword' => [
                'rules' => 'required|min_length[6]|matches[npassword]',
                'errors' => [
                    'required' => 'password tidak boleh kosong',
                    'min_length' => 'password harus lebih dari 6',
                    'matches' => 'password tidak sama'
                ]
            ],
        ])) {
            return redirect()->to('/auth/registration')->withInput();
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'nama' => $this->request->getPost('nama'),
            'no_hp' => '',
            'jenis_kelamin' => 'lainnya',
            'status' => '',
            'tanggal_lahir' => '',
            'password' => password_hash($this->request->getPost('npassword'), PASSWORD_DEFAULT),
            'role_id' => 1,
            'is_active' => 1,
            'image' => 'default.png'
        ];

        $this->authModel->save($data);
        session()->setFlashdata('pesan', 'Dibuat');
        return redirect()->to('/auth');
    }
}
