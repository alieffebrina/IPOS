<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_konversi extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_konversi');
        $this->load->model('M_Setting');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['konversi'] = $this->M_konversi->getkonversisatuan();
        $this->load->view('master/konversi/v_konversi',$data); 
        $this->load->view('template/footer');
    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['satuan'] = $this->M_Setting->getsatuan();
        $this->load->view('master/konversi/v_addkonversi', $data); 
        $this->load->view('template/footer');
    }

    function cek_konversi(){
        # ambil Kualifikasiname dari form
        
        $kode = $this->input->post('konversi');
                # select ke model member Kualifikasiname yang diinput Kualifikasi
        $hasil_kode = $this->M_konversi->cek_konversi($kode);
         
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

        $id = $this->session->userdata('id_user');
        $this->M_konversi->tambahdata($id);
        // $data = $this->M_pelanggan->cekkodepelanggan();
        // foreach ($data as $id) {
        //     $id =$id;
        //     $this->M_pelanggan->tambahakses($id);
        // }
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_konversi');
    }

    function view($ida)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['konversi'] = $this->M_konversi->getspek($ida);
        $this->load->view('master/konversi/v_vkonversi',$data); 
        $this->load->view('template/footer');
    }

    function edit($iduser)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['satuan'] = $this->M_Setting->getsatuan();
        $data['konversi'] = $this->M_konversi->getspek($iduser);
        $this->load->view('master/konversi/v_ekonversi',$data); 
        $this->load->view('template/footer');
    }

    function editkonversi()
    {   

        $id = $this->session->userdata('id_user');
        $this->M_konversi->edit($id);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_konversi');
    }

    function hapus($id){
        $where = array('id_konversi' => $id);
        $this->M_Setting->delete($where,'tb_konversi');
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_konversi');
    }

}