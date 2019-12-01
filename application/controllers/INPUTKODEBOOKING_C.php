<?php

/**
 * 
 */
class INPUTKODEBOOKING_C extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('INPUTKODEBOOKING_M');
	}

	function index()
	{
		$this->load->view('Dashboard-pegawai');
	}

	function cekkode()
	{
		$kodee = $_POST['cek-kobook'];
		$query = $this->INPUTKODEBOOKING_M->cek_kode($kodee);
		$cekStatus = $query->result_array();

		if ($query->num_rows() > 0 && $cekStatus[0]['status_bayar'] == 0) {
			$data = $this->INPUTKODEBOOKING_M->dataBooking($kodee);
			$this->INPUTKODEBOOKING_M->updateBayar($kodee);
			echo json_encode($data);
		} else if ($query->num_rows() > 0 && $cekStatus[0]['status_bayar'] == 1) {
			echo json_encode("1");
		} else {
			echo json_encode("0")
		}
	}
}
