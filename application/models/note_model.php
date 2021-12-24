<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Note_Model extends CI_Model
{
    private $tbl_note = 'tbl_catatan_kerja';

    public function getAll()
    {
        return $this->db->get($this->tbl_note)->result();
    }

    public function getAllByUser($id_user)
    {
        return $this->db->where('user_id',$id_user)->get($this->tbl_note)->result();
    }

    public function getDetail($id)
    {
        return $this->db->get_where($this->tbl_note,['id'=>$id])->row();
    }

    public function add($data)
    {
        return $this->db->insert($this->tbl_note, $data);
    }
    public function update($data,$id)
    {
        return $this->db->where('id',$id)->update($this->tbl_note, $data);
    }
    public function delete($id)
    {
        return $this->db->delete($this->tbl_note, ['id'=>$id]);
    }
}
