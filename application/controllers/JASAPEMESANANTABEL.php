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
		$tabel = $this->JASAPEMESANAN_MODEL->getBooking()->result();
		$total = $this->JASAPEMESANAN_MODEL->getTotalBayar()->result_array();
		$data = array(
			'tabel' => $tabel,
			'total' => $total
		);
		// print_r($data['total'][0]['tot']);
		// print_r($data['pemesanan']);
		$this->load->view('Tabel-booking', $data);
	}
}
