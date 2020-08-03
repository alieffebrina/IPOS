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

    function getlaporan(){
        if(isset($_POST) && !empty($_POST)){
            $tgl=explode(' - ', $_POST['tgl']);
            $tgl_mulai=explode('/', $tgl[0]);
            $tgl_sampai=explode('/', $tgl[1]);
        }

        $query = "SELECT tb_suratjalan.id_suratjalan,tb_suratjalan.status status_kirim,tb_penjualan.* from tb_penjualan 
        left join tb_suratjalan on tb_suratjalan.id_penjualan = tb_penjualan.id_penjualan";
        if(!empty($tgl[0]) && !empty($tgl[1])){
            $query=$query." where tglnota between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'";
        }
        $query = $this->db->query($query);

        return $query->result();
    }

     function getlaporanpiutang(){
        if(isset($_POST) && !empty($_POST)){
            $tgl=explode(' - ', $_POST['tgl']);
            $tgl_mulai=explode('/', $tgl[0]);
            $tgl_sampai=explode('/', $tgl[1]);
        }

        $query = "SELECT tb_suratjalan.id_suratjalan,tb_suratjalan.status status_kirim,tb_penjualan.* from tb_penjualan 
        left join tb_suratjalan on tb_suratjalan.id_penjualan = tb_penjualan.id_penjualan";
        if(!empty($tgl[0]) && !empty($tgl[1])){
            $query=$query." where tglnota between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'";
        }
        $query = $this->db->query($query);

        return $query->result();
    }

    function getlaporanlabarugi(){
        if(isset($_POST) && !empty($_POST)){
            $tgl=explode(' - ', $_POST['tgl']);
            $tgl_mulai=explode('/', $tgl[0]);
            $tgl_sampai=explode('/', $tgl[1]);
        }

        $queryjual = "SELECT tb_suratjalan.id_suratjalan,tb_suratjalan.status status_kirim,tb_penjualan.* from tb_penjualan 
        left join tb_suratjalan on tb_suratjalan.id_penjualan = tb_penjualan.id_penjualan";
        if(!empty($tgl[0]) && !empty($tgl[1])){
            $queryjual=$queryjual." where tglnota between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'";
        }
        $queryjual = $this->db->queryjual($queryjual);

        $querybeli = "SELECT tb_pembelian.* from tb_pembelian";
        if(!empty($tgl[0]) && !empty($tgl[1])){
            $querybeli=$querybeli." where tglnota between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'";
        }
        $querybeli = $this->db->querybeli($querybeli);

        $querykas = "SELECT tb_kas.* from tb_kas";
        if(!empty($tgl[0]) && !empty($tgl[1])){
            $querykas=$querykas." where tglnota between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'";
        }
        $querykas = $this->db->querykas($querykas);

        return $query->result();
    }

     function getdetaillaporan(){
        if(isset($_POST) && !empty($_POST)){
            $tgl=explode(' - ', $_POST['tgl']);
            $tgl_mulai=explode('/', $tgl[0]);
            $tgl_sampai=explode('/', $tgl[1]);
        }
        $query = "SELECT tb_penjualan.status status_penjualan,tb_penjualan.id_penjualan ,tb_penjualan.tglnota, tb_satuan.*,tb_jenisbarang.*,tb_barang.*,tb_detailpenjualan.* from tb_detailpenjualan
        join tb_penjualan on tb_detailpenjualan.id_penjualan = tb_penjualan.id_penjualan
        join tb_barang on tb_detailpenjualan.id_barang = tb_barang.id_barang
        join tb_jenisbarang on tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang
        join tb_satuan on tb_satuan.id_satuan = tb_barang.id_satuan";
        if(!empty($tgl[0]) && !empty($tgl[1])){
            $query=$query." where tglnota between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'";
        }
        $query = $this->db->query($query);

        return $query->result();
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
            'ongkir' => preg_replace('/([^0-9]+)/','',$this->input->post('biayalain')),
            'diskon' => preg_replace('/([^0-9]+)/','',$this->input->post('diskonbawah')),
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

    function datapenjualan(){
        $vbulan = date("m"); 
         $this->db->select('total');
        $this->db->where('month(tglnota)',$vbulan);
        $query = $this->db->get('tb_penjualan');
        return $query->result();
    }

    function penjualan1(){
        $vbulan = date('m') . '- 1 month'; 
         $this->db->select('total');
        $this->db->where('month(tglnota)',$vbulan);
        $query = $this->db->get('tb_penjualan');
        return $query->result();
    }

    function penjualan2(){
        $vbulanq = date('m') . '- 2 month';
        // echo $vbulanq;
         $this->db->select('sum(total) as totaljual');
        $this->db->where('month(tglnota)',$vbulanq);
        $query = $this->db->get('tb_penjualan');
        return $query->result();
    }

    function hutangdashboard(){
        $this->db->select('sum(total) as totalhutang, nama');
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $this->db->where('pembayaran','kredit');
        $this->db->group_by('tb_penjualan.id_pelanggan');
        $query = $this->db->get('tb_penjualan');
        return $query->result();
    }

    function search($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_penjualan');

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("tglnota BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_penjualan')->result();
      }

      function excel($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

        $this->db->join('tb_penjualan', 'tb_penjualan.id_penjualan = tb_detailpenjualan.id_penjualan');
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_detailpenjualan.id_barang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("tglnota BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_detail')->result();
      }

      function lpiutang($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $this->db->where("status = '0'");

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("status = '0' and tglnota BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_penjualan')->result();
      }

      function excelpiutang($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

        $this->db->join('tb_penjualan', 'tb_penjualan.id_penjualan = tb_detailpenjualan.id_penjualan');
        $this->db->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_penjualan.id_pelanggan');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_detailpenjualan.id_barang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $this->db->where("status = '0'");

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("status = '0' and tglnota BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_detailpenjualan')->result();
      }

}