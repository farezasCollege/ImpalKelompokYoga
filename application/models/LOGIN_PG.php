<?php
	
	class login_pg extends CI_Model
	{
		
		function get_pg($uname,$pass)
		{
			return $this->db->query("select * from user where Username='$uname' and Password='$pass'");
		}
	}
?>