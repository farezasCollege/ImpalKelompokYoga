<?php
defined('BASEPATH') or exit('No direct script access allowed');

class REGISTERPEG extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('SALON');
    }

    public function index()
    {
        if(isset($_SESSION['status']) && $_SESSION['status']=="login-as-manager"){
            $this->load->view('Register-pegawai');
		}else{
			$this->load->view('403-forbid-peg');
		}
    }

    public function Register()
    {
        $data = array(
            'Nama' => $_POST['nama'],
            'Date' => $_POST['tgl'],
            'Email' => $_POST['Email'],
            'Username' => $_POST['Username'],
            'Password' => md5($_POST['pass']),
            'Role' => 'Pegawai'
        );
        $this->SALON->InsertPegawai($data);
    }
}
