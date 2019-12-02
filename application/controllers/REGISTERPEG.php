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
        $this->load->view('Register-pegawai');
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
