<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

    public function __construct() {
        parent::__construct();
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
        $this->load->view('admin-layout/wrapper',['content'=>'admin/role/v_role','listRole'=>$this->role_model->getAll()]);
        $this->load->view('admin-layout/footer');
    }

    public function tambah()
    {
        $data = ['content'=>'admin/role/v_role_add'];
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',$data);
        $this->load->view('admin-layout/footer');
    }

    public function ubah($id)
    {
           $data = [
            'content'=>'admin/role/v_role_update',
            'role'=>$this->role_model->getDetail($id)
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
        ];

        $this->role_model->add($data);
        redirect(base_url('admin/role'));
    }
    
    function delete($id){
        $this->role_model->delete(['id'=>$id]);
        redirect(base_url('admin/role'));
    }
    function update($id){
        $data = [
            'name' => $this->input->post('name'),
        ];
        $this->role_model->update($data,$id);
        redirect(base_url('admin/role'));
    }
}
