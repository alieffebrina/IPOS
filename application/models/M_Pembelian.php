<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Pembelian extends CI_Model {
	function cekpembeliantgl(){
        $now = date('Y-m-d');
        $where = array(
            'tglnotapembelian' => $now
        );
        return $this->db->get_where('tb_pembelian',$where)->result();
    }

    function getall(){
        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');
        // $this->db->order_by('id_pembelian', 'ASC');
        return $this->db->get('tb_pembelian')->result();
    }

        //$this->db->select('ts2.satuan satuan_konversi,ts1.satuan nama_satuan,tb_barang.*,tb_stokopname.*,tb_jenisbarang.*');

    function pemakaianlimit($iduser){
        $this->db->select('sum(total) as totalpakai, tb_suplier.*');
        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');
        $where = array(
            'tb_suplier.id_suplier' => $iduser,
            'status' => 'belum'
        );
        return $this->db->get_where('tb_pembelian', $where)->result();
    }
    

    function getdetail($ida){
        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');
        $where = array(
            'tb_pembelian.id_pembelian' => $ida
        );
        return $this->db->get_where('tb_pembelian', $where)->result();
    }

    function getdetailpembelian($ida){
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_detailpembelian.id_barang');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $where = array(
            'tb_detailpembelian.id_pembelian' => $ida
        );
        return $this->db->get_where('tb_detailpembelian', $where)->result();
    }

    function cekkodepembelian(){
        $this->db->select_max('nourut');
        $idbarang = $this->db->get('tb_pembelian');
        return $idbarang->row();
    }
    
    function tambah($id){
        $pembayaran = $this->input->post('pembayaran');
        if ($pembayaran == 'cash'){
            $status = 'lunas';
        } else {
            $status = 'belum';
        }

        $pembelian = array(
            'id_user' => $id,
            'id_pembelian' => $this->input->post('nonota'),
            'id_suplier' => $this->input->post('nama_toko'),
            'tglnotapembelian' => date('Y-m-d'),
            'tgl_update' => date('Y-m-d'),
            'total' => $this->input->post('total'),
            'jenispembayaran' => $this->input->post('pembayaran'),
            'tgljatuhtempo' => date_format(date_create($this->input->post('tgljatuhtempo')), 'Y-m-d'),
            'biayalain' => $this->input->post('biayalain'),
            'diskon' => $this->input->post('diskonbawah'),
            'status' => $status
        );
        
        $this->db->insert('tb_pembelian', $pembelian);

        $barangall = $this->input->post('barangall');
        $baranga= explode(" ", $barangall);
        foreach ($baranga as $key) {
            if ($key != "0"){
            $barangb = explode("/", $key);
            // echo "1.";
                // $no = 1;
                $idbar = $barangb[0];
                $qtt = $barangb[1];
                $diskon = $barangb[2];
                $harga = $barangb[3];
                $stokaw = $barangb[4]; // hasil_konversi
                $idsatuan = $barangb[5];
                $qttkonversi = $barangb[6];
                $t = $stokaw/$qttkonversi;
                $st = ($t*1)+($qtt*1);
                $konv = $st*$qttkonversi;


                // print_r($arrayName);
                $data = array('id_pembelian' => $this->input->post('nonota'),
                'id_barang' => $idbar,
                'qtt' => $qtt,
                'diskon' => $diskon,
                'harga' =>$harga );

                $this->db->insert('tb_detailpembelian', $data);

                $stok = array(
                    'hasil_konversi' => $konv,
                    'stok' => $st,
                );

                $where = array(
                    'id_barang' =>  $idbar,
                );
                
                $this->db->where($where);
                $this->db->update('tb_barang',$stok);
            }
        }
        
    }

}