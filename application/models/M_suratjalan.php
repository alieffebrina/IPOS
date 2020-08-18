<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_suratjalan extends CI_Model {
    function ceksuratjalantgl(){
        $vbulan = date("m"); 
        $where = array(
            'month(tgl_update)' => $vbulan
        );
        return $this->db->get_where('tb_suratjalan',$where)->result();
    }
     function sjperid($id){
        $vbulan = date("m"); 
        $where = array(
            'month(tglkirim)' => $vbulan,
            'id_user' => $id
        );
        $query = $this->db->get_where('tb_suratjalan', $where);
        return $query->num_rows();
    }

    function cekkodesuratjalan()
    {
        $this->db->select_max('nourut');
        $idbarang = $this->db->get('tb_suratjalan');
        return $idbarang->row();
    }

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
            'alamatkirim' => $this->input->post('alamatkirim'),
            
            'status' => $status
        );
        
        $this->db->insert('tb_suratjalan', $tb_suratjalan);        
    }

    function edit($ida){
        $barang = array(
            'status' => '1'
        );

        $where = array(
            'id_suratjalan' =>  $ida,
        );
        
        $this->db->where($where);
        $this->db->update('tb_suratjalan',$barang);
    }

    function search($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

        $this->db->join('tb_penjualan', 'tb_penjualan.id_penjualan = tb_suratjalan.id_penjualan');
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("tglkirim BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_suratjalan')->result();
      }
}