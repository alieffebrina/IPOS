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
        if(!$this->session->userdata('id_user')){
            redirect('C_Login');
        }
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $username = $this->session->userdata('username');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['pembelian'] = $this->M_Pembelian->getall($id, $username);
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
        $data['pembelian'] = $this->M_Pembelian->search($tglb);
        $this->load->view('pembelian/v_laporanpembelian',$data); 
        $this->load->view('template/footer');
        }
    }

     function lhutang()
    {
        $tgla = $this->input->post('tgl');
        $tglb = str_replace(' ', '', $tgla);
        $excel = $this->input->post('excel');
        if ($excel == 'excel'){
            redirect('C_Pembelian/excelhutang/'.$tglb);
        }
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['pembelian'] = $this->M_Pembelian->lhutang($tglb);
        $this->load->view('pembelian/v_laporanhutang',$data); 
        $this->load->view('template/footer');
        
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
                $tgl = date('d-m-Y');
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
        $idnama = $this->session->userdata('nama');
        $name = str_replace("username", $idnama, $kode2);
        $data['kode'] = $name;
        $data['suplier'] = $this->M_suplier->getsuplier();
        $data['barang'] = $this->M_barang->getbarang();
        $this->load->view('pembelian/v_pembelian',$data); 
        $this->load->view('template/footer');
    }

    function tambah(){
        // echo "total :".$this->input->post('total');
        // echo "diskon :".preg_replace('/([^0-9]+)/','',$this->input->post('diskonbawah'));
        // echo "biayalain :".$this->input->post('biayalain');
        $nota = $this->input->post('nonota');
        $id = $this->session->userdata('id_user');
        $hasil_kode = $this->M_Pembelian->tambah($id);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Pembelian/cetakpembelian/'.$nota);

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
                $tgl = date('d-m-Y');
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
        
        $idnama = $this->session->userdata('nama');
        $name = str_replace("username", $idnama, $kode2);
        $data['kode'] = $name;
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

    function cetak($ida)
    {
        $this->load->view('pembelian/cetak'); 
    }

    function cetakpembelian($ida){

        $this->load->view('master/setting/terbilang'); 
        $pdf = new FPDF('L','mm',array('148', '210'));
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        // mencetak string      

        $pembelian = $this->M_Pembelian->getdetail($ida);
        $dtlpembelian = $this->M_Pembelian->getdetailpembelian($ida);
        foreach ($pembelian as $key ) {

            // $terbilang = $this->Lterbilang->terbilang($key->total);
            $pdf->SetFont('Arial','',10,'C');
            $pdf->Cell(110,5,'UD. ABDI PERTIWI',0,0,'L');
            $pdf->Cell(100,5,'Gresik, '.date('d-m-Y', strtotime($key->tglnotapembelian)),0,1,'L');
            $pdf->Cell(110,5,'JUAL PAVING MULTI',0,0,'L');
            $pdf->Cell(14,5,'Suplier',0,0,'L');
            $pdf->Cell(2,5,' : ',0,0,'C');
            $pdf->Cell(84,5,$key->nama_suplier,0,1,'L');
            $pdf->Cell(110,5,'Gempol Kurung, RT 07 RW 02',0,0,'L');
            $pdf->Cell(14,5,'Telp.',0,0,'L');
            $pdf->Cell(2,5,' : ',0,0,'C');
            $pdf->Cell(84,5,$key->tlp,0,1,'L');
            $pdf->Cell(110,5,'Kec. Menganti - Gresik',0,0,'L');
            $pdf->Cell(14,5,'Alamat',0,0,'L');
            $pdf->Cell(2,5,' : ',0,0,'C');
            $pdf->Cell(84,5,$key->alamat,0,1,'L');
            $pdf->Cell(110,5,'Telp. : 081376767574',0,0,'L');
            $pdf->Cell(100,5,$key->kecamatan.', '.$key->name_kota,0,1,'L');
            $pdf->Cell(110,5,'Website : www.Adppaving.com',0,0,'L');
            $pdf->Cell(14,5,'No. Reg',0,0,'L');
            $pdf->Cell(2,5,' : ',0,0,'C');
            $pdf->Cell(84,5,$key->id_pembelian,0,1,'L');        
            $pdf->Cell(210,5,'',0,1,'C');
            $pdf->SetFont('Arial','',12,'C');
            $pdf->Cell(210,5,'Nota Pembelian',0,1,'C');
            $pdf->SetFont('Arial','',10);       
        }
        $pdf->Cell(10,2,'',0,1);
        $pdf->Cell(20,14,'Jumlah',1,0,'C');
        $pdf->Cell(20,14,'Satuan',1,0,'C');
        $pdf->Cell(70,14,'Nama Barang',1,0,'C');
        $pdf->Cell(80,7,'Harga',1,1,'C');
        $pdf->Cell(110,0,'',0,0);
        $pdf->Cell(35,7,'Harga Satuan',1,0,'C');
        $pdf->Cell(45,7,'Harga Total',1,1,'C');
        $no =1;
        foreach ($dtlpembelian as $dtl ) {
            
            $pdf->Cell(20,7,$dtl->qtt,'LR','C');
            $pdf->Cell(20,7,$dtl->nama_satuan,'LR','C');
            $pdf->Cell(70,7,$dtl->barang.'/'.$dtl->jenisbarang,'LR');
            $pdf->Cell(35,7,'Rp. '.number_format($dtl->harga),'LR');
            $pdf->Cell(45,7,'Rp. '.number_format(($dtl->harga*$dtl->qtt)-$dtl->diskon),'LR',1);
        
        } 
        foreach ($pembelian as $key ) {           
            $pdf->Cell(145,7,'Total',1,0,'C');
            $pdf->Cell(45,7,'Rp. '.number_format($key->total),1,1);
            $pdf->Cell(190,7,'Terbilang '.terbilang($key->total)." rupiah",1,1);
        }

        $pdf->Cell(50,5,'',0,1,'C');
        $pdf->Cell(50,5,'Diterima',0,1,'C');
        $pdf->Cell(50,15,'',0,1,'C');
        $pdf->Cell(50,5,'(........................)',0,0,'C');
        // $pdf->AutoPrint(true);
        $pdf->Output();
    }

    public function excel($tglb)
    {   
        
        $pembelian = $this->M_Pembelian->excel($tglb);
        $data = array('title' => 'Laporan Pembelian',
                'excel' => $pembelian);
        $this->load->view('pembelian/excelpembelian', $data);
    }

    public function excelhutang($tglb)
    {   
        
        $pembelian = $this->M_Pembelian->excelhutang($tglb);
        $data = array('title' => 'Laporan Hutang',
                'excel' => $pembelian);
        $this->load->view('pembelian/excelhutang', $data);
    }

    
}
