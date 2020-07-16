<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Stok extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_stok');
        $this->load->model('M_Setting');
        $this->load->model('M_barang');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['barang'] = $this->M_barang->getbarang();
        $this->load->view('stok/v_stok',$data); 
        $this->load->view('template/footer');
    }

    function so()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['barang'] = $this->M_stok->getstokopname();
        $this->load->view('stok/v_so',$data); 
        $this->load->view('template/footer');
    }

    function addso($ida)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['barang'] = $this->M_barang->getnama($ida);
        $this->load->view('stok/v_addso',$data); 
        $this->load->view('template/footer');
    }

    function tambahso()
    {   

        $id = $this->session->userdata('id_user');
        $this->M_stok->tambahdata($id);
        // $data = $this->M_pelanggan->cekkodepelanggan();
        // foreach ($data as $id) {
        //     $id =$id;
        //     $this->M_pelanggan->tambahakses($id);
        // }
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Stok/so');
    }

    function aproveso($idso,$barang,$stok)
    {   

        $id = $this->session->userdata('id_user');
        $this->M_stok->aprove($id,$idso,$barang,$stok);
        // $data = $this->M_pelanggan->cekkodepelanggan();
        // foreach ($data as $id) {
        //     $id =$id;
        //     $this->M_pelanggan->tambahakses($id);
        // }
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Stok/so');
    }

}