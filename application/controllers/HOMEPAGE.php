<?php

class homepage extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('HOMEPAGE_MODEL');
	}

	function index()
	{
		if (isset($_SESSION)) {
			$this->session->sess_destroy();
		}
		$this->load->view('INDEX'); //ganti php duls
		$this->load->view('Navbar');
	}

	function pindahHalaman()
	{
		if (isset($_SESSION)) {
			if ($_SESSION['status'] == "login") {
				redirect(base_url('/index.php/LoginUser_controller/homepage_cust'));
			}
		} else {
			redirect(base_url());
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
