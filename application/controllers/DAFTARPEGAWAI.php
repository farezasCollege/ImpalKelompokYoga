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

    public function index() //lihat tabel pegawai dari manager
    {
        $data['judul'] = 'DaftarPegawai';
        $data['Pegawai'] = $this->SALON->GetAllPegawai();
        $this->load->view('Tabel-pegawai', $data);
    }
}
