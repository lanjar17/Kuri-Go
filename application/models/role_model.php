<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_Model extends CI_Model
{

    private $tbl_role = 'tbl_role';

    public function getAll()
    {
        return $this->db->get($this->tbl_role)->result();
    }

    public function getDetail($id)
    {
        return $this->db->get_where($this->tbl_role,['id'=>$id])->row();
    }

    public function add($data)
    {
        return $this->db->insert($this->tbl_role, $data);
    }
    public function update($data,$id)
    {
        return $this->db->where('id',$id)->update($this->tbl_role, $data);
    }
    public function delete($data)
    {
        return $this->db->delete($this->tbl_role, $data);
    }
}
