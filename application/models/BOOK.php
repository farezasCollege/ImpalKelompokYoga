<?php
class book extends CI_Model
{
	function Getbooking($arrData){
	// 	$data = [
	// 	"Nama" => $this->input->post('nama', true),
	// 	"Email" => $this->input->post('email', true),
	// 	"Phone" => $this->input->post('phone', true),
	// 	"Gender" => $this->input->post('gender', true),
	// 	"KTP" => $this->input->post('ktp', true),
	// 	"Date" => $this->input->post('birth', true),
	// 	"Bdate" => $this->input->post('tgl', true),
	// 	"Time" => $this->input->post('time', true),
	// 	"Service" => $this->input->post('service', true),
	// ];

		$this->db->insert('pemesanan',$arrData);
	}

	function cekduplikat($kode) 
	{
		return $this->db->query("select kode_booking from pemesanan where kode_booking = '$kode'");
	}
}
?>