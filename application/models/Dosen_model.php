<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
    public function getAll()
    {
        return $this->db
                    ->order_by('nama_dosen','ASC')
                    ->get('dosen')
                    ->result();
    }

    public function getByNidn($nidn)
    {
        return $this->db
                    ->where('nidn',$nidn)
                    ->get('dosen')
                    ->row();
    }

    public function insert($data)
    {
        return $this->db->insert('dosen',$data);
    }

    public function update($nidn,$data)
    {
        return $this->db
                    ->where('nidn',$nidn)
                    ->update('dosen',$data);
    }

    public function delete($nidn)
    {
        return $this->db
                    ->where('nidn',$nidn)
                    ->delete('dosen');
    }
}