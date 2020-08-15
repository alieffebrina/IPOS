<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Pembelian extends CI_Model {
	function cekpembeliantgl(){
        $now = date('Y-m-d');
        $where = array(
            'tglnotapembelian' => $now
        );
        return $this->db->get_where('tb_pembelian',$where)->result();
    }

     function datapembelian(){
        $vbulan = date("m"); 
         $this->db->select('sum(total) as totalbulanini');
        $this->db->where('month(tglnotapembelian)',$vbulan);
        $query = $this->db->get('tb_pembelian');
        return $query->result();
    }

    function cekreturtgl(){
        $now = date('Y-m-d');
        $where = array(
            'tglretur' => $now
        );
        return $this->db->get_where('tb_returpembelian',$where)->result();
    }


    function getall(){
        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');
        // $this->db->order_by('id_pembelian', 'ASC');
        return $this->db->get('tb_pembelian')->result();
    }

    function getretur(){
        $this->db->select('tb_returpembelian.total totalretur,tb_pembelian.*,tb_suplier.*, tb_returpembelian.*');
        $this->db->join('tb_pembelian', 'tb_pembelian.id_pembelian = tb_returpembelian.notapembelian');
        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');
        $this->db->order_by('id_returpembelian', 'DESC');
        return $this->db->get('tb_returpembelian')->result();
    }

    function gethutang(){
        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');
        $where = array(
            'status' => 'belum'
        );
        return $this->db->get_where('tb_pembelian',$where)->result();
    }

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
        $this->db->select('ts2.satuan satuan_konversi,ts1.satuan nama_satuan,tb_detailpembelian.harga hargabeli, tb_detailpembelian.*,tb_barang.*, tb_konversi.*,tb_jenisbarang.*');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_detailpembelian.id_barang');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $this->db->join('tb_konversi', 'tb_konversi.id_konversi = tb_barang.id_konversi');
        $this->db->join('tb_satuan ts2', 'tb_konversi.satuan = ts2.id_satuan');
        $this->db->join('tb_satuan ts1', 'tb_barang.id_satuan = ts1.id_satuan');
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
            'biayalain' => preg_replace('/([^0-9]+)/','',$this->input->post('biayalain')),
            'diskon' =>preg_replace('/([^0-9]+)/','',$this->input->post('diskonbawah')),
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

    function tambahretur($id){

        $jenispengembalian = $this->input->post('pembayaran');
        $barang = $this->input->post('barang');
        $hargaretur=$this->input->post('hargaretur');
        $qttretur=$this->input->post('qttretur');
        $stokretur=$this->input->post('stokretur');
        $satuan_konversi=$this->input->post('satuan_konversi');
        $hasil_konversi=$this->input->post('stokkonversi');
        $qttkonversi=$this->input->post('qttkonversi');
        if(!empty($qttretur)){
            foreach ($qttretur as $key=>$value) {
                if($value!=0){

                    $stok = array(
                       'stokretur' => $stokretur[$key]+$value,
                    );

                    if ($jenispengembalian == 'barang'){
                        if ($hasil_konversi[$key]<$value){
                            $status = 'belum';   
                        } else {
                            $status = 'sudah';
                            $stok = array(
                            'stokretur' => $stokretur[$key]+$value,
                            'hasil_konversi' => $hasil_konversi[$key]-$value,
                            'stok' => ($hasil_konversi[$key]-$value)/$qttkonversi[$key],
                            );
                        }
                    } else {
                        $status = 'sudah';
                    }
                        $data = array(
                        'id_retur' => $this->input->post('noretur'),
                        'id_barang' => $barang[$key],
                        'qtt' => $value,
                        'satuanretur' => $satuan_konversi[$key],
                        'harga' => $hargaretur[$key]/$qttkonversi[$key],
                        'subtotal' => ($hargaretur[$key]/$qttkonversi[$key])*$value,
                        'statusdetail' => $status );

                        $this->db->insert('tb_detailreturpembelian', $data);
                    
                   
                    $where = array(
                        'id_barang' =>  $barang[$key],
                        );
                        
                    $this->db->where($where);
                    $this->db->update('tb_barang',$stok);                    
                                   
                }
            }
        }
        $a =  $this->input->post('noretur');
        $totalretur = $this->db->query("select sum(subtotal) as totalretur from tb_detailreturpembelian where id_retur = '$a'"); 
            foreach ($totalretur->result() as $totalretur) {
                $b = $totalretur->totalretur;
            }

        $pembelian = array(
            'id_user' => $id,
            'notapembelian' => $this->input->post('nonota'),
            'id_returpembelian' => $this->input->post('noretur'),
            'tglretur' => date('Y-m-d'),
            'total' => $b,
            'jenispengembalian' => $this->input->post('pembayaran'),
            'ket' => $this->input->post('ket')
        );
        
        $this->db->insert('tb_returpembelian', $pembelian);
        
    }

    function edit($ida){
        $barang = array(
            'status' => 'lunas'
        );

        $where = array(
            'id_pembelian' =>  $ida,
        );
        
        $this->db->where($where);
        $this->db->update('tb_pembelian',$barang);
    }

    function statusrubah($ida, $idbarang, $stok, $hasilkonversi){
        $barang = array(
            'statusdetail' => 'sudah'
        );

        $where = array(
            'id_detailreturbeli' =>  $ida,
            'id_barang' => $idbarang
        );
        
        $this->db->where($where);
        $this->db->update('tb_detailreturpembelian',$barang);


        $barang = array(
            'hasil_konversi' => $hasilkonversi,
            'stok' => $stok
        );

        $where = array(
            'id_barang' => $idbarang
        );
        
        $this->db->where($where);
        $this->db->update('tb_barang',$barang);

    }


    function vretur($ida){
        // $this->db->select('tb_returpembelian.total totalretur,tb_pembelian.*,tb_suplier.*, tb_returpembelian.*');
        $this->db->join('tb_pembelian', 'tb_pembelian.id_pembelian = tb_returpembelian.notapembelian');
        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');
        $where = array(
            'tb_returpembelian.id_returpembelian' => $ida
        );
        return $this->db->get_where('tb_returpembelian', $where)->result();
    }

    function vreturdetail($ida){
        // $this->db->select('tb_detailreturpembelian.harga hargaretur, tb_barang.*, tb_jenisbarang.*');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_detailreturpembelian.id_barang');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $where = array(
            'tb_detailreturpembelian.id_retur' => $ida
        );
        return $this->db->get_where('tb_detailreturpembelian', $where)->result();
    }

    function getdetailbarang($idbarang, $ida){

        $this->db->join('tb_detailreturpembelian', 'tb_detailreturpembelian.id_barang = tb_barang.id_barang');
        $this->db->join('tb_konversi', 'tb_konversi.id_konversi = tb_barang.id_konversi');
        $where = array(
            'tb_barang.id_barang' => $idbarang,
            'tb_detailreturpembelian.id_detailreturbeli' => $ida,
        );
        return $this->db->get_where('tb_barang', $where)->result();
    }

    function search($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("tglnotapembelian BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_pembelian')->result();
      }

      function excel($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

        $this->db->join('tb_pembelian', 'tb_pembelian.id_pembelian = tb_detailpembelian.id_pembelian');
        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_detailpembelian.id_barang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("tglnotapembelian BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_detailpembelian')->result();
      }

      function lhutang($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');
        $this->db->where("status = 'belum'");

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("status = 'belum' and tglnotapembelian BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_pembelian')->result();
      }

      function excelhutang($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

        $this->db->join('tb_pembelian', 'tb_pembelian.id_pembelian = tb_detailpembelian.id_pembelian');
        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_pembelian.id_suplier');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_detailpembelian.id_barang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $this->db->where("status = 'belum'");

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("status = 'belum' and tglnotapembelian BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_detailpembelian')->result();
      }

}