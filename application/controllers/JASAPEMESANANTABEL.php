<?php

/**
 * 
 */
class jasaPemesananTabel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('JASAPEMESANAN_MODEL');
	}

	public function index()
	{
		$data['judul'] = 'DaftarPemesanan';
		$data['pemesanan'] = $this->JASAPEMESANAN_MODEL->getPemesanan()->result();
		// print_r($data['pemesanan']);
		$this->load->view('Tabel_booking', $data);
	}
}
