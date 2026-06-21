<?php

class Mahasiswa_model extends CI_Model {

    public function getAll()
    {
        return $this->db
                    ->order_by('nim','ASC')
                    ->get('mahasiswa')
                    ->result();
    }

    public function getByNim($nim)
    {
        return $this->db
                    ->where('nim',$nim)
                    ->get('mahasiswa')
                    ->row();
    }

    public function insert($data)
    {
        return $this->db->insert(
            'mahasiswa',
            $data
        );
    }

    public function update($nim,$data)
    {
    $this->db->where('nim',$nim);
    $this->db->update('mahasiswa',$data);

    echo $this->db->last_query();
    echo "<br><br>";

    echo "Affected Rows : ";
    echo $this->db->affected_rows();

    die();
    }

    public function delete($nim)
    {
        return $this->db
                    ->where('nim',$nim)
                    ->delete('mahasiswa');
    }

}