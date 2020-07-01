<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_User extends CI_Model {

	function getuser(){
		$this->db->select('*');
        $this->db->join('tb_provinsi', 'tb_provinsi.id_provinsi = tb_user.id_provinsi');
        $this->db->join('tb_kota', 'tb_kota.id_kota = tb_user.id_kota');
        $query = $this->db->get('tb_user');
    	return $query->result();
    }

    function cek_user($kode){
        $this->db->select('*');
        $where = array(
            'username' => $kode
        );
        $query = $this->db->get_where('tb_user', $where);
        return $query->result();
    }

    function tambahdata(){
        $user = array(
            'nik' => $this->input->post('nik'),
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'id_kota' => $this->input->post('kota'),
            'id_provinsi' => $this->input->post('prov'),
            'password' => $this->input->post('password'),
        );
        
        $this->db->insert('tb_user', $user);
    }

    function getspek($id){
		$this->db->select('*');
        $this->db->join('tb_provinsi', 'tb_provinsi.id_provinsi = tb_user.id_provinsi');
        $this->db->join('tb_kota', 'tb_kota.id_kota = tb_user.id_kota'); 
        $where = array(
            'id_user' => $id
        );
        $query = $this->db->get_where('tb_user', $where);
    	return $query->result();
    }

    function edit(){
        $user = array(
            'nik' => $this->input->post('nik'),
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'id_kota' => $this->input->post('kota'),
            'id_provinsi' => $this->input->post('prov'),
            'password' => $this->input->post('password'),
        );

        $where = array(
            'id_user' =>  $this->input->post('id'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_user',$user);
    }

    
}