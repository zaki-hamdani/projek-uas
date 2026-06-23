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

    public function getById($id)
{
    return $this->db
                ->where('id_absensi', $id)
                ->get('absensi')
                ->row();
}

public function update($id, $data)
{
    return $this->db
                ->where('id_absensi', $id)
                ->update(
                    'absensi',
                    $data
                );
}

public function delete($id)
{
    return $this->db
                ->where('id_absensi', $id)
                ->delete('absensi');
}
}