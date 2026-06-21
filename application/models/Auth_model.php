<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function login($username)
    {
        return $this->db
                    ->where('username',$username)
                    ->get('users')
                    ->row();
    }
}