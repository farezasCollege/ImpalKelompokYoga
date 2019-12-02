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
		// print_r($_POST);
		$query = $this->INPUTKODEBOOKING_M->cek_kode($kodee);
		$cekStatus = $query->result_array();

		$data = $this->INPUTKODEBOOKING_M->dataBooking($kodee)->result_array();
		// print_r($data[0]);

		$arrData = array(
			'kode_booking' => $data[0]['kode_booking'],
			'Username' => $data[0]['username'],
			'id_layanan' => $data[0]['id_layanan'],
			'status_bayar' => $data[0]['status_bayar'],
			'jam_pelayanan' => $data[0]['jam_pelayanan'],
			'tanggal_pelayanan' => $data[0]['tanggal_pelayanan'],
			'tbl' => '<button type="button" onclick="http://localhost/ImpalKelompokYoga/index.php/INPUTKODEBOOKING_C/acc"' . $kodee . '" class="btn btn-success btn-xs ">Confirm</button>'
		);

		if ($query->num_rows() > 0 && $cekStatus[0]['status_bayar'] == 0) {
			$this->acc($kodee);
			echo json_encode($arrData);
		} else if ($query->num_rows() > 0 && $cekStatus[0]['status_bayar'] == 1) {
			$msg = array(
				'status' => "1",
				'data' => $arrData
			);
			echo json_encode($msg);
		} else {
			echo json_encode("0");
		}
	}

	function acc($kode)
	{
		$this->INPUTKODEBOOKING_M->updateBayar($kode);
	}
}
