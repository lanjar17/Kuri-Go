<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Note extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('note_model');
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
        $this->load->view('admin-layout/wrapper',['content'=>'admin/note/v_note','listNote'=>$this->note_model->getAllByUser($this->session->userdata('user')->id_user)]);
        $this->load->view('admin-layout/footer');
    }

    public function tambah()
    {
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/note/v_note_add']);
        $this->load->view('admin-layout/footer');
    }

    public function ubah($id)
    {
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/note/v_note_update',
            'note'=>$this->note_model->getDetail($id)
        ]);
        $this->load->view('admin-layout/footer');
    }

    function add(){
        $data = [
            'tanggal_pengerjaan'=>$this->input->post('tanggal_pengerjaan'),
            'keterangan'=>$this->input->post('keterangan'),
            'user_id'=>$this->session->userdata('user')->id_user,
        ];
        
        $this->note_model->add($data);
        redirect(base_url('karyawan/note'));
    }
    
    function update($id){
        $data = [
            'tanggal_pengerjaan'=>$this->input->post('tanggal_pengerjaan'),
            'keterangan'=>$this->input->post('keterangan'),
        ];

        $this->note_model->update($data,$id);
        redirect(base_url('karyawan/note'));
    }

    function delete($id){
        $this->note_model->delete($id);
        redirect(base_url('karyawan/note'));
    }

    
}
