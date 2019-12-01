<?php
	class HOMEPAGE_MODEL extends CI_Model
	{
		function cek_login($uname,$pass){
			return $this->db->query("select * from user where Username='$uname' and Password='$pass'");
		}
	}
?>