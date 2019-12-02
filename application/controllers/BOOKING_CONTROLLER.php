<?php

class booking_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('BOOK');
	}

	function index()
	{
		$this->load->view('Booking');
		$this->load->view('Navbar-loggedin');
	}

	function getView()
	{
		$jasa = $_POST['service'];
		$tanggal = $_POST['tgl'];
		$jam = $_POST['jam'];
		$username = $_SESSION['uname'];
		// print_r($_POST);
		// print_r($_SESSION['uname']);


		$id = $this->db->query("select id_layanan from jenis_jasa where nama_jasa='$jasa'")->result_array();

		$kode_booking = "psn-" . rand(0, 99);
		$kobook = $this->BOOK->cekduplikat($kode_booking);

		if ($kobook->num_rows() > 0) {
			echo json_encode("0");
		} else {
			// echo "bisa";
			$data = array(
				'kode_booking' => $kode_booking,
				'username' => $username,
				'id_layanan' => $id[0]['id_layanan'],
				'tanggal_pelayanan' => $tanggal,
				'jam_pelayanan' => $jam,
				'status_bayar' => false
			);

			$this->BOOK->InsertBooking($data);
			// echo json_encode("1");
			$this->kirim($data);
		}
	}

	function kirim($data)
	{
		$this->load->library('email');
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'smtp.gmail.com';
		$config['smtp_port']    = '587';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'saloncitraofficial@gmail.com';
		$config['smtp_pass']    = 'SalonCitra2468';
		$config['charset']    = 'iso-8859-1';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not 
		$this->email->initialize($config);

		$data_br = array(
			'kode' => $data['kode_booking'],
			'tgl' => $data['tanggal_pelayanan'],
			'jam' => $data['jam_pelayanan']
		);

		$body = $this->load->view('MESSAGE', $data_br, true);
		$this->email->set_newline("\r\n");
		$this->email->from('saloncitraa@gmail.com', 'Pemesanan');
		$this->email->set_mailtype('html');
		$this->email->to($_SESSION['email']); //
		$this->email->subject('Kode Booking Salon Citra');
		$this->email->message($body);
		$this->email->set_newline("\r\n");

		//$this->email->send();

		if ($this->email->send()) { //$this->session->set_flashdata("email_sent","Email sent successfully.");
			// echo json_encode("1");
		} else { //$this->session->set_flashdata("email_sent","Error in sending Email.");
			#echo "not sent <br>";
			show_error($this->email->print_debugger());
			// echo json_encode("0");
		}
	}
}
