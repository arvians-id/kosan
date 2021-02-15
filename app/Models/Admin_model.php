<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model
{
    public function editProfil($data, $id)
    {
        $builder = $this->db->table('data_users_kosan');
        $builder->set($data);
        $builder->where('id', $id);
        $builder->update();
    }
    public function getAllDataKosan($slug = false)
    {
        // getAll
        if ($slug == false) {
            $builder = $this->db->table('data_utama_kosan a');
            $builder->select('*');
            $builder->join('data_harga_kosan b', 'b.id = a.id');
            $builder->join('data_keterangan_kosan c', 'c.id = b.id');
            $builder->join('data_photo_kosan d', 'd.id = c.id');
            $builder->join('data_fasilitas_kosan e', 'e.id = d.id');
            $builder->join('data_users_kosan f', 'f.id = a.user_id');
            $builder->join('data_role_kosan g', 'g.id = f.role_id');
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
        $builder->join('data_role_kosan g', 'g.id = f.role_id');
        $builder->where('a.slug', $slug);
        return $builder->get()->getRowArray();
    }
    public function deleteKosan($id)
    {
        $builderUtama = $this->db->table('data_utama_kosan');
        $builderHarga = $this->db->table('data_harga_kosan');
        $builderKeterangan = $this->db->table('data_keterangan_kosan');
        $builderFasilitas = $this->db->table('data_fasilitas_kosan');
        $builderPhoto = $this->db->table('data_photo_kosan');

        $deletePhoho = $builderPhoto->where('id', $id)->get()->getRowArray();
        unlink('assets/img-kosan/' . $deletePhoho['photo_1']);
        unlink('assets/img-kosan/' . $deletePhoho['photo_2']);
        unlink('assets/img-kosan/' . $deletePhoho['photo_3']);

        $builderUtama->delete(['id' => $id]);
        $builderHarga->delete(['id' => $id]);
        $builderKeterangan->delete(['id' => $id]);
        $builderFasilitas->delete(['id' => $id]);
        $builderPhoto->delete(['id' => $id]);
    }
}
