<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        cek_login();
        cek_role('dosen');

        $this->load->model('Rekap_model');
    }

    public function index()
    {
        $data['rekap'] =
            $this->Rekap_model->getAll();

        $this->load->view(
            'dosen/rekap/index',
            $data
        );
    }
}