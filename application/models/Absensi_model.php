<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_model extends CI_Model
{
    public function getRiwayatByNim($nim)
    {
        $this->db->select('
            absensi.*,
            matakuliah.nama_matkul
        ');

        $this->db->from('absensi');

        $this->db->join(
            'matakuliah',
            'matakuliah.id_matkul = absensi.id_matkul'
        );

        $this->db->where('absensi.nim', $nim);

        $this->db->order_by('tanggal', 'DESC');

        return $this->db->get()->result();
    }
}