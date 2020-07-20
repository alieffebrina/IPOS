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
        //$idbarang = $this->db->get('tb_penjualan');
        //return $idbarang->row();
    //}

    function getall(){
        $this->db->join('tb_penjualan', 'tb_penjualan.id_penjualan = tb_suratjalan.id_penjualan');
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        return $this->db->get('tb_suratjalan')->result();
    }
    function getsuratjalan($ida){
        $this->db->join('tb_penjualan', 'tb_penjualan.id_penjualan = tb_suratjalan.id_penjualan');
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $where = array(
            'tb_suratjalan.id_suratjalan' => $ida
        );
        return $this->db->get_where('tb_suratjalan', $where)->result();
    }
    // function cekkodepenjualan(){
    //     $this->db->select_max('nourut');
    //     $idbarang = $this->db->get('tb_suratjalan');
    //     return $idbarang->row();
    // }


    function tambahdata($id){
        $pengiriman = $this->input->post('pengiriman');
        if ($pengiriman == 'Dikirim'){
            $status = 'Pending';
        } else {
            $status = 'Terkirim';
        }

        $tb_suratjalan = array(
            'id_user' => $id,
            'id_suratjalan' => $this->input->post('id_suratjalan'),
            'id_penjualan' => $this->input->post('id_penjualan'),
            'tglkirim' => $this->input->post('tgl'),
            'tgl_update' => date('Y-m-d'),
            'namapengirim' => $this->input->post('namapengirim'),
            
            'status' => $status
        );
        
        $this->db->insert('tb_suratjalan', $tb_suratjalan);        
    }
}