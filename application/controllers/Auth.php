<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Auth_model->login($username);

        if($user){

            if($password == $user->password){

                $session = [
                    'id_user' => $user->id_user,
                    'username' => $user->username,
                    'role' => $user->role,
                    'login' => true
                ];

                $this->session->set_userdata($session);

                switch($user->role){

                    case 'admin':
                        redirect('index.php/dashboard/admin');
                        break;

                    case 'dosen':
                        redirect('index.php/dashboard/dosen');
                        break;

                    case 'mahasiswa':
                        redirect('index.php/dashboard/mahasiswa');
                        break;
                }

            }else{

                $this->session->set_flashdata(
                    'error',
                    'Password salah'
                );

                redirect('auth');
            }

        }else{

            $this->session->set_flashdata(
                'error',
                'Username tidak ditemukan'
            );

            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}