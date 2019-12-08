<?php

class LoginUser_controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('HOMEPAGE_MODEL');
	}

	function index()
	{
		if(isset($_SESSION['status'])){
			$this->session->sess_destroy();
		}
		$this->load->view('Login_user'); //ganti php duls
		$this->load->view('Navbar');
		
	}

	function login_action()
	{
		$username = $this->input->post('uname-input');
		$password = mb_substr(md5($this->input->post('pass-input')), 0, 10);

		//echo $password; 
		//print_r($_POST);

		$q = $this->HOMEPAGE_MODEL->cek_login($username, $password)->result_array();

		$cek = $this->HOMEPAGE_MODEL->cek_login($username, $password)->num_rows();

		if ($cek > 0) {
			$data_session = array(
				'uname' => $username,
				'nama' => $q[0]['Nama'],
				'email' => $q[0]['Email'],
				'status' => "login-as-user",
				'role' => $q[0]['Role']
			);


			$this->session->set_userdata($data_session);

			if ($q[0]['Role'] == "customer") {
				echo json_encode("1");
			} else {
				////tampilkan login gagal di view
				echo json_encode("0");
			}
		} else {
			echo json_encode("0");
		}
	}

	function homepage_cust()
	{
		if(isset($_SESSION['status']) && $_SESSION['status']=="login-as-user"){
			$this->load->view('INDEX');
			$this->load->view('Navbar-loggedin');
		}else{
			$this->load->view('403-forbid');
		}
	}
}
