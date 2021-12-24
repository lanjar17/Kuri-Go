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
            if($this->session->userdata('role') != 'Karyawan'){
               redirect(base_url('admin/dashboard')); 
            }
        }
    }

    public function index()
    {
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/cuti/v_cuti','listCuti'=>$this->cuti_model->getAllByUser($this->session->userdata('user')->id_user)]);
        $this->load->view('admin-layout/footer');
    }

    public function tambah()
    {
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/cuti/v_cuti_add']);
        $this->load->view('admin-layout/footer');
    }

    public function ubah($id)
    {
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/cuti/v_cuti_update',
            'cuti'=>$this->cuti_model->getDetail($id)
        ]);
        $this->load->view('admin-layout/footer');
    }

    function add(){
        $data = [
            'tanggal_pembuatan'=>date('Y-m-d'),
            'tanggal_permintaan'=>$this->input->post('tanggal_permintaan'),
            'keterangan'=>$this->input->post('keterangan'),
            'lama_cuti'=>$this->input->post('lama_cuti'),
            'user_id'=>$this->session->userdata('user')->id_user,
            'status'=>'Menunggu Persetujuan Atasan',
        ];

        $this->cuti_model->add($data);
        redirect(base_url('karyawan/cuti'));
    }

    function update($id){
        $data = [
            'tanggal_permintaan'=>$this->input->post('tanggal_permintaan'),
            'keterangan'=>$this->input->post('keterangan'),
            'lama_cuti'=>$this->input->post('lama_cuti'),
            'user_id'=>$this->session->userdata('user')->id_user
           ];

        $this->cuti_model->update($data,$id);
        redirect(base_url('karyawan/cuti'));
    }

    function delete($id){
        $this->cuti_model->delete($id);
        redirect(base_url('karyawan/cuti'));
    }

    
}
