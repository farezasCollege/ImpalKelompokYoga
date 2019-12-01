<?php

class homepage extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('HOMEPAGE_MODEL');
	}

	function index(){
		$this->load->view('INDEX'); //ganti php duls
	}

	function login_action(){
		$username = $this->input->post('uname-input');
		$password = mb_substr(md5($this->input->post('pass-input')),0,10);

		//echo $password; 
		//print_r($_POST);

		$q = $this->HOMEPAGE_MODEL->cek_login($username,$password)->result_array();

		$cek=$this->HOMEPAGE_MODEL->cek_login($username,$password)->num_rows();

		if($cek > 0){ 
			$data_session = array(
				'uname' => $username,
				'nama' => $q[0]['Nama'],
				'email' => $q[0]['Email'],
				'status' => "login",
				'role' => $q[0]['Role']
			);


			$this->session->set_userdata($data_session);

			if ($q[0]['Role']=='customer') {
				redirect(base_url('/index.php/HOMEPAGE/homepage_cust/')); 
			}else{
				////tampilkan login gagal di view
				$this->load->view('GAGAL_LOGIN_CUS');
			}

		}else{
			$this->load->view('GAGAL_LOGIN_CUS');
		}
	}


	function homepage_cust(){
		$this->load->view('HOMEPAGE_CUSTOMER');
	}


	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
