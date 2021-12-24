<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('cuti_model');
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
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/cuti/v_cuti_all','listCuti'=>$this->cuti_model->getAll()]);
        $this->load->view('admin-layout/footer');
    }

    function aprove($id){
        $this->cuti_model->update(['status'=>'Disetujui Atasan'],$id);
        redirect(base_url('admin/cuti'));
    }
    function tolak($id){
        $this->cuti_model->update(['status'=>'Ditolak atasan'],$id);
        redirect(base_url('admin/cuti'));
    }
}
