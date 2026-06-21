<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('matakuliah.*, dosen.nama_dosen');
        $this->db->from('matakuliah');
        $this->db->join(
            'dosen',
            'dosen.nidn = matakuliah.nidn',
            'left'
        );

        return $this->db->get()->result();
    }

    public function getById($id)
    {
        return $this->db
                    ->where('id_matkul',$id)
                    ->get('matakuliah')
                    ->row();
    }

    public function insert($data)
    {
        return $this->db->insert(
            'matakuliah',
            $data
        );
    }

    public function update($id,$data)
    {
        return $this->db
                    ->where('id_matkul',$id)
                    ->update(
                        'matakuliah',
                        $data
                    );
    }

    public function delete($id)
    {
        return $this->db
                    ->where('id_matkul',$id)
                    ->delete('matakuliah');
    }
}