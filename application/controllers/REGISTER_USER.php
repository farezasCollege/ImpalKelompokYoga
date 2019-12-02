<?php
defined('BASEPATH') or exit('No direct script access allowed');

class REGISTER_USER extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('SALON');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('Signup');
        $this->load->view('Navbar');
    }

    public function Register()
    {
        $data = array(
            'Nama' => $_POST['nama'],
            'Date' => $_POST['tgl-lahir'],
            'Email' => $_POST['email'],
            'Username' => $_POST['Username'],
            'Password' => md5($_POST['pass']),
            'Role' => 'customer'
        );
        // print_r($data);
        $this->SALON->InsertCustomer($data);
        // $msg = "1";
        // echo json_encode($msg);
    }
}
