<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('isLogin') != true){
            redirect(base_url('admin/login'));
        }
    }

    public function index()
    {
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'v_dashboard']);
    }
}
