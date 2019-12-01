<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DAFTARPEGAWAI extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('SALON');
    }

    public function index() //lihat tabel pegawai dari manager
    {
        $data['Pegawai'] = $this->SALON->GetAllPegawai();
        $this->load->view('Tabel-pegawai', $data);
    }
}
