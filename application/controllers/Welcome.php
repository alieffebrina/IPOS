<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_Setting');
        $this->load->model('M_barang');
        $this->load->model('M_pelanggan');
        // $this->load->model('M_penjualan');
    }

	public function index()
	{
		$this->load->view('template/header.php');
		$id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
		$this->load->view('template/sidebar.php', $data);
		$data['barang'] = $this->M_barang->totalitem();
		$data['datapelanggan'] = $this->M_pelanggan->datapelanggan();
		// $data['totalpenjualan'] = $this->M_penjualan->datapenjualan();
		$this->load->view('template/index.php', $data);
		$this->load->view('template/footer.php');
		$this->load->view('template/footerwelcome.php');
	}
}
