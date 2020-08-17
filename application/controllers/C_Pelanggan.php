<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Pelanggan extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_pelanggan');
        $this->load->model('M_Setting');
        if(!$this->session->userdata('id_user')){
            redirect('C_Login');
        }
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['pelanggan'] = $this->M_pelanggan->getpelanggan();
        $this->load->view('master/pelanggan/v_pelanggan',$data); 
        $this->load->view('template/footer');
    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['provinsi'] = $this->M_Setting->getprovinsi();
        $this->load->view('master/pelanggan/v_addpelanggan', $data); 
        $this->load->view('template/footer');
    }

     function cek_namapelanggan(){
        # ambil Kualifikasiname dari form
        
        $nama_pelanggan = $this->input->post('nama_pelanggan');
                # select ke model member Kualifikasiname yang diinput Kualifikasi
        $hasil_kode = $this->M_pelanggan->cek_namapelanggan($nama_pelanggan);
         
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

    function cek_tlppelanggan(){
        # ambil Kualifikasiname dari form
        
        $tlp_pelanggan = $this->input->post('tlp_pelanggan');
                # select ke model member Kualifikasiname yang diinput Kualifikasi
        $hasil_kode = $this->M_pelanggan->cek_tlppelanggan($tlp_pelanggan);
         
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

    
    function cek_pelanggan(){
            // Ambil data ID Provinsi yang dikirim via ajax post
            $iduser = $this->input->post('id_pelanggan');
            
            $hasil_kode = $this->M_pelanggan->getspek($iduser);
            
            // Buat variabel untuk menampung tag-tag option nya
            // Set defaultnya dengan tag option Pilih
            // $lists = " <input type='text' class='form-control' id='nama_suplier' name='nama_suplier' readonly>";
            
            foreach($hasil_kode as $data){
              $lists = " <input type='text' class='form-control' id='nama' name='nama' value='".$data->nama."' readonly>"; // Tambahkan tag option ke variabel $lists
              $ala = $data->alamat;
              $limit = $data->limit;
              // $lists = "ok";
            }
            
            // $lists = " <input type='text' class='form-control' id='nama_suplier' name='nama_suplier' value='".$hasil_kode."' readonly>";

            $callback = array('list_pelanggan'=>$lists, 'list_alamat'=>$ala, 'limit_pelanggan'=>$limit); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
            echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

    public function tambah()
    {   

        $id = $this->session->userdata('id_user');
        $this->M_pelanggan->tambahdata($id);
        // $data = $this->M_pelanggan->cekkodepelanggan();
        // foreach ($data as $id) {
        //     $id =$id;
        //     $this->M_pelanggan->tambahakses($id);
        // }
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_pelanggan');
    }

    function view($ida)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['pelanggan'] = $this->M_pelanggan->getspek($ida);
        $this->load->view('master/pelanggan/v_vpelanggan',$data); 
        $this->load->view('template/footer');
    }

    function edit($iduser)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['provinsi'] = $this->M_Setting->getprovinsi();
        $data['pelanggan'] = $this->M_pelanggan->getspek($iduser);
        $this->load->view('master/pelanggan/v_epelanggan',$data); 
        $this->load->view('template/footer');
    }

    function editpelanggan()
    {   

        $id = $this->session->userdata('id_user');
        $this->M_pelanggan->edit($id);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_pelanggan');
    }

    function hapus($id){
        $where = array('id_pelanggan' => $id);
        $this->M_Setting->delete($where,'tb_pelanggan');
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_pelanggan');
    }

    function get_limit(){
        echo json_encode($this->M_pelanggan->get_limit($this->input->post('id')));
    }
}