<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('transaksi_model');
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
        $this->load->view('admin-layout/wrapper',['content'=>'admin/transaksi/v_transaksi','listTransaksi'=>$this->transaksi_model->getAll()]);
        $this->load->view('admin-layout/footer');
    }
    public function tambah()
    {
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/transaksi/v_transaksi_add']);
        $this->load->view('admin-layout/footer');
    }

    public function ubah($id)
    {
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/transaksi/v_transaksi_ubah',
        'trx'=>$this->transaksi_model->getDetail($id),
        'produk'=>$this->transaksi_model->getDetailProduk($id),
    ]);
        $this->load->view('admin-layout/footer');
    }
    
    function add(){
        $lastId = $this->transaksi_model->getLastId();
        $no_resi = 'GO'.date('Ymd').'001';
        if(!is_null($this->transaksi_model->getLastId())){
            $no_resi = 'GO'.date('Ymd').'00'.$lastId->id+1;
        }
        $dataTransaksi =[
             'no_resi' => $no_resi,
             'penerima'=> $this->input->post('penerima'),
             'pengirim'=> $this->input->post('pengirim'),
             'alamat_penerima'=> $this->input->post('alamat_penerima'),
             'alamat_pengirim'=> $this->input->post('alamat_pengirim'),
             'telp_pengirim'=> $this->input->post('telp_pengirim'),
             'telp_penerima'=> $this->input->post('telp_penerima'),
             'berat'=> $this->input->post('berat'),
             'harga'=> $this->input->post('harga'),
         ];

        $idTransaksi = $this->transaksi_model->tambahTransaksi($dataTransaksi);
        $namaProduk = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $i = 0;
        if ($namaProduk[0]) {
            foreach ($namaProduk as $row){
                $data = [
                'nama'=>$row,
                'jumlah'=>$jumlah[$i],
                'transaksi_id'=>$idTransaksi
                ];

                $insert = $this->transaksi_model->tambahProduk($data);
                if ($insert) {
                $i++;
                }
            }
        }
        redirect(base_url('admin/transaksi'));
    }

    function update($id){
        $dataTransaksi =[
             'penerima'=> $this->input->post('penerima'),
             'pengirim'=> $this->input->post('pengirim'),
             'alamat_penerima'=> $this->input->post('alamat_penerima'),
             'alamat_pengirim'=> $this->input->post('alamat_pengirim'),
             'telp_pengirim'=> $this->input->post('telp_pengirim'),
             'telp_penerima'=> $this->input->post('telp_penerima'),
             'berat'=> $this->input->post('berat'),
             'harga'=> $this->input->post('harga'),
         ];

        $this->transaksi_model->updateTransaksi($dataTransaksi,$id);

        $namaProduk = $this->input->post('nama');
        $idProduk = $this->input->post('idProduk');
        $jumlah = $this->input->post('jumlah');
        $i = 0;
        if ($namaProduk[0]) {
            foreach ($namaProduk as $row){
                $data = [
                'nama'=>$row,
                'jumlah'=>$jumlah[$i],
                'transaksi_id'=>$id
                ];

                if(isset($idProduk[$i])){
                    $this->transaksi_model->updateProduk($data,$idProduk[$i]);
                }else{
                    $this->transaksi_model->tambahProduk($data);
                }
                $i++;
            }
        }
        redirect(base_url('admin/transaksi'));
    }
    
    function detail($id){
        // var_dump($this->transaksi_model->getDetail($id));
        // var_dump($this->transaksi_model->getDetailProduk($id));
        $this->load->view('admin-layout/header');
        $this->load->view('admin-layout/navigation');
        $this->load->view('admin-layout/wrapper',['content'=>'admin/transaksi/v_transaksi_detail',
        'trx'=>$this->transaksi_model->getDetail($id),
        'produk'=>$this->transaksi_model->getDetailProduk($id),
        'status'=>$this->transaksi_model->getAllStatus($id),
    ]);
    $this->load->view('admin-layout/footer');
}   

function tambahStatus($id){
    $this->transaksi_model->addStatus(['name'=>$this->input->post('name'),'transaksi_id'=>$id]);
    redirect(base_url('admin/transaksi/detail/'.$id));
}

function deleteProduk($id,$idTrx){
    $this->transaksi_model->hapusProduk($id);
    redirect(base_url('admin/transaksi/ubah/'.$idTrx));
}

}


