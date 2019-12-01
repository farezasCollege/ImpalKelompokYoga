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

	public function hapus($Username)
	{
		$hapus = $this->SALON->hapusDataPegawai($Username);
		redirect(base_url('/index.php/WEB/view/'));
	}
}
