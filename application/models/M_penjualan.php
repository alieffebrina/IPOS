<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_penjualan extends CI_Model {
	function cekpenjualantgl(){
        $now = date('Y-m-d');
        $where = array(
            'tglnota' => $now
        );
        return $this->db->get_where('tb_penjualan',$where)->result();
    }

    function getall(){
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        // $this->db->order_by('id_pembelian', 'ASC');
        return $this->db->get('tb_penjualan')->result();
    }
    function getdetail($ida){
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $where = array(
            'tb_penjualan.id_penjualan' => $ida
        );
        return $this->db->get_where('tb_penjualan', $where)->result();
    }

    function getpiutang(){
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $where = array(
            'status' => 'belum lunas'
        );
        return $this->db->get_where('tb_penjualan',$where)->result();
    }

    function pemakaianlimit($iduser){
        $this->db->select('sum(total) as totalpakai, tb_pelanggan.*');
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $where = array(
            'tb_pelanggan.id_pelanggan' => $iduser,
            'status' => 'belum lunas'
        );
        return $this->db->get_where('tb_penjualan', $where)->result();
    }

    function getdetailpenjualan($ida){
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_detailpenjualan.id_barang');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $where = array(
            'tb_detailpenjualan.id_penjualan' => $ida
        );
        return $this->db->get_where('tb_detailpenjualan', $where)->result();
    }

    function getretur($ida){
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $where = array(
            'tb_penjualan.id_penjualan' => $ida
        );
        return $this->db->get_where('tb_penjualan', $where)->result();
    }

    function getlaporan($ida){
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $where = array(
            'tb_penjualan.id_penjualan' => $ida
        );
        return $this->db->get_where('tb_penjualan', $where)->result();
    }

    function getreturpenjualan($ida){
        $this->db->join('tb_barang', 'tb_barang.id_barang = returpenjualan.id_barang');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $where = array(
            'returpenjualan.id_penjualan' => $ida
        );
        return $this->db->get_where('returpenjualan', $where)->result();
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
        // echo "<pre>";print_r($this->input->post());exit;
        $pembayaran = $this->input->post('pembayaran');
        if ($pembayaran == 'cash'){
            $status = 1;
        } else {
            $status = 0;
        }

        date_default_timezone_set('Asia/Jakarta');
        $penjualan = array(
            'id_user' => $id,
            'id_penjualan' => $this->input->post('nonota'),
            'id_pelanggan' => $this->input->post('nama'),
            'tglnota' => date('Y-m-d'),
            'tgl_update' => date('Y-m-d'),
            'subtotal' => $this->input->post('subtotalbawahrupiah'),
            'total' => $this->input->post('total'),
            'pembayaran' => $this->input->post('pembayaran'),
            'tgljatuhtempo' => date_format(date_create($this->input->post('tgljatuhtempo')), 'Y-m-d'),
            'ongkir' => $this->input->post('biayalain'),
            'diskon' => $this->input->post('diskonbawah'),
            'status' => $status
        );
        // echo'<pre>';print_r($penjualan);exit;
        $this->db->insert('tb_penjualan', $penjualan);
        if ($pembayaran != 'cash'){
            $query = "UPDATE tb_pelanggan SET tb_pelanggan.limit=tb_pelanggan.limit-".$penjualan['total']." WHERE id_pelanggan='".$penjualan['id_pelanggan']."'";
            $this->db->query($query);
        }
        $barang = $this->input->post('id_barang');
        $qtt=$this->input->post('qtt');
        $satuan=$this->input->post('satuan');
        $harga=$this->input->post('harga');
        $diskon=$this->input->post('diskon');
        $subtotal=$this->input->post('subtotal');
        if(!empty($barang)){
            foreach ($barang as $key=>$value) {
                    // print_r($arrayName);
                $data = array('id_penjualan' => $penjualan['id_penjualan'],
                    'order_no'=>($key+1),
                    'id_barang' => $value,
                    'qtt' => $qtt[$key],
                    'satuan' => $satuan[$key],
                    'diskon' => $diskon[$key],
                    'harga' =>$harga[$key],
                    'subtotal' => $subtotal[$key] );

                $this->db->insert('tb_detailpenjualan', $data);

                $query = "UPDATE tb_barang SET stok=(stok-".$qtt[$key].") WHERE id_barang='".$value."'";
                        $this->db->query($query);
            }
        }
    }

    function edit($ida){
        $barang = array(

            'status' => '1'
        );

        $where = array(
            'id_penjualan' =>  $ida,
        );
        
        $this->db->where($where);
        $this->db->update('tb_penjualan',$barang);
    }
}