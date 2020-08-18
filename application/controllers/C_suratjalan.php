<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_suratjalan extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_suratjalan');
        $this->load->model('M_Setting');
        $this->load->model('M_penjualan');
        $this->load->model('M_barang');
        $this->load->library('pdf'); 
        if(!$this->session->userdata('id_user')){
            redirect('C_Login');
        }
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['suratjalan'] = $this->M_suratjalan->getall();
        $this->load->view('penjualan/v_vsuratjalan',$data); 
        $this->load->view('template/footer');
    }

    function tambah(){
        $id = $this->session->userdata('id_user');
        $hasil_kode = $this->M_suratjalan->tambahdata($id);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_suratjalan');

    }

    function sj($nota)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);

        $modul = 'suratjalan';
        $kode = $this->M_Setting->cekkode($modul);
        foreach ($kode as $modul) {
            $a = $modul->kodefinal;
            if (strpos($a, 'ggal') != false) {
                date_default_timezone_set('Asia/Jakarta');
                $tgl = date('d-m-Y');
                $a = str_replace("tanggal", $tgl, $a);
                $data = $this->M_suratjalan->ceksuratjalantgl();
                $no = count($data) + 1;
                $kode2 = str_replace("no", $no, $a);
            } else {
                $data = $this->M_suratjalan->cekkodesuratjalan();
                foreach ($data as $id) {
                    $id = $id+1;
                    $kode2 = str_replace("no", $id, $a);
                }
            }
        }

        $idnama = $this->session->userdata('nama');
        $name = str_replace("username", $idnama, $kode2);
        $data['nota'] = $nota;
        $data['kode'] = $name;
        $data['penjualan'] = $this->M_penjualan->getpenjualan();
        $data['barang'] = $this->M_barang->getbarang();
        $this->load->view('penjualan/v_suratjalan',$data); 
        $this->load->view('template/footer');
    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);

        $modul = 'suratjalan';
        $kode = $this->M_Setting->cekkode($modul);
        foreach ($kode as $modul) {
            $a = $modul->kodefinal;
            if (strpos($a, 'ggal') != false) {
                date_default_timezone_set('Asia/Jakarta');
                $tgl = date('d-m-Y');
                $a = str_replace("tanggal", $tgl, $a);
                $data = $this->M_suratjalan->ceksuratjalantgl();
                $no = count($data) + 1;
                $kode2 = str_replace("no", $no, $a);
            } else {
                $data = $this->M_suratjalan->cekkodesuratjalan();
                foreach ($data as $id) {
                    $id = $id+1;
                    $kode2 = str_replace("no", $id, $a);
                }
            }
        }

        $idnama = $this->session->userdata('nama');
        $name = str_replace("username", $idnama, $kode2);
        $data['kode'] = $name;
        $data['penjualan'] = $this->M_penjualan->getpenjualan();
        $data['barang'] = $this->M_barang->getbarang();
        $this->load->view('penjualan/v_suratjalan',$data); 
        $this->load->view('template/footer');
    }

    function view($ida)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['suratjalan'] = $this->M_suratjalan->getsuratjalan($ida);
        $data['dtlpenjualan'] = $this->M_penjualan->getdetailpenjualan($data['suratjalan'][0]->id_penjualan);

        //$data['penjualan'] = $this->M_penjualan->getretur($ida);
        //$data['returpenjualan'] = $this->M_penjualan->getreturpenjualan($ida);

        $this->load->view('penjualan/v_viewsuratjalan',$data); 
        $this->load->view('template/footer');
    }

    function kirim($ida)
    {   
        // $id = $this->session->userdata('id_user');
        $this->M_suratjalan->edit($ida);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_suratjalan');
    }

    function cetak($ida)
    {
        $this->load->view('penjualan/cetak'); 
    }

    function cetaksuratjalan($ida){
        $pdf = new FPDF('L','mm',array('110', '215'));
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','',11,'C');
        // mencetak string 
        $pdf->Cell(90,5,'ADP Paving',0,0,'L');        

        $suratjalan = $this->M_suratjalan->getsuratjalan($ida);
        foreach ($suratjalan as $key ) {

            $pdf->Cell(100,5,'Tanggal : '.$key->tglkirim,0,1,'R');
            $pdf->Line(10,15,200,15);
        // Memberikan space kebawah agar tidak terlalu rapat
        // $pdf->Cell(10,8,'',0,1);
            $pdf->SetFont('Arial','',10,'C');
            
            $pdf->Cell(40,5,'Nota Surat Jalan',0,0);
            $pdf->Cell(5,5,':',0,0,'C');
            $pdf->Cell(40,5,$key->id_suratjalan,0,1);
            $pdf->Cell(40,5,'Nota Penjualan',0,0);
            $pdf->Cell(5,5,':',0,0,'C');
            $pdf->Cell(40,5,$key->id_penjualan,0,1);
            $pdf->Cell(40,5,'Nama Pelanggan',0,0);
            $pdf->Cell(5,5,':',0,0,'C');
            $pdf->Cell(40,5,$key->nama,0,1);
            $pdf->Cell(40,5,'Alamat',0,0);
            $pdf->Cell(5,5,':',0,0,'C');
            $pdf->Cell(40,5,$key->alamat,0,1);
            $pdf->Cell(40,5,'Nama Pengirim',0,0);
            $pdf->Cell(5,5,':',0,0,'C');
            $pdf->Cell(40,5,$key->namapengirim,0,1);
        
        }
        // $pdf->AutoPrint(true);
        $pdf->Output();
    }

}