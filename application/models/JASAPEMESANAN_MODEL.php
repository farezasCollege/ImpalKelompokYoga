<?php
class JASAPEMESANAN_MODEL extends CI_Model
{
	function getBooking()
	{
		return $this->db->query("SELECT u.Nama, jj.nama_jasa, jj.harga, pm.jam_pelayanan, pm.tanggal_pelayanan, pm.status_bayar, pm.expired FROM user u, pemesanan pm , jenis_jasa jj where u.Username=pm.username and jj.id_layanan=pm.id_layanan");
	}

	function getTotalBayar(){
		return $this->db->query("SELECT sum(ly.harga) as tot from pemesanan p, jenis_jasa ly where p.id_layanan=ly.id_layanan and p.tanggal_pelayanan=curdate() and p.status_bayar=1");
	}
}
