<?php 

class C_Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("tb_user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' => $username,
				'nik' => $nik
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("C_Admin"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('C_Login'));
	}
}