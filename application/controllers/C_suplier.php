<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_suplier extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_suplier');
        $this->load->model('M_Setting');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['suplier'] = $this->M_suplier->getsuplier();
        $this->load->view('master/suplier/v_suplier',$data); 
        $this->load->view('template/footer');
    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['provinsi'] = $this->M_Setting->getprovinsi();
        $this->load->view('master/suplier/v_addsuplier', $data); 
        $this->load->view('template/footer');
    }

    function cek_suplier(){
        # ambil Kualifikasiname dari form
        
        $kode = $this->input->post('suplier');
                # select ke model member Kualifikasiname yang diinput Kualifikasi
        $hasil_kode = $this->M_suplier->cek_suplier($kode);
         
                # pengecekan value $hasil_Kualifikasiname
        if(count($hasil_kode)!=0){
          # kalu value $hasil_Kualifikasiname tidak 0
                  # echo 1 untuk pertanda Kualifikasiname sudah ada pada db    
                       echo '1';
        }else{
                  # kalu value $hasil_Kualifikasiname = 0
                  # echo 2 untuk pertanda Kualifikasiname belum ada pada db
            echo '2';
        }
         
    }

    public function tambah()
    {   
        $this->M_suplier->tambahdata();
        $data = $this->M_suplier->cekkodesuplier();
        foreach ($data as $id) {
            $id =$id;
            $this->M_suplier->tambahakses($id);
        }
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_suplier');
    }

    function view($id)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['suplier'] = $this->M_suplier->getspek($id);
        $this->load->view('master/suplier/v_vsuplier',$data); 
        $this->load->view('template/footer');
    }

    function edit($id)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_suplier');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['provinsi'] = $this->C_Setting->getprovinsi();
        $data['suplier'] = $this->M_suplier->getspek($id);
        $this->load->view('master/suplier/v_esuplier',$data); 
        $this->load->view('template/footer');
    }

    function editsuplier()
    {   
        $this->M_suplier->edit();
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_suplier');
    }

    function hapus($id){
        $where = array('id_suplier' => $id);
        $this->M_Setting->delete($where,'tb_suplier');
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_suplier');
    }

}