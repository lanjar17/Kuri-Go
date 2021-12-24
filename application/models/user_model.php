<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{

    private $tbl_user = 'tbl_user';
    private $tbl_divisi = 'tbl_divisi';
    private $tbl_absen = 'tbl_absen';
    private $tbl_cuti = 'tbl_cuti';

    // karyawan
    public function getAllUser()
    {
        return $this->db->select('tbl_user.id as user_id,nik,gaji,hak_cuti,name,nama_divisi')->from($this->tbl_user)->join('tbl_divisi','tbl_divisi.id = tbl_user.divisi_id')->get()->result();
    }

    public function getDetailUser($id)
    {
        return $this->db->get_where($this->tbl_user, ["id" => $id])->row();
    }

    public function addKaryawan($data)
    {
        return $this->db->insert($this->tbl_user, $data);
    }

    public function updateKaryawan($data,$id)
    {
        return $this->db->where('id',$id)->update($this->tbl_user, $data);
    }


    public function deleteKaryawan($data)
    {
        return $this->db->delete($this->tbl_user, $data);
    }

    // cuti
    public function insertCuti($data)
    {
        return $this->db->insert($this->tbl_cuti, $data);
    }

    public function updateCuti($data)
    {
        return $this->db->update($this->tbl_cuti, $data);
    }

    // auth

    public function login($nik,$password)
    {
       $checkNik = $this->db->get_where($this->tbl_user, ['nik' => $nik])->row();
       if(!empty($checkNik)){ 
        $checkPass = $this->db->select('tbl_user.id as id_user, tbl_user.name as nama_user,nik,password,tbl_role.name as role,nama_divisi')->from($this->tbl_user)->join('tbl_divisi','tbl_divisi.id = tbl_user.divisi_id')->join('tbl_role','tbl_role.id = tbl_user.tbl_role_id')->where(['password' => $password,'nik'=>$nik])->get()->row();
        if($checkPass){
            return $checkPass;
        }else{
            return false;
        }
       }else{
        return false;
    }

    }

    // absen
    public function getListAbsensiUser($user_id)
    {
        return $this->db->order_by('tanggal_kehadiran','desc')->where('user_id',$user_id)->get($this->tbl_absen)->result();
    }

    public function getListAbsensi()
    {
        // return $this->db->select('*')->from($this->tbl_absen.' ab')->join($this->tbl_user,'ab.user_id ='.$this->tbl_user.'.id')->join($this->tbl_divisi,$this->tbl_divisi.'.id = '.$this->tbl_user.'.divisi_id')->get($this->tbl_absen)->result();
        return $this->db->query('select * from tbl_absen join tbl_user on tbl_absen.user_id = tbl_user.id join tbl_divisi on tbl_divisi.id = tbl_user.divisi_id')->result();
    }

    public function getDetailAbsensi($data){
     $detail =   $this->db->get_where($this->tbl_absen, $data)->row();
     if($detail){
         return $detail; 
     }else{
         return false;
     }
    }

    public function check_in($data)
    {
        return $this->db->insert($this->tbl_absen, $data);
    }

    public function check_out($data,$id)
    {
        return $this->db->where('id',$id)->update($this->tbl_absen, $data);
    }
}
