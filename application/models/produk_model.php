<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_Model extends CI_Model
{
    private $tbl_produk = 'tbl_produk';

    public function tambahProduk($data)
    {
        return $this->db->insert($this->tbl_produk, $data);
    }
}
