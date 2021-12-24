<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracking extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('transaksi_model');
    }

	public function index()
	{
        $this->load->view('layout/header');
        $this->load->view('layout/main',['content'=>'v_tracking']);
        $this->load->view('layout/footer');
	}
	public function cek_resi()
	{
        $resi = $this->transaksi_model->cekResi($this->input->post('no_resi'));
        if(!$resi){
            $resi = [];
        }
		$this->load->view('layout/header');
		$this->load->view('layout/main',['content'=>'v_tracking','status'=>$resi,
        'no_resi'=>$this->input->post('no_resi')
    ]);
		$this->load->view('layout/footer');
	}
}
