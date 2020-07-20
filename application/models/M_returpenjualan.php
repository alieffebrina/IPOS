<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_returpenjualan extends CI_Model {

    function tambahdata($id){

        $harga = array(
            'id_penjualan' => $this->input->post('id_penjualan'),
            'id_barang' => $this->input->post('id_barang'),
            'id_user' => $id,
            'barang' => $this->input->post('qtt'),
            'tanggal' => date('Y-m-d'),
            'harga' => $this->input->post('harga'),
            'qtt' => $this->input->post('qtt'),  //qtt pas beli dari penjualan
            'qttretur' => $this->input->post('qttretur'),
            'total' => $this->input->post('total'),
            'ket' => $this->input->post('ket'),
            'status' => '0',
        );
        
        $this->db->insert('returpenjualan', $harga);
       
    }

    function getreturpenjualan(){
        //$this->db->select('ts2.satuan satuan_konversi,ts1.satuan nama_satuan,tb_barang.*,tb_stokopname.*,tb_jenisbarang.*');
        $this->db->join('tb_barang', 'tb_barang.id_barang = returpenjualan.id_barang');
        $this->db->join('tb_penjualan', 'tb_penjualan.id_penjualan = returpenjualan.id_penjualan');
        $query = $this->db->get('returpenjualan');
        return $query->result();
    }

    function terkirim($id,$idrp,$barang,$stokretur){
         $rp = array(
            'status' => '1',
        );

        $where = array(
            'id_returpenjualan' =>$idrp
        );
        
        $this->db->where($where);
        $this->db->update('returpenjualan',$rp);

        $baranga = array(
            'stok' => $stok,
            'id_user' => $id,
            'tgl_update' => date('Y-m-d')
        );

        $where = array(
            'id_barang' => $barang
            // 'id_stokopane' =>$idso
        );
        
        $this->db->where($where);
        $this->db->update('tb_barang',$baranga);
    }
}