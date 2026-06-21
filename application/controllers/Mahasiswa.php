<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        cek_login();
        cek_role('admin');

        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['mahasiswa'] =
            $this->Mahasiswa_model->getAll();

        $this->load->view(
            'admin/mahasiswa/index',
            $data
        );
    }

    public function tambah()
    {
    $this->form_validation->set_rules(
        'nim',
        'NIM',
        'required|is_unique[mahasiswa.nim]'
    );

    $this->form_validation->set_rules(
        'nama',
        'Nama',
        'required'
    );

    if($this->form_validation->run() == TRUE)
    {
        $data = [
            'nim'      => $this->input->post('nim', TRUE),
            'nama'     => $this->input->post('nama', TRUE),
            'prodi'    => $this->input->post('prodi', TRUE),
            'semester' => $this->input->post('semester', TRUE)
        ];

        $this->Mahasiswa_model->insert($data);

        $this->session->set_flashdata(
            'success',
            'Data mahasiswa berhasil ditambahkan'
        );

        redirect(base_url('index.php/mahasiswa'));
    }

    $this->load->view('admin/mahasiswa/tambah');
    }

    public function edit($nim)
    {
    if($this->input->post()){

        $data = [

            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi'),
            'semester' => $this->input->post('semester')

        ];

        $this->Mahasiswa_model->update($nim,$data);

        $this->session->set_flashdata(
            'success',
            'Data mahasiswa berhasil diupdate'
        );

        redirect(base_url('index.php/mahasiswa'));
    }

    $data['mhs'] = $this->Mahasiswa_model->getByNim($nim);

    $this->load->view(
        'admin/mahasiswa/edit',
        $data
    );
    }

    public function hapus($nim)
    {
        $this->Mahasiswa_model
             ->delete($nim);

        redirect('index.php/mahasiswa');
    }
}