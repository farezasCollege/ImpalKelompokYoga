<?php

class INPUTKODEBOOKING_C extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('INPUTKODEBOOKING_M');
	}

	function index()
	{
		if(isset($_SESSION['status'])==true && $_SESSION['status']=="login-as-pegawai"){
            $this->load->view('Dashboard-pegawai');
		}else{
			$this->load->view('403-forbid-peg');
		}
	}

	function cekkode()
	{
		$kodee = $_POST['cek-kobook'];
		// print_r($_POST);
		$query = $this->INPUTKODEBOOKING_M->cek_kode($kodee);
		$cekStatus = $query->result_array();

		$data = $this->INPUTKODEBOOKING_M->dataBooking($kodee)->result_array();
		// print_r($data[0]);

		if ($query->num_rows() > 0 && $cekStatus[0]['status_bayar'] == 0 && $cekStatus[0]['expired'] == 0) {
			// $this->acc($kodee);
			// echo json_encode($arrData);
			$tbl="<?php echo base_url('index.php/INPUTKODEBOOKING_C/acc/".$kodee."') ?>";
			$arrData = array(
				'kode_booking' => $data[0]['kode_booking'],
				'Username' => $data[0]['Username'],
				'id_layanan' => $data[0]['id_layanan'],
				'status_bayar' => $data[0]['status_bayar'],
				'jam_pelayanan' => $data[0]['jam_pelayanan'],
				'tanggal_pelayanan' => $data[0]['tanggal_pelayanan'],
				'tbl' => '<button type="button" onclick="'.$tbl.'" class="btn btn-success btn-xs ">Confirm</button>'
			);

			$msg = array(
				'status' => "blm_bayar",
				'data' => $arrData
			);
			echo json_encode($msg);
			$this->INPUTKODEBOOKING_M->updateBayar($kodee);
		} else if ($query->num_rows() > 0 && $cekStatus[0]['status_bayar'] == 1) {
			$arrData = array(
				'kode_booking' => $data[0]['kode_booking'],
				'Username' => $data[0]['Username'],
				'id_layanan' => $data[0]['id_layanan'],
				'status_bayar' => $data[0]['status_bayar'],
				'jam_pelayanan' => $data[0]['jam_pelayanan'],
				'tanggal_pelayanan' => $data[0]['tanggal_pelayanan']
			);

			$msg = array(
				'status' => "sdh_bayar",
				'data' => $arrData
			);
			echo json_encode($msg);
		} else if($query->num_rows() > 0 && $cekStatus[0]['status_bayar'] == 0 && $cekStatus[0]['expired'] == 1){
			$msg = array(
				'status' => "telat_bayar"
			);
			echo json_encode($msg);
			$this->INPUTKODEBOOKING_M->deleteBookingExpired($kodee);
		} else {
			$msg = array(
				'status' => "not_found"
			);
			echo json_encode($msg);
		}
	}

	function acc($kode)
	{
		$this->INPUTKODEBOOKING_M->updateBayar($kode);

	}
}
