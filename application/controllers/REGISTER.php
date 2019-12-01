<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('SALON');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('REGISTER');
    }

    public function Register()
    {
        $data['judul'] = 'Form Register';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('Username', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() != false) {
            $this->SALON->GetCustomer();
            header("Location:" . base_url('/index.php/WEB/thankyou'));
            header("refresh:5;Location: " . base_url('/index.php/WEB/Register/'));
        } else {
            $this->load->view('REGISTER', $data);
            $this->load->view('HEADER');
            $this->load->view('FOOTER');
        }
    }
}
