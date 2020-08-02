<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Labarugi extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_labarugi');
        $this->load->model('M_Setting');
    }

    function index()
    {    
        $excel = $this->input->post('excel');
        if ($excel == 'excel'){
            $tgla = $this->input->post('tgl');
            $tglb = str_replace(' ', '', $tgla);
            redirect('C_labarugi/excel/'.$tglb);
        } else {
            $this->load->view('template/header');
            $id = $this->session->userdata('id_user');
            $data['menu'] = $this->M_Setting->getmenu1($id);
            $this->load->view('template/sidebar.php', $data);
            $data['laporanlabarugi'] = $this->M_labarugi->search();
            $this->load->view('penjualan/v_laporanlabarugi', $data); 
            $this->load->view('template/footer');
        }
    }


    public function excel($tglb)
    {   
        
        $labarugi = $this->M_labarugi->search($tglb);
        $data = array('title' => 'Laporan Data Laba Rugi',
                'excel' => $labarugi);
        $this->load->view('penjualan/excellabarugi', $data);
    }
}