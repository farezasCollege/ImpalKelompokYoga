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
		$this->load->view('Navbar');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
