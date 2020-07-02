<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Setting extends CI_Model {

	function getprovinsi(){
		$this->db->select('*');
		$this->db->from('tb_provinsi');
		$query = $this->db->get();
    	return $query->result();
    }

    function getkota($id){
		$this->db->select('*');
		$where = array(
            'id_provinsi' => $id
        );
        $query = $this->db->get_where('tb_kota', $where);
    	return $query->result();
    }

    function delete($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
    }
 }