<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        cek_login();
        cek_role('admin');

        $this->load->model('Dosen_model');
    }

    public function index()
    {
        $data['dosen'] = $this->Dosen_model->getAll();

        $this->load->view(
            'admin/dosen/index',
            $data
        );
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nidn',
            'NIDN',
            'required|is_unique[dosen.nidn]'
        );

        $this->form_validation->set_rules(
            'nama_dosen',
            'Nama Dosen',
            'required'
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email'
        );

        if($this->form_validation->run())
        {
            $data = [

                'nidn' => $this->input->post('nidn'),
                'nama_dosen' => $this->input->post('nama_dosen'),
                'email' => $this->input->post('email')

            ];

            $this->Dosen_model->insert($data);

            $this->session->set_flashdata(
                'success',
                'Data dosen berhasil ditambahkan'
            );

            redirect(base_url('index.php/dosen'));
        }

        $this->load->view('admin/dosen/tambah');
    }

    public function edit($nidn)
    {
        if($this->input->post())
        {
            $data = [

                'nama_dosen' => $this->input->post('nama_dosen'),
                'email' => $this->input->post('email')

            ];

            $this->Dosen_model->update($nidn,$data);

            $this->session->set_flashdata(
                'success',
                'Data dosen berhasil diperbarui'
            );

            redirect(base_url('index.php/dosen'));
        }

        $data['dosen'] =
            $this->Dosen_model->getByNidn($nidn);

        $this->load->view(
            'admin/dosen/edit',
            $data
        );
    }

    public function hapus($nidn)
    {
        $this->Dosen_model->delete($nidn);

        $this->session->set_flashdata(
            'success',
            'Data dosen berhasil dihapus'
        );

        redirect(base_url('index.php/dosen'));
    }
}