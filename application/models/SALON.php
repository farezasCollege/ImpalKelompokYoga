<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salon extends CI_Model {

	//COMPLETE ALL FUNCTION IN HERE
	public function GetAllCustomer()
	{
		//use query builder to get data table "mahasiswa"
	  	$cus='customer';
		$query=$this->db->query("SELECT * FROM user WHERE Role='$cus'");
		return $query->result();
		
	}

	public function InsertCustomer($arrData){
		$this->db->insert('user',$arrData);
	}


	public function GetCustumerUser($Username)
	{
		$this->db->where('Username', $Username);
		return $this->db->get('user')->row_array();
	}

	public function UbahDataCustomer($data,$Username)
	{
		//use query builder class to update data mahasiswa based on id
		$this->db->where('Username',$Username);
		$this->db->update('user',$data);
	}

	public function GetAllPegawai()
	{
		$peg='Pegawai';
		$query=$this->db->query("SELECT * FROM user WHERE Role='$peg'");
		return $query->result();
	}

	public function InsertPegawai($arrData)
	{
		$this->db->insert('user',$arrData);
	}



public function cariDatabooking()
{
	$kode = $this->input->post('kode', true);
	$this->db->from('pemesanan');
  	$query=$this->db->get();
  	return $query->result_array();

	//return data mahasiswa that has been searched
}


	public function hapusDataPegawai($Username)
	{
		$this->db->where('Username',$Username);
		return $this->db->delete('user');
	}
}
