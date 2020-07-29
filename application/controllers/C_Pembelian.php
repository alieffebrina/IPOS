<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Pembelian extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_Pembelian');
        $this->load->model('M_Setting');
        $this->load->model('M_suplier');
        $this->load->model('M_barang');
        $this->load->library('pdf');     
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['pembelian'] = $this->M_Pembelian->getall();
        $this->load->view('pembelian/v_vpembelian',$data); 
        $this->load->view('template/footer');
    }

    function laporan()
    {
        $tgla = $this->input->post('tgl');
        $tglb = str_replace(' ', '', $tgla);
        $excel = $this->input->post('excel');
        if ($excel == 'excel'){
            redirect('C_Pembelian/excel/'.$tglb);
        } else {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['pembelian'] = $this->M_Pembelian->getall();
        $this->load->view('pembelian/v_laporanpembelian',$data); 
        $this->load->view('template/footer');
        }
    }


    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);

        $modul = 'pembelian';
        $kode = $this->M_Setting->cekkode($modul);
        foreach ($kode as $modul) {
            $a = $modul->kodefinal;
            if (strpos($a, 'ggal') != false) {
                date_default_timezone_set('Asia/Jakarta');
                $tgl = date('Y-m-d');
                $a = str_replace("tanggal", $tgl, $a);
                $data = $this->M_Pembelian->cekpembeliantgl();
                $no = count($data) + 1;
                $kode2 = str_replace("no", $no, $a);
            } else {
                $data = $this->M_Pembelian->cekkodepembelian();
                foreach ($data as $id) {
                    $id = $id+1;
                    $kode2 = str_replace("no", $id, $a);
                }
            }
        }

        $data['kode'] = $kode2;
        $data['suplier'] = $this->M_suplier->getsuplier();
        $data['barang'] = $this->M_barang->getbarang();
        $this->load->view('pembelian/v_pembelian',$data); 
        $this->load->view('template/footer');
    }

    function tambah(){
        $id = $this->session->userdata('id_user');
        $hasil_kode = $this->M_Pembelian->tambah($id);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Pembelian');

    }

     function tambahretur(){
        $id = $this->session->userdata('id_user');
        $hasil_kode = $this->M_Pembelian->tambahretur($id);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Pembelian/mretur');

    }

    function view($ida)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['pembelian'] = $this->M_Pembelian->getdetail($ida);
        $data['dtlpembelian'] = $this->M_Pembelian->getdetailpembelian($ida);
        $this->load->view('pembelian/v_viewpembelian',$data); 
        $this->load->view('template/footer');
    }

    function hutang()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['pembelian'] = $this->M_Pembelian->gethutang();
        $this->load->view('pembelian/v_vpembelian',$data); 
        $this->load->view('template/footer');
    }


    function retur($ida)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $modul = 'retur pembelian';
        $kode = $this->M_Setting->cekkode($modul);
        foreach ($kode as $modul) {
            $a = $modul->kodefinal;
            if (strpos($a, 'ggal') != false) {
                date_default_timezone_set('Asia/Jakarta');
                $tgl = date('Y-m-d');
                $a = str_replace("tanggal", $tgl, $a);
                $data = $this->M_Pembelian->cekreturtgl();
                $no = count($data) + 1;
                $kode2 = str_replace("no", $no, $a);
            } else {
                $data = $this->M_Pembelian->cekkodepembelian();
                foreach ($data as $id) {
                    $id = $id+1;
                    $kode2 = str_replace("no", $id, $a);
                }
            }
        }

        $data['kode'] = $kode2;
        $data['pembelian'] = $this->M_Pembelian->getdetail($ida);
        $data['dtlpembelian'] = $this->M_Pembelian->getdetailpembelian($ida);
        $this->load->view('pembelian/v_returpembelian',$data); 
        $this->load->view('template/footer');
    }

    function mretur()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['retur'] = $this->M_Pembelian->getretur();
        $this->load->view('pembelian/v_retur',$data); 
        $this->load->view('template/footer');
    }

    function getlimit(){
        $iduser = $this->input->post('id_suplier');
        
        $hasil_kode = $this->M_Pembelian->pemakaianlimit($iduser);
        
        foreach($hasil_kode as $data){
          $total = $data->totalpakai;
          $limitawal = $data->limit;
          $a = number_format($limitawal-$total);
          // $lists = "ok";
        }
        
        $callback = array('limit'=>$a); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
        echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

     function bayar($ida)
    {   
        // $id = $this->session->userdata('id_user');
        $this->M_Pembelian->edit($ida);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Pembelian');
    }

    function statusrubah( $idbarang,$ida)
    {   
        // $id = $this->session->userdata('id_user');
        // $this->M_Pembelian->statusrubah($ida, $idbarang);
        $detailbarang = $this->M_Pembelian->getdetailbarang($idbarang, $ida);
        foreach($detailbarang as $detailbarang){
          $stoka = $detailbarang->stok;
          $konversi = $detailbarang->qttkonversi;
          $hasilkonversi = $detailbarang->hasil_konversi;
          $retur = $detailbarang->qtt;
          $hasilkonversi = $hasilkonversi-$retur;
          $stok = $hasilkonversi/$konversi;
          // echo 'stok = '.$stoka.' konversi = '.$konversi.'hasil_konversi = '.$hasilkonversi.' retur = '.$retur.' stokakhir = '.$stok;
          $this->M_Pembelian->statusrubah($ida, $idbarang, $stok, $hasilkonversi);
        }
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Pembelian/mretur');
    }

     function vretur($ida)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['retur'] = $this->M_Pembelian->vretur($ida);
        $data['dtlretur'] = $this->M_Pembelian->vreturdetail($ida);
        $this->load->view('pembelian/v_detailretur',$data); 
        $this->load->view('template/footer');
    }

    function cetakpembelian($ida){
        $pdf = new FPDF('L','mm',array('110', '215'));
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16,'C');
        // mencetak string 
        $pdf->Cell(200,8,'Pesanan Pembelian',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // Memberikan space kebawah agar tidak terlalu rapat
        // $pdf->Cell(10,8,'',0,1);
        $pdf->SetFont('Arial','',10,'C');

        $pembelian = $this->M_Pembelian->getdetail($ida);
        $dtlpembelian = $this->M_Pembelian->getdetailpembelian($ida);
        foreach ($pembelian as $key ) {
            
            $pdf->Cell(30,7,'Nota Pembelian',0,0);
            $pdf->Cell(5,7,':',0,0,'C');
            $pdf->Cell(40,7,$key->id_pembelian,0,1);
            $pdf->Cell(30,7,'Tanggal',0,0);
            $pdf->Cell(5,7,':',0,0,'C');
            $pdf->Cell(40,7,$key->tglnotapembelian,0,1);
            $pdf->Cell(30,7,'Suplier',0,0);
            $pdf->Cell(5,7,':',0,0,'C');
            $pdf->Cell(40,7,$key->nama_toko,0,1);
            $pdf->Cell(30,7,'Jenis Pembayaran',0,0);
            $pdf->Cell(5,7,':',0,0,'C');
            $pdf->Cell(40,7,$key->jenispembayaran,0,1);
        
        }
            $pdf->Cell(10,7,'No',1,0);
            $pdf->Cell(30,7,'Kode Barang',1,0);
            $pdf->Cell(30,7,'Nama Item',1,0);
            $pdf->Cell(20,7,'Jumlah',1,0);
            $pdf->Cell(20,7,'Satuan',1,0);
            $pdf->Cell(30,7,'Harga',1,0);
            $pdf->Cell(20,7,'Diskon',1,0);
            $pdf->Cell(30,7,'Total',1,1);
        $no =1;
        foreach ($dtlpembelian as $dtl ) {
            
            $pdf->Cell(10,7,$no++,1,0);
            $pdf->Cell(30,7,$dtl->id_barang,1,0);
            $pdf->Cell(30,7,$dtl->barang,1,0);
            $pdf->Cell(20,7,$dtl->qtt,1,0);
            $pdf->Cell(20,7,$dtl->nama_satuan,1,0);
            $pdf->Cell(30,7,number_format($dtl->harga),1,0);
            $pdf->Cell(20,7,number_format($dtl->diskon),1,0);
            $pdf->Cell(30,7,number_format(($dtl->harga*$dtl->qtt)-$dtl->diskon),1,1);
        
        } 
        foreach ($pembelian as $key ) {
            
            $pdf->Cell(30,7,'Diskon',0,0);
            $pdf->Cell(5,7,':',0,0,'C');
            $pdf->Cell(40,7,$key->diskon,0,1);
            $pdf->Cell(30,7,'Biaya Lain ',0,0);
            $pdf->Cell(5,7,':',0,0,'C');
            $pdf->Cell(40,7,$key->biayalain,0,1);
            $pdf->Cell(30,7,'Total Akhir',0,0);
            $pdf->Cell(5,7,':',0,0,'C');
            $pdf->Cell(40,7,number_format($key->total),0,1);
        
        }

        $pdf->Output();
    }
}
