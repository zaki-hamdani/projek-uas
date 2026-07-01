<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        cek_login();

        $this->load->model('Absensi_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Matakuliah_model');
    }

    /* =========================
       MENU DOSEN
    ==========================*/

    public function index()
    {
        cek_role('dosen');

        $data['absensi'] = $this->Absensi_model->getAll();

        $this->load->view(
            'dosen/absensi/index',
            $data
        );
    }

    public function tambah()
    {
        cek_role('dosen');

        $data['mahasiswa'] = $this->Mahasiswa_model->getAll();
        $data['matakuliah'] = $this->Matakuliah_model->getAll();

        if($this->input->post())
        {
            $simpan = [

                'nim' => $this->input->post('nim'),
                'id_matkul' => $this->input->post('id_matkul'),
                'tanggal' => $this->input->post('tanggal'),
                'pertemuan' => $this->input->post('pertemuan'),
                'status_kehadiran' => $this->input->post('status_kehadiran')

            ];

            $this->Absensi_model->insert($simpan);

            redirect('index.php/absensi');
        }

        $this->load->view(
            'dosen/absensi/tambah',
            $data
        );
    }

    public function edit($id)
    {
        cek_role('dosen');

        $data['absensi'] = $this->Absensi_model->getById($id);

        $data['mahasiswa'] = $this->Mahasiswa_model->getAll();
        $data['matakuliah'] = $this->Matakuliah_model->getAll();

        if($this->input->post())
        {
            $update = [

                'nim' => $this->input->post('nim'),
                'id_matkul' => $this->input->post('id_matkul'),
                'tanggal' => $this->input->post('tanggal'),
                'pertemuan' => $this->input->post('pertemuan'),
                'status_kehadiran' => $this->input->post('status_kehadiran')

            ];

            $this->Absensi_model->update($id, $update);

            redirect('index.php/absensi');
        }

        $this->load->view(
            'dosen/absensi/edit',
            $data
        );
    }

    public function hapus($id)
    {
        cek_role('dosen');

        $this->Absensi_model->delete($id);

        redirect('index.php/absensi');
    }

    /* =========================
       MENU MAHASISWA
    ==========================*/

    public function riwayat()
    {
        cek_role('mahasiswa');

        $id_user = $this->session->userdata('id_user');

        $mhs = $this->db
                    ->where('id_user', $id_user)
                    ->get('mahasiswa')
                    ->row();

        $data['riwayat'] = $this->Absensi_model->getRiwayatByNim($mhs->nim);
        $data['mhs'] = $mhs;

        $this->load->view(
            'mahasiswa/riwayat_absensi',
            $data
        );
    }
}