

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        if($this->session->userdata('isLogin') == true){
            redirect(base_url('admin/dashboard'));
        }

    }

    public function index()
    {
        $this->load->view('admin-layout/header');
        $this->load->view('admin/v_login');
        $this->load->view('admin-layout/footer');
    }

    function auth(){
      $auth = $this->user_model->login( $this->input->post('nik'), $this->input->post('password'));
      if($auth){
          $this->session->set_userdata([
              'user'=>$auth,
              'isLogin'=> true,
              'role'=>$auth->role
          ]);
              redirect(base_url('admin/dashboard'));
        }else{
            $this->session->set_flashdata('alert','NIK / Password anda salah');
            redirect(base_url('admin/login'));
      }
    }
}
