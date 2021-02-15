<?php

namespace App\Models;

use CodeIgniter\Model;

class Mitra_model extends Model
{
    protected $table = 'data_utama_kosan';
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'slug', 'nama_kosan', 'provinsi_kosan', 'kota_kosan', 'kecamatan_kosan', 'kelurahan_kosan', 'alamat_kosan', 'jenis_kosan', 'tersedia_kosan', 'panjang_kosan', 'lebar_kosan', 'booking_kosan'];

    // public function statusMitra()
    // {
    //     $builder = $this->db->table("$this->table a");
    //     $builder->select('*');
    //     $builder->join('data_status_mitra b', 'b.id = a.status');
    //     return $builder->get()->getRowArray();
    // }
    public function editProfil($data, $id)
    {
        $builder = $this->db->table('data_users_kosan');
        $builder->set($data);
        $builder->where('id', $id);
        $builder->update();
    }
    public function queryUtama($id = false, $data)
    {
        $builder = $this->db->table('data_utama_kosan');
        if ($id == false) {
            return $builder->insert($data);
        } else {
            $builder->set($data);
            $builder->where($id);
            return $builder->update();
        }
    }
    public function queryHarga($id = false, $data)
    {
        $builder = $this->db->table('data_harga_kosan');
        if ($id == false) {
            return $builder->insert($data);
        } else {
            $builder->set($data);
            $builder->where($id);
            return $builder->update();
        }
    }
    public function queryKeterangan($id = false, $data)
    {
        $builder = $this->db->table('data_keterangan_kosan');
        if ($id == false) {
            return $builder->insert($data);
        } else {
            $builder->set($data);
            $builder->where($id);
            return $builder->update();
        }
    }
    public function queryPhoto($id = false, $data)
    {
        $builder = $this->db->table('data_photo_kosan');
        if ($id == false) {
            return $builder->insert($data);
        } else {
            $builder->set($data);
            $builder->where($id);
            return $builder->update();
        }
    }
    public function queryFasilitas($id = false, $data)
    {
        $builder = $this->db->table('data_fasilitas_kosan');
        if ($id == false) {
            return $builder->insert($data);
        } else {
            $builder->set($data);
            $builder->where($id);
            return $builder->update();
        }
    }
    public function getAllDataKosan($slug = false)
    {
        // getAll
        if ($slug == false) {
            $user_id = session()->get('id');
            $builder = $this->db->table('data_utama_kosan a');
            $builder->select('*');
            $builder->join('data_harga_kosan b', 'b.id = a.id');
            $builder->join('data_keterangan_kosan c', 'c.id = b.id');
            $builder->join('data_photo_kosan d', 'd.id = c.id');
            $builder->join('data_fasilitas_kosan e', 'e.id = d.id');
            $builder->where('a.user_id', $user_id);
            return $builder->get()->getResultArray();
        }
        // getRow
        $user_id = session()->get('id');
        $builder = $this->db->table('data_utama_kosan a');
        $builder->select('*');
        $builder->join('data_harga_kosan b', 'b.id = a.id');
        $builder->join('data_keterangan_kosan c', 'c.id = b.id');
        $builder->join('data_photo_kosan d', 'd.id = c.id');
        $builder->join('data_fasilitas_kosan e', 'e.id = d.id');
        $builder->where('a.user_id', $user_id);
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
