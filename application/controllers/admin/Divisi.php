<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('divisi_model');
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
        $this->load->view('admin-layout/wrapper',['content'=>'admin/divisi/v_divisi','listDivisi'=>$this->divisi_model->getAll()]);
        $this->load->view('admin-layout/footer');
    }

    public function tambah()
    {
        $data = ['content'=>'admin/divisi/v_divisi_add'];
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',$data);
        $this->load->view('admin-layout/footer');
    }

    public function ubah($id)
    {
           $data = [
            'content'=>'admin/divisi/v_divisi_update',
            'divisi'=>$this->divisi_model->getDetail($id)
        ];
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',$data);
        $this->load->view('admin-layout/footer');
    }

    function add()
    {
        $data = [
            'nama_divisi' => $this->input->post('name'),
        ];

        $this->divisi_model->add($data);
        redirect(base_url('admin/divisi'));
    }
    
    function delete($id){
        $this->divisi_model->delete(['id'=>$id]);
        redirect(base_url('admin/divisi'));
    }

    function update($id){
        $data = [
            'nama_divisi' => $this->input->post('name'),
        ];
        $this->divisi_model->update($data,$id);
        redirect(base_url('admin/divisi'));
    }
}
