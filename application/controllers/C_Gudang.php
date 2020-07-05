<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Gudang extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_Gudang');
        $this->load->model('M_Setting');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['gudang'] = $this->M_Gudang->getgudang();
        $this->load->view('master/gudang/v_gudang',$data); 
        $this->load->view('template/footer');
    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('master/gudang/v_addgudang'); 
        $this->load->view('template/footer');
    }

    function cek_gudang(){
        # ambil Kualifikasiname dari form
        
        $kode = $this->input->post('gudang');
                # select ke model member Kualifikasiname yang diinput Kualifikasi
        $hasil_kode = $this->M_Gudang->cek_gudang($kode);
         
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
        $this->M_Gudang->tambahdata();
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Gudang');
    }

    function view($id)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['gudang'] = $this->M_Gudang->getspek($id);
        $this->load->view('master/gudang/v_vgudang',$data); 
        $this->load->view('template/footer');
    }

    function edit($idgudang)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['gudang'] = $this->M_Gudang->getspek($idgudang);
        $this->load->view('master/gudang/v_egudang',$data); 
        $this->load->view('template/footer');
    }

    function editgudang()
    {   
        $this->M_Gudang->edit();
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Gudang');
    }

    function hapus($id){
        $where = array('id_gudang' => $id);
        $this->M_Setting->delete($where,'tb_gudang');
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Gudang');
    }

}