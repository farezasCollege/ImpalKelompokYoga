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
        $this->load->view('Dashboard-pegawai');
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
