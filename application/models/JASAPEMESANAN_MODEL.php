<?php
	/**
	 * 
	 */
	class jasaPemesanan_model extends CI_Model
	{
		
		public function getPemesanan()
		{
			return $this->db->query("SELECT u.Nama, jj.nama_jasa, jj.harga, pm.jam_pelayanan, pm.tanggal_pelayanan, pm.status_bayar FROM user u, pemesanan pm , jenis_jasa jj where u.Username=pm.username and jj.id_layanan=pm.id_layanan");
		}
	
	    // public function getPemesanan1()
        // {
		// 	$this->db->select('*');
		// 	$this->db->from('pemesanan');
		// 	$this->db->join('user','user.id_ju= mahasiswa.id_jurusan');
		// 	$query=$this->db->get();
			
		// 	return $query->result_array();
		// }
	}
?>