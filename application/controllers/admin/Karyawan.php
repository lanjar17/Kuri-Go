<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('divisi_model');
        $this->load->model('role_model');
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
        $this->load->view('admin-layout/wrapper',['content'=>'admin/karyawan/v_karyawan','listKaryawan'=>$this->user_model->getAllUser()]);
        $this->load->view('admin-layout/footer');
    }

    public function tambah()
    {
        $data = ['content'=>'admin/karyawan/v_karyawan_add','listDivisi'=>$this->divisi_model->getAll(),'listRole'=>$this->role_model->getAll()];
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',$data);
        $this->load->view('admin-layout/footer');
    }

    public function ubah($id)
    {
        $data = [
            'content'=>'admin/karyawan/v_karyawan_update','listDivisi'=>$this->divisi_model->getAll(),
            'listRole'=>$this->role_model->getAll(),
            'user'=>$this->user_model->getDetailUser($id)
        ];
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',$data);
        $this->load->view('admin-layout/footer');
    }

    function add()
    {
        $data = [
            'name' => $this->input->post('name'),
            'nik'=> $this->input->post('nik'),
            'password'=> $this->input->post('password'),
            'divisi_id'=> $this->input->post('divisi'),
            'tbl_role_id'=> $this->input->post('role'),
            'gaji'=> $this->input->post('gaji'),
            'hak_cuti'=> $this->input->post('hak_cuti')
        ];

        $this->user_model->addKaryawan($data);
        redirect(base_url('admin/karyawan'));
    }
    
    function delete($id){
        $this->user_model->deleteKaryawan(['id'=>$id]);
        redirect(base_url('admin/karyawan'));
    }
    function update($id){
        $data = [
            'name' => $this->input->post('name'),
            'nik'=> $this->input->post('nik'),
            'password'=> $this->input->post('password'),
            'divisi_id'=> $this->input->post('divisi'),
            'tbl_role_id'=> $this->input->post('role'),
            'gaji'=> $this->input->post('gaji'),
            'hak_cuti'=> $this->input->post('hak_cuti')
        ];
        $this->user_model->updateKaryawan($data,$id);
        redirect(base_url('admin/karyawan'));
    }
}
