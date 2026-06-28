<?php

class Rekap_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select("
            mahasiswa.nim,
            mahasiswa.nama,

            COUNT(absensi.id_absensi) as total,
            
            SUM(CASE WHEN absensi.status_kehadiran='Hadir' THEN 1 ELSE 0 END) AS hadir,
            SUM(CASE WHEN absensi.status_kehadiran='Izin' THEN 1 ELSE 0 END) AS izin,
            SUM(CASE WHEN absensi.status_kehadiran='Sakit' THEN 1 ELSE 0 END) AS sakit,
            SUM(CASE WHEN absensi.status_kehadiran='Alpa' THEN 1 ELSE 0 END) AS alpa
        ", FALSE);

        $this->db->from('mahasiswa');

        $this->db->join(
            'absensi',
            'absensi.nim = mahasiswa.nim',
            'left'
        );

        $this->db->group_by('mahasiswa.nim');
        $this->db->group_by('mahasiswa.nama');

        return $this->db->get()->result();
    }
}