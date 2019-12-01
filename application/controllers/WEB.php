<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('SALON');
		$this->load->library('form_validation');
	}

	public function Daftarcustomer() //lihat customer
	{
		$data['judul'] = 'DaftarCustomer';
		$data['customer'] = $this->SALON->GetAllCustomer();
		$this->load->view('DAFTAR_CUSTOMER', $data);
	}

	public function view()
	{
		$this->load->view('VIEWDATA');
	}

	public function booking()
	{
		$this->load->view('BOOKING');
	}

	public function thankyou()
	{
		$this->load->view('THANKYOU');
	}

	public function suksesbooking()
	{
		$this->load->view('SUKSES_BOOKING');
	}

	public function ubah()
	{
		$data['judul'] = 'Edit';
		//echo $_SESSION['uname']; echo "<br>";
		$data['User'] = $this->SALON->GetCustumerUser($_SESSION['uname']);
		//print_r($data['User']->result_array());

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('Username', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password');

		if ($this->form_validation->run() == false) {
			$this->load->view('Edit-profile');
			//$this->load->view('edit_profile');
		} else {
			$data = array(
				'Nama' => $this->input->post('nama'),
				'Date' => $this->input->post('date'),
				'Email' => $this->input->post('email'),
				'Password' => md5($this->input->post('pass')),
				'Role' => 'customer'
			);

			$data_session = array(
				'uname' => $_SESSION['uname'],
				'nama' => $data['Nama'],
				'email' => $data['Email'],
				'status' => "login",
				'role' => $_SESSION['role']
			);

			$this->session->set_userdata($data_session);

			$this->SALON->UbahDataCustomer($data, $_SESSION['uname']);
			$this->load->view('Edit-profile');
		}
	}

	public function hapus($Username)
	{
		$hapus = $this->SALON->hapusDataPegawai($Username);
		redirect(base_url('/index.php/WEB/view/'));
	}
}
