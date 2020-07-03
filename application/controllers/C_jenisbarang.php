<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_jenisbarang extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_jenisbarang');
        $this->load->model('M_Setting');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['jenisbarang'] = $this->M_jenisbarang->getjenisbarang();
        $this->load->view('master/jenisbarang/v_jenisbarang',$data); 
        $this->load->view('template/footer');
    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('master/jenisbarang/v_addjenisbarang'); 
        $this->load->view('template/footer');
    }

    function cek_jenisbarang(){
        # ambil Kualifikasiname dari form
        
        $kode = $this->input->post('jenisbarang');
                # select ke model member Kualifikasiname yang diinput Kualifikasi
        $hasil_kode = $this->M_jenisbarang->cek_jenisbarang($kode);
         
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
        $this->M_jenisbarang->tambahdata();
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_jenisbarang');
    }

    function view($id)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['jenisbarang'] = $this->M_jenisbarang->getspek($id);
        $this->load->view('master/jenisbarang/v_vjenisbarang',$data); 
        $this->load->view('template/footer');
    }

    function edit($id)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['jenisbarang'] = $this->M_jenisbarang->getspek($id);
        $this->load->view('master/jenisbarang/v_ejenisbarang',$data); 
        $this->load->view('template/footer');
    }

    function editjenisbarang()
    {   
        $this->M_jenisbarang->edit();
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_jenisbarang');
    }

    function hapus($id){
        $where = array('id_jenisbarang' => $id);
        $this->M_Setting->delete($where,'tb_jenisbarang');
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_jenisbarang');
    }

}