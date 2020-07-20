<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_returpenjualan extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        //$this->load->model('M_stok');
        $this->load->model('M_Setting');
        $this->load->model('M_barang');
        $this->load->model('M_penjualan');
        $this->load->model('M_returpenjualan');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['barang'] = $this->M_barang->getbarang();
        $this->load->view('penjualan/v_returpenjualan',$data); 
        $this->load->view('template/footer');
    }

    function rp()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['barang'] = $this->M_returpenjualan->getreturpenjualan();
        $this->load->view('penjualan/v_returpenjualan',$data); 
        $this->load->view('template/footer');
    }

    function addreturpenjualan($ida)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['barang'] = $this->M_barang->getnama($ida);
        $this->load->view('penjualan/v_addreturpenjualan',$data); 
        $this->load->view('template/footer');
    }

    function tambahrp()
    {   

        $id = $this->session->userdata('id_user');
        $this->M_returpenjualan->tambahdata($id);
        // $data = $this->M_pelanggan->cekkodepelanggan();
        // foreach ($data as $id) {
        //     $id =$id;
        //     $this->M_pelanggan->tambahakses($id);
        // }
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_returpenjualan/rp');
    }

    function terkirim($idrp,$barang,$stokretur)
    {   

        $id = $this->session->userdata('id_user');
        $this->M_returpenjualan->aprove($id,$idrp,$barang,$stokretur);
        // $data = $this->M_pelanggan->cekkodepelanggan();
        // foreach ($data as $id) {
        //     $id =$id;
        //     $this->M_pelanggan->tambahakses($id);
        // }
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_returpenjualan/rp');
    }

}