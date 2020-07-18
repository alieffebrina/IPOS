<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_stok extends CI_Model {

    function tambahdata($id){
        $stokawal = $this->input->post('stok');
        $satuanawal = explode('/', $stokawal);
        $stokkonversi = $this->input->post('stokkonversi');
        $skonversi = explode('/', $stokkonversi);
        $satuan_konversi = $this->input->post('satuan_konversi');
        $stokskrga = $this->input->post('stokskrg');
        if ($satuan_konversi == $satuanawal[1]){
            $stokskrg = $stokskrga;
        } else {
            $stokskrg = ($stokskrga/($skonversi[0]/$satuanawal[0]));
        }
        $harga = array(
            'id_barang' => $this->input->post('idbarang'),
            'id_user' => $id,
            'stokawal' => $this->input->post('stok'),
            'stokskrg' => round($stokskrg,2),
            'status' => '0',
            'tgl_stokopname' => date('Y-m-d'),
            'ket' => $this->input->post('ket'),
        );
        
        $this->db->insert('tb_stokopname', $harga);
       
    }

    function getstokopname(){
        $this->db->select('ts2.satuan satuan_konversi,ts1.satuan nama_satuan,tb_barang.*,tb_stokopname.*,tb_jenisbarang.*,tb_konversi.*');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_stokopname.id_barang');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $this->db->join('tb_konversi', 'tb_konversi.id_konversi = tb_barang.id_konversi');
        $this->db->join('tb_satuan ts2', 'tb_konversi.satuan = ts2.id_satuan');
        $this->db->join('tb_satuan ts1', 'tb_barang.id_satuan = ts1.id_satuan');
        $query = $this->db->get('tb_stokopname');
        return $query->result();
    }

    function getstok(){
        $this->db->select('ts2.satuan satuan_konversi,ts1.satuan nama_satuan,tb_barang.*,tb_jenisbarang.*,tb_konversi.*');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $this->db->join('tb_konversi', 'tb_konversi.id_konversi = tb_barang.id_konversi');
        $this->db->join('tb_satuan ts2', 'tb_konversi.satuan = ts2.id_satuan');
        $this->db->join('tb_satuan ts1', 'tb_barang.id_satuan = ts1.id_satuan');
        $query = $this->db->get('tb_barang');
        return $query->result();
    }

    function aprove($id,$idso,$barang,$stok){
         $so = array(
            'status' => '1',
        );

        $where = array(
            'id_stokopname' =>$idso
        );
        
        $this->db->where($where);
        $this->db->update('tb_stokopname',$so);

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