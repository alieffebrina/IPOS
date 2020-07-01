<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_gudang extends CI_Model {

	function getgudang(){
		$this->db->select('*');
        $query = $this->db->get('tb_gudang');
    	return $query->result();
    }

    function cek_gudang($kode){
        $this->db->select('*');
        $where = array(
            'gudang' => $kode
        );
        $query = $this->db->get_where('tb_gudang', $where);
        return $query->result();
    }

    function tambahdata(){
        $gudang = array(
            'gudang' => $this->input->post('gudang')
        );
        
        $this->db->insert('tb_gudang', $gudang);
    }

    function getspek($id){
		$this->db->select('*');
        $where = array(
            'id_gudang' => $id
        );
        $query = $this->db->get_where('tb_gudang', $where);
    	return $query->result();
    }

    function edit(){
        $gudang = array(
            'gudang' => $this->input->post('gudang'),
            'status' => $this->input->post('status')
        );

        $where = array(
            'id_gudang' =>  $this->input->post('id'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_gudang',$gudang);
    }

    
}