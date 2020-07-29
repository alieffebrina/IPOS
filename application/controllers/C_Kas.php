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

            $tgla = $this->input->post('tgl');
            $tglb = str_replace(' ', '', $tgla);
        $excel = $this->input->post('excel');
        if ($excel == 'excel'){
            redirect('C_Kas/excel/'.$tglb);
        } else {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['kas'] = $this->M_kas->search($tglb);
        $this->load->view('kas/v_kas', $data); 
        $this->load->view('template/footer');
        }
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

    public function excel($tglb)
    {   
        
        $kas = $this->M_kas->search($tglb);
        $data = array('title' => 'Laporan Data Kas Keluar',
                'excel' => $kas);
        $this->load->view('kas/excelkas', $data);
    }
}