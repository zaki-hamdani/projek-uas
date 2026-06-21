<?php

function cek_login()
{
    $ci =& get_instance();

    if(!$ci->session->userdata('login')){
        redirect('auth');
    }
}

function cek_role($role)
{
    $ci =& get_instance();

    if($ci->session->userdata('role') != $role){
        redirect('auth');
    }
}