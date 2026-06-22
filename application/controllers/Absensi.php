<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        cek_login();
        cek_role('mahasiswa');

        $this->load->model('Absensi_model');
    }

    public function riwayat()
    {
        $id_user =
            $this->session->userdata('id_user');

        $mhs = $this->db
            ->where('id_user', $id_user)
            ->get('mahasiswa')
            ->row();

        $data['riwayat'] =
            $this->Absensi_model
                ->getRiwayatByNim($mhs->nim);

        $data['mhs'] = $mhs;

        $this->load->view(
            'mahasiswa/riwayat_absensi',
            $data
        );
    }
}