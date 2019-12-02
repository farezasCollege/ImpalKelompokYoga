<?php

/**
 * 
 */
class JASAPEMESANANTABEL extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('JASAPEMESANAN_MODEL');
	}

	function index()
	{
		$data['pemesanan'] = $this->JASAPEMESANAN_MODEL->getBooking()->result();
		// print_r($data['pemesanan']);
		$this->load->view('Tabel-booking', $data);
	}
}
