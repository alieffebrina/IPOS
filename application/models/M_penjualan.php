<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_penjualan extends CI_Model {
	function cekpenjualantgl(){
        $now = date('Y-m-d');
        $where = array(
            'tglnota' => $now
        );
        return $this->db->get_where('tb_penjualan',$where)->result();
    }

    function cekkodepenjualan(){
        $this->db->select_max('nourut');
        $idbarang = $this->db->get('tb_penjualan');
        return $idbarang->row();
    }

    function getpenjualan(){
        $this->db->select('*');
        $this->db->join('tb_pelanggan', 'tb_penjualan.id_pelanggan = tb_pelanggan.id_pelanggan');
        $query = $this->db->get('tb_penjualan');
        return $query->result();
    }

    function tambahdata($id){
        $harga = $this->input->post('rupiah');
        $harga_str = preg_replace("/[^0-9]/", "", $harga);

        $penjualan = array(
            'id_user' => $id,
            'id_penjualan' => $this->input->post('nonota'),
            'id_pelanggan' => $this->input->post('nama'),
            'tglnota' => date('Y-m-d'),
            'tgl_update' => date('Y-m-d'),
            'total' => $this->input->post('subtotalbawah'),
            'pembayaran' => $this->input->post('pembayaran'),
            'tgljatuhtempo' => date('Y-m-d'),
            'ongkir' => $this->input->post('biayalain'),
            'diskon' => $this->input->post('diskonbawah')

        );
        
        $this->db->insert('tb_penjualan', $penjualan);
    }
}