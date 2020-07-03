<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_satuan extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_satuan');
        $this->load->model('M_Setting');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['satuan'] = $this->M_satuan->getsatuan();
        $this->load->view('master/satuan/v_satuan',$data); 
        $this->load->view('template/footer');
    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('master/satuan/v_addsatuan'); 
        $this->load->view('template/footer');
    }

    function cek_satuan(){
        # ambil Kualifikasiname dari form
        
        $kode = $this->input->post('satuan');
                # select ke model member Kualifikasiname yang diinput Kualifikasi
        $hasil_kode = $this->M_satuan->cek_satuan($kode);
         
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
        $this->M_satuan->tambahdata();
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_satuan');
    }

    function view($id)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['satuan'] = $this->M_satuan->getspek($id);
        $this->load->view('master/satuan/v_vsatuan',$data); 
        $this->load->view('template/footer');
    }

    function edit($id)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['satuan'] = $this->M_satuan->getspek($id);
        $this->load->view('master/satuan/v_esatuan',$data); 
        $this->load->view('template/footer');
    }

    function editsatuan()
    {   
        $this->M_satuan->edit();
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_satuan');
    }

    function hapus($id){
        $where = array('id_satuan' => $id);
        $this->M_Setting->delete($where,'tb_satuan');
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_satuan');
    }

}