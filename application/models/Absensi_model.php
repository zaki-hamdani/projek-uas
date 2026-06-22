<?php

class Absensi_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('
            absensi.*,
            mahasiswa.nama,
            matakuliah.nama_matkul
        ');

        $this->db->from('absensi');

        $this->db->join(
            'mahasiswa',
            'mahasiswa.nim = absensi.nim'
        );

        $this->db->join(
            'matakuliah',
            'matakuliah.id_matkul = absensi.id_matkul'
        );

        return $this->db->get()->result();
    }

    public function insert($data)
    {
        return $this->db->insert(
            'absensi',
            $data
        );
    }
}