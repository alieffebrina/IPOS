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
    }

    function index()
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

}