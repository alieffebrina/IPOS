<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_returpenjualan extends CI_Model {

    

	function cekreturpenjualantgl(){
        $now = date('Y-m-d');
        $where = array(
            'tanggalretur' => $now
        );
        return $this->db->get_where('tb_returpenjualan',$where)->result();
    }

    //function cekkodepenjualan(){
        //$this->db->select_max('nourut');
        //$idbarang = $this->db->get('tb_penjualan');
        //return $idbarang->row();
    //}

    function getall(){
        $this->db->join('tb_penjualan', 'tb_penjualan.id_penjualan = tb_returpenjualan.id_penjualan');
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $this->db->join('tb_detailreturpenjualan', 'tb_detailreturpenjualan.id_retur = tb_returpenjualan.id_returpenjualan');
        $this->db->join('tb_detailpenjualan', 'tb_detailreturpenjualan.id_detailpenjualan = tb_detailpenjualan.id_detailpenjualan');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_detailreturpenjualan.id_barang');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        
        return $this->db->get('tb_returpenjualan')->result();
    }
    function getreturpenjualan($ida){
        $this->db->join('tb_penjualan', 'tb_penjualan.id_penjualan = tb_returpenjualan.id_penjualan');
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $where = array(
            'tb_returpenjualan.id_returpenjualan' => $ida
        );
        return $this->db->get_where('tb_returpenjualan', $where)->result();
    }
    // function cekkodepenjualan(){
    //     $this->db->select_max('nourut');
    //     $idbarang = $this->db->get('tb_suratjalan');
    //     return $idbarang->row();
    // }


    function tambahdata($id){
        date_default_timezone_set('Asia/Jakarta');
        $retur = array(
            'id_user' => $id,
            'id_returpenjualan' => $this->input->post('id_returpenjualan'),
            'id_penjualan' => $this->input->post('id_penjualan'),
            'tanggalretur' => date('Y-m-d'),
            'tgl_update' => date('Y-m-d'),
            'ketretur' => $this->input->post('ketretur'),
            'status' => 1
        );
        // echo'<pre>';print_r($penjualan);exit;
        $this->db->insert('tb_returpenjualan', $retur);
        
        $id_detailpenjualan = $this->input->post('id_detailpenjualan');
        $jumlahretur=$this->input->post('jumlahretur');
        $id_barang=$this->input->post('id_barang');
        $satuan=$this->input->post('satuan');
        $harga=$this->input->post('harga');
        if(!empty($id_detailpenjualan)){
            foreach ($id_detailpenjualan as $key=>$value) {
                if($value!=0){
                    $data = array('id_retur' => $retur['id_returpenjualan'],
                        'id_detailpenjualan' => $value,
                        'jumlahretur' => $jumlahretur[$key],
                        'id_barang' => $id_barang[$key],
                        'satuan' => $satuan[$key],
                        'harga' =>$harga[$key],
                        'status' => 1);

                    $this->db->insert('tb_detailreturpenjualan', $data);

                    $query = "UPDATE tb_barang SET stokretur=(stokretur-".$jumlahretur[$key].") WHERE id_barang='".$id_barang."'";
                            $this->db->query($query);
                }
            }
        }
    }
}