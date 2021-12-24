<?php

class Logout extends CI_Controller{
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('isLogin') != true){
            redirect(base_url('admin/login'));
        }
    }

    function index(){
        $this->session->unset_userdata('isLogin',FALSE);
        $this->session->unset_userdata('user',FALSE);
        $this->session->unset_userdata('role',FALSE);
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
}