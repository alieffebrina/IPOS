<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Kas extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_kas');
        $this->load->model('M_Setting');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['kas'] = $this->M_kas->getall();
        $this->load->view('kas/v_kas', $data); 
        $this->load->view('template/footer');
    }

    public function search(){
    // Ambil data NIS yang dikirim via ajax post
        $tglawal = $this->input->post('tglawal');
        $tglakhir = $this->input->post('tglakhir');
        $kas = $this->M_kas->search();
        
        // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
        $hasil = $this->load->view('kas/v_kas', array('kas'=>$kas), true);
        $callback = array(
          'kas' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
        );
        echo json_encode($callback); // konversi varibael $callback menjadi JSON
      }


    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $this->load->view('kas/v_addkas'); 
        $this->load->view('template/footer');
    }

     public function tambah()
    {   
        // echo $this->input->post('tgl');
        $id = $this->session->userdata('id_user');
        $this->M_kas->tambahdata($id);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Kas');
    }

    public function excel()
    {   
        echo "ok";
        // $tglawal = $this->input->post('tglawal');
        // $tglakhir = $this->input->post('tglakhir');
        // if ($tglakhir==NULL){
        //     $kas =  $this->M_kas->getall();
        // } else {
        //     $kas = $this->M_kas->search();
        // }
        // $data = array('title' => 'Laporan Data Kas Keluar',
        //         'excel' => $kas);
        // $this->load->view('kas/excel_kas', $data);
    }
}