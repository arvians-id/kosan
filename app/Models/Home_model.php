<?php

namespace App\Models;

use CodeIgniter\Model;

class Home_model extends Model
{
    public function getAllDataKosan($limit = false, $slug = false)
    {
        // getAll
        if ($slug == false) {
            // $user_id = session()->get('id');
            $builder = $this->db->table('data_utama_kosan a');
            $builder->select('*');
            $builder->join('data_harga_kosan b', 'b.id = a.id');
            $builder->join('data_keterangan_kosan c', 'c.id = b.id');
            $builder->join('data_photo_kosan d', 'd.id = c.id');
            $builder->join('data_fasilitas_kosan e', 'e.id = d.id');
            $builder->join('data_users_kosan f', 'f.id = a.user_id');
            $builder->orderBy('a.id', 'desc');
            $builder->limit($limit);
            // $builder->where('a.user_id', $user_id);
            return $builder->get()->getResultArray();
        }
        // getRow
        $builder = $this->db->table('data_utama_kosan a');
        $builder->select('*');
        $builder->join('data_harga_kosan b', 'b.id = a.id');
        $builder->join('data_keterangan_kosan c', 'c.id = b.id');
        $builder->join('data_photo_kosan d', 'd.id = c.id');
        $builder->join('data_fasilitas_kosan e', 'e.id = d.id');
        $builder->join('data_users_kosan f', 'f.id = a.user_id');
        $builder->where('a.slug', $slug);
        return $builder->get()->getRowArray();
    }
}
