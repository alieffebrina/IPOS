<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_jenisbarang extends CI_Model {

	function getjenisbarang(){
		$this->db->select('*');
        $query = $this->db->get('tb_jenisbarang');
    	return $query->result();
    }

    function cek_jenisbarang($kode){
        $this->db->select('*');
        $where = array(
            'jenisbarang' => $kode
        );
        $query = $this->db->get_where('tb_jenisbarang', $where);
        return $query->result();
    }

    function tambahdata(){
        $jenisbarang = array(
            'jenisbarang' => $this->input->post('jenisbarang')
        );
        
        $this->db->insert('tb_jenisbarang', $jenisbarang);
    }

    function getspek($idjenisbarang){
		$this->db->select('*');
        $where = array(
            'id_jenisbarang' => $idjenisbarang
        );
        $query = $this->db->get_where('tb_jenisbarang', $where);
    	return $query->result();
    }

    function edit(){
        $jenisbarang = array(
            'jenisbarang' => $this->input->post('jenisbarang')
        );

        $where = array(
            'id_jenisbarang' =>  $this->input->post('id'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_jenisbarang',$jenisbarang);
    }

    
}