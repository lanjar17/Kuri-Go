<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi_Model extends CI_Model
{

    private $tbl_divisi = 'tbl_divisi';

    public function getAll()
    {
        return $this->db->get($this->tbl_divisi)->result();
    }

    public function getDetail($id)
    {
        return $this->db->get_where($this->tbl_divisi,['id'=>$id])->row();
    }

    public function add($data)
    {
        return $this->db->insert($this->tbl_divisi, $data);
    }
    public function update($data,$id)
    {
        return $this->db->where('id',$id)->update($this->tbl_divisi, $data);
    }
    public function delete($data)
    {
        return $this->db->delete($this->tbl_divisi, $data);
    }
}
