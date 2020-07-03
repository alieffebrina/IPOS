<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_satuan extends CI_Model {

	function getsatuan(){
		$this->db->select('*');
        $query = $this->db->get('tb_satuan');
    	return $query->result();
    }

    function cek_satuan($kode){
        $this->db->select('*');
        $where = array(
            'satuan' => $kode
        );
        $query = $this->db->get_where('tb_satuan', $where);
        return $query->result();
    }

    function tambahdata(){
        $satuan = array(
            'satuan' => $this->input->post('satuan')
        );
        
        $this->db->insert('tb_satuan', $satuan);
    }

    function getspek($id){
		$this->db->select('*');
        $where = array(
            'id_satuan' => $id
        );
        $query = $this->db->get_where('tb_satuan', $where);
    	return $query->result();
    }

    function edit(){
        $satuan = array(
            'satuan' => $this->input->post('satuan')
        );

        $where = array(
            'id_satuan' =>  $this->input->post('id'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_satuan',$satuan);
    }

    
}