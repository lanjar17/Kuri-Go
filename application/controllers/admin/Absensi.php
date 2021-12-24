<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        if($this->session->userdata('isLogin') != true){
            redirect(base_url('admin/login'));
        }else{
            if($this->session->userdata('role') != 'Admin'){
               redirect(base_url('admin/dashboard')); 
            }
        }
    }

    public function index()
    {
        // var_dump( $this->user_model->getListAbsensi());
        // die;
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/absensi/v_absensi_all','listAbsensi'=>$this->user_model->getListAbsensi()]);
        $this->load->view('admin-layout/footer');
    }
}
