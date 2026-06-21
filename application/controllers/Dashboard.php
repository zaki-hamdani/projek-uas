<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        cek_login();
    }

    public function admin()
    {
        cek_role('admin');

        $data['total_mahasiswa'] =
            $this->db->count_all('mahasiswa');

        $data['total_dosen'] =
            $this->db->count_all('dosen');

        $data['total_matkul'] =
            $this->db->count_all('matakuliah');

        $data['total_absensi'] =
            $this->db->count_all('absensi');

        $this->load->view(
            'admin/dashboard',
            $data
        );
    }

    public function dosen()
    {
        cek_role('dosen');

        $this->load->view('dosen/dashboard');
    }

    public function mahasiswa()
    {
        cek_role('mahasiswa');

        $this->load->view('mahasiswa/dashboard');
    }
}