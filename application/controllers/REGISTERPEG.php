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
        $this->load->view('REGISTERPEGAWAI');
    }
    public function RegisterPeg()
    {
        $data['judul'] = 'Form Register Pegawai';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('Username', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password');

        if ($this->form_validation->run() != false) {
            $this->SALON->GetPegawai();
            redirect(base_url('/index.php/WEB/index2/'));
        } else {
            $this->load->view('REGISTERPEGAWAI', $data);
            // 			$this->load->view('HEADER');
            //			$this->load->view('REGISTERPEGAWAI');
        }
    }
}
