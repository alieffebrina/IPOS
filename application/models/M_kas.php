<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kas extends CI_Model {

    function getall(){
        $this->db->select('*');
        $this->db->order_by('tglkas', 'ASC');
        $query = $this->db->get('tb_kas');
        return $query->result();
    }

     function tambahdata($id){
        $harga = $this->input->post('rupiah');
        $harga_str = preg_replace("/[^0-9]/", "", $harga);

        $kas = array(
            'id_user' => $id,
            'ket' => $this->input->post('ket'),
            'nominal' => $harga_str,
            'tglkas' => $this->input->post('tgl')
        );
        
        $this->db->insert('tb_kas', $kas);
    }
}