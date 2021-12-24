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
            if($this->session->userdata('role') != 'Karyawan'){
               redirect(base_url('admin/dashboard')); 
            }
        }
    }

    public function index()
    {
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/absensi/v_absensi','listAbsensi'=>$this->user_model->getListAbsensiUser($this->session->userdata('user')->id_user)]);
        $this->load->view('admin-layout/footer');
    }

    public function check_in()
    {

        $dataCheckIn = $this->user_model->getDetailAbsensi([
            'user_id' => $this->session->userdata('user')->id_user,
            'tanggal_kehadiran' =>date('Y-m-d')
        ]);
        if(!$dataCheckIn){
            $data = [
                'check_in'=>  date('H:i:s'),
                'tanggal_kehadiran'=>  date('Y-m-d'),
                'user_id'=>$this->session->userdata('user')->id_user
            ];
            $this->user_model->check_in($data);
        }
        redirect(base_url('karyawan/absensi'));

    }

    public function check_out()
    {
       
        $dataCheckOut = $this->user_model->getDetailAbsensi([
            'user_id' => $this->session->userdata('user')->id_user,
            'tanggal_kehadiran' =>date('Y-m-d')
        ]);

        $data = [
            'check_out' => date('H:i:s')
        ];
        
        if($dataCheckOut)
        {
            if(is_null($dataCheckOut->check_out)){
                $this->user_model->check_out($data,$dataCheckOut->id);
            }
        }
        redirect(base_url('karyawan/absensi'));
    }
}
