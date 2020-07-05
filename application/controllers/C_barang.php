<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_barang extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_barang');
        $this->load->model('M_Setting');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['barang'] = $this->M_barang->getbarang();
        $this->load->view('master/barang/v_barang',$data); 
        $this->load->view('template/footer');
    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['satuan'] = $this->M_Setting->getsatuan();
        $data['jenisbarang'] = $this->M_Setting->getjenisbarang();
        $this->load->view('master/barang/v_addbarang', $data); 
        $this->load->view('template/footer');
    }

    function cek_barang(){
        # ambil Kualifikasiname dari form
        
        $kode = $this->input->post('barang');
                # select ke model member Kualifikasiname yang diinput Kualifikasi
        $hasil_kode = $this->M_barang->cek_barang($kode);
         
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

    //public function tambah()
    //{   
        //$this->M_barang->tambahdata();
       //$data = $this->M_barang->cekkodebarang();
        //foreach ($data as $id) {
            //$id =$id;
            //$this->M_barang->tambahakses($id);
        //}
        //$this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        //redirect('C_barang');
    //}

    public function tambah()
    {   
        $this->M_barang->tambahdata();
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_barang');
    }

    function view($id)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['barang'] = $this->M_barang->getspek($id);
        $this->load->view('master/barang/v_barang',$data); 
        $this->load->view('template/footer');
    }

    function edit($idbarang)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['provinsi'] = $this->C_Setting->getprovinsi();
        $data['barang'] = $this->M_barang->getspek($idbarang);
        $this->load->view('master/barang/v_ebarang',$data); 
        $this->load->view('template/footer');
    }

    function editbarangr()
    {   
        $this->M_barang->edit();
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_barang');
    }

    function hapus($id){
        $where = array('id_barang' => $id);
        $this->M_Setting->delete($where,'tb_barang');
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_barang');
    }

}