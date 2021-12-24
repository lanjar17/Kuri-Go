<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cuti_Model extends CI_Model
{

    private $tbl_cuti = 'tbl_cuti';

    public function getAll()
    {
        return $this->db->query('select c.id,u.name as nama_karyawan,d.nama_divisi,c.tanggal_pembuatan,c.tanggal_permintaan,c.status,c.keterangan,c.lama_cuti from tbl_cuti c join tbl_user u on c.user_id = u.id join tbl_divisi d on d.id = u.divisi_id')->result();
    }

    public function getAllByUser($id_user)
    {
        return $this->db->where('user_id',$id_user)->get($this->tbl_cuti)->result();
    }

    public function getDetail($id)
    {
        return $this->db->get_where($this->tbl_cuti,['id'=>$id])->row();
    }

    public function add($data)
    {
        return $this->db->insert($this->tbl_cuti, $data);
    }
    public function update($data,$id)
    {
        return $this->db->where('id',$id)->update($this->tbl_cuti, $data);
    }
    public function delete($id)
    {
        return $this->db->delete($this->tbl_cuti, ['id'=>$id]);
    }
}
