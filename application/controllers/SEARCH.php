<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('SALON');
    }

    public function index()
    {
        if(isset($_SESSION['status'])==true && $_SESSION['status']=="login-as-pegawai"){
            $this->load->view('Dashboard-pegawai');
		}else{
			$this->load->view('403-forbid');
		}
    }
    
    public function search()
    {
        if ($this->input->post('kode')) {
            $data['pemesanan'] = $this->SALON->cariDatabooking();
        } else {
            $this->load->view('Dashboard-pegawai');
        }
    }
}
