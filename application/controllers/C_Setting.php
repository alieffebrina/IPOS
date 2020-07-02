<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Setting extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_Setting');
        $this->load->model('M_User');
    }

    public function get_kota(){
            // Ambil data ID Provinsi yang dikirim via ajax post
            $id = $this->input->post('id_provinsi');
            
            $kota = $this->M_Setting->getkota($id);
            
            // Buat variabel untuk menampung tag-tag option nya
            // Set defaultnya dengan tag option Pilih
            $lists = "<option value=''>Pilih</option>";
            
            foreach($kota as $data){
              $lists .= "<option value='".$data->id_kota."'>".$data->name_kota."</option>"; // Tambahkan tag option ke variabel $lists
            }
            
            $callback = array('list_kota'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
            echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }


    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['user'] = $this->M_User->getuser();
        $this->load->view('master/setting/v_akses',$data); 
        $this->load->view('template/footer');
    }

    function view($ida)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $akses['akses'] = $this->M_Setting->getakses($ida);
        $akses['user'] = $this->M_User->getnama($ida);
        $this->load->view('master/setting/v_vakses',$akses); 
        $this->load->view('template/footer');
    }


    function edit(){
        $this->M_Setting->edit();
        redirect('C_Setting');

    }
}
