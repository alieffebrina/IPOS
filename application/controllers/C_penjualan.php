<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_penjualan extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_penjualan');
        $this->load->model('M_Setting');
        $this->load->model('M_pelanggan');
        $this->load->model('M_barang');
    }

    public function tambah()
    {   

        $id = $this->session->userdata('id_user');
        $this->M_penjualan->tambahdata($id);
        // $data = $this->M_pelanggan->cekkodepelanggan();
        // foreach ($data as $id) {
        //     $id =$id;
        //     $this->M_pelanggan->tambahakses($id);
        // }
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_penjualan');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);

        $modul = 'penjualan';
        $kode = $this->M_Setting->cekkode($modul);
        foreach ($kode as $modul) {
            $a = $modul->kodefinal;
            if (strpos($a, 'ggal') != false) {
                date_default_timezone_set('Asia/Jakarta');
                $tgl = date('Y-m-d');
                $a = str_replace("tanggal", $tgl, $a);
                $data = $this->M_penjualan->cekpenjualantgl();
                $no = count($data) + 1;
                $kode2 = str_replace("no", $no, $a);
            } else {
                $data = $this->M_penjualan->cekkodepenjualan();
                foreach ($data as $id) {
                    $id = $id+1;
                    $kode2 = str_replace("no", $id, $a);
                }
            }
        }

        $data['kode'] = $kode2;
        $data['pelanggan'] = $this->M_pelanggan->getpelanggan();
        $data['barang'] = $this->M_barang->getbarang();
        $this->load->view('penjualan/v_penjualan',$data); 
        $this->load->view('template/footer');
    }

}