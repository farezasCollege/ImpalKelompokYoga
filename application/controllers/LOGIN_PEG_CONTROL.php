<?php

class login_peg_control extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('LOGIN_PG');
	}

	function index()
	{
		if (isset($_SESSION)) {
			$this->session->sess_destroy();
		}
		$this->load->view('Login-peg');
	}

	function login()
	{
		$un = $_POST['uname'];
		$pass = mb_substr(md5($_POST['pass']), 0, 10);

		$dbase = $this->LOGIN_PG->get_pg($un, $pass);

		if ($un == "manager" && $pass == "0795151def") { //master password for manager= manager123
			echo json_encode("manager");
		} else if ($dbase->num_rows() > 0) {
			$akun = $dbase->result_array();

			$peg_session = array(
				'uname' => $un,
				'nama' => $akun[0]['Nama'],
				'status' => "login",
				'role' => $akun[0]['Role']
			);

			$this->session->set_userdata($peg_session);

			if ($akun[0]['Role'] == "Pegawai") {
				echo json_encode("pegawai");
			} else {
				echo json_encode("0");
			}
		} else {
			//tampilkan login gagal di view
			echo json_encode("0");
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('/index.php/LOGIN_PEG_CONTROL/'));
	}
}
