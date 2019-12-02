<?php
class JASAPEMESANAN_MODEL extends CI_Model
{
	function getBooking()
	{
		return $this->db->query("SELECT u.Nama, jj.nama_jasa, jj.harga, pm.jam_pelayanan, pm.tanggal_pelayanan, pm.status_bayar FROM user u, pemesanan pm , jenis_jasa jj where u.Username=pm.username and jj.id_layanan=pm.id_layanan");
	}
}
