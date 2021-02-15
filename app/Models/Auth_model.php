<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{
    protected $table = 'data_users_kosan';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'nama', 'no_hp', 'jenis_kelamin', 'tanggal_lahir', 'status', 'password', 'role_id', 'is_active', 'image'];

    //Controller Auth
    public function user($username)
    {
        return $this->db->table('data_users_kosan')->where('username', $username)->get()->getRowArray();
    }
    //Controller User
    public function getUser($id)
    {
        return $this->db->table('data_users_kosan')->where('id', $id)->get()->getRowArray();
    }
    public function auth_user()
    {
        return $this->db->table('data_users_kosan')
            ->where('username', session()->get('username'))
            ->get()
            ->getRowArray();
    }
}
