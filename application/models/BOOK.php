<?php
class book extends CI_Model
{
	function InsertBooking($arrData)
	{
		$this->db->insert('pemesanan', $arrData);
	}

	function cekduplikat($kode)
	{
		return $this->db->query("select kode_booking from pemesanan where kode_booking = '$kode'");
	}
}
