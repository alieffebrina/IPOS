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

    // public function tambah()
    // {   

    //     $id = $this->session->userdata('id_user');
    //     $this->M_penjualan->tambahdata($id);
    //     // $data = $this->M_pelanggan->cekkodepelanggan();
    //     // foreach ($data as $id) {
    //     //     $id =$id;
    //     //     $this->M_pelanggan->tambahakses($id);
    //     // }
    //     $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
    //     redirect('C_penjualan');
    // }

    function tambah(){
        $id = $this->session->userdata('id_user');
        $hasil_kode = $this->M_suratjalan->tambahdata($id);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_suratjalan');

    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);

        $modul = 'Surat Jalan';
        $kode = $this->M_Setting->cekkode($modul);
        foreach ($kode as $modul) {
            $a = $modul->kodefinal;
            if (strpos($a, 'ggal') != false) {
                date_default_timezone_set('Asia/Jakarta');
                $tgl = date('Y-m-d');
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

        $data['kode'] = $kode2;
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

    // function retur()
    // {
    //     $this->load->view('template/header');
    //     $id = $this->session->userdata('id_user');
    //     $data['menu'] = $this->M_Setting->getmenu1($id);
    //     $this->load->view('template/sidebar.php', $data);
    //     $data['penjualan'] = $this->M_penjualan->getreturpenjualan();
    //     $this->load->view('penjualan/v_retur',$data); 
    //     $this->load->view('template/footer');
    // }

}