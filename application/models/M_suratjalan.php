<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_suratjalan extends CI_Model {

    

	function ceksuratjalantgl(){
        $now = date('Y-m-d');
        $where = array(
            'tglkirim' => $now
        );
        return $this->db->get_where('tb_suratjalan',$where)->result();
    }

    //function cekkodepenjualan(){
        //$this->db->select_max('nourut');
        //$idbarang = $this->db->get('tb_pembelian');
        //return $idbarang->row();
    //}
}