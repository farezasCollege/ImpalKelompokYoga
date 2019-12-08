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
        if(isset($_SESSION['status']) && $_SESSION['status']=="login-as-manager"){
            
            $data['Pegawai'] = $this->SALON->GetAllPegawai()->result();
            $this->load->view('Tabel-pegawai', $data);
		}else{
			$this->load->view('403-forbid-peg');
		}
    }
}
