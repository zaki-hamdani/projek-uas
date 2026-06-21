<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        cek_login();
        cek_role('admin');

        $this->load->model('Matakuliah_model');
        $this->load->model('Dosen_model');
    }

    public function index()
    {
        $data['matkul'] =
            $this->Matakuliah_model->getAll();

        $this->load->view(
            'admin/matakuliah/index',
            $data
        );
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama_matkul',
            'Nama Mata Kuliah',
            'required'
        );

        $this->form_validation->set_rules(
            'sks',
            'SKS',
            'required|numeric'
        );

        if($this->form_validation->run())
        {
            $data = [

                'nama_matkul' =>
                    $this->input->post('nama_matkul'),

                'sks' =>
                    $this->input->post('sks'),

                'nidn' =>
                    $this->input->post('nidn')

            ];

            $this->Matakuliah_model->insert($data);

            $this->session->set_flashdata(
                'success',
                'Data mata kuliah berhasil ditambahkan'
            );

            redirect('index.php/matakuliah');
        }

        $data['dosen'] =
            $this->Dosen_model->getAll();

        $this->load->view(
            'admin/matakuliah/tambah',
            $data
        );
    }

    public function edit($id)
    {
        if($this->input->post())
        {
            $data = [

                'nama_matkul' =>
                    $this->input->post('nama_matkul'),

                'sks' =>
                    $this->input->post('sks'),

                'nidn' =>
                    $this->input->post('nidn')

            ];

            $this->Matakuliah_model->update(
                $id,
                $data
            );

            redirect(
                'index.php/matakuliah'
            );
        }

        $data['matkul'] =
            $this->Matakuliah_model->getById($id);

        $data['dosen'] =
            $this->Dosen_model->getAll();

        $this->load->view(
            'admin/matakuliah/edit',
            $data
        );
    }

    public function hapus($id)
    {
        $this->Matakuliah_model->delete($id);

        redirect(
            'index.php/matakuliah'
        );
    }
}