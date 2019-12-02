<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EDITPROFILE_C extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('SALON');
	}

	public function index()
	{
		$this->load->view('Edit-profile');
		$this->load->view('Navbar-loggedin');
	}

	public function ubah()
	{
		$data['judul'] = 'Edit';
		//echo $_SESSION['uname']; echo "<br>";
		$data['User'] = $this->SALON->GetCustumerUser($_SESSION['uname']);
		//print_r($data['User']->result_array());

		$sess_uname = $_SESSION['uname'];

		$data = array(
			'Nama' => $this->input->post('nama'),
			'Date' => $this->input->post('date'),
			'Email' => $this->input->post('email'),
			'Password' => md5($this->input->post('pass')),
			'Role' => 'customer'
		);

		$data_session = array(
			'uname' => $sess_uname,
			'nama' => $data['Nama'],
			'email' => $data['Email'],
			'status' => "login",
			'role' => $_SESSION['role']
		);
		$this->SALON->UbahDataCustomer($data, $sess_uname);
		$this->session->set_userdata($data_session);
	}
}
