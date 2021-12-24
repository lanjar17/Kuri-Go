<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_Model extends CI_Model
{

    private $tbl_transaksi = 'tbl_transaksi';
    private $tbl_produk = 'tbl_produk';
    private $tbl_status = 'tbl_status_pengiriman';

    public function getAll()
    {
        return $this->db->get($this->tbl_transaksi)->result();
    }

    public function getDetail($id)
    {
        return $this->db->get_where($this->tbl_transaksi,['id'=>$id])->row();
    }

    public function getLastId(){
        return $this->db->order_by('id','DESC')->get($this->tbl_transaksi)->row();
    }

    public function cekResi($data)
    {
        $idTrx = $this->db->get_where($this->tbl_transaksi,['no_resi'=>$data])->row();
        if($idTrx){
            return $this->getAllStatus($idTrx->id);
        }else{
            return false;
        }
    }

    public function tambahTransaksi($data)
    {
        $this->db->insert($this->tbl_transaksi, $data);
        return $this->db->insert_id();
    }
    
    public function updateTransaksi($data,$id)
    {
        return $this->db->where('id',$id)->update($this->tbl_transaksi, $data);
    }
    public function hapus_transaksi($data)
    {
        return $this->db->delete($this->tbl_transaksi, $data);
    }
    
    
    // produk
    public function tambahProduk($data)
    {
        return $this->db->insert($this->tbl_produk,$data);
    }
    public function updateProduk($data,$id)
    {
        return $this->db->where('id',$id)->update($this->tbl_produk, $data);
    }
    public function hapusProduk($id)
    {
        return $this->db->delete($this->tbl_produk,['id'=>$id]);
    }

    public function getDetailProduk($id)
    {
        return $this->db->get_where($this->tbl_produk,['transaksi_id'=>$id])->result();
    }
    
    // status pengiriman
    public function addStatus($data)
    {
      return $this->db->insert($this->tbl_status, $data);
    }

    public function getAllStatus($id)
    {
      return $this->db->order_by('tanggal','DESC')->get_where($this->tbl_status, ['transaksi_id'=>$id])->result();
    }
}
