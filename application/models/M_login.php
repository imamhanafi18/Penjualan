<?php
	/**
	 * 
	 */
	class M_login extends CI_Model
	{
			function cekUser($user,$pass){
			$query = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
			// echo $query;exit();
			$query = $this->db->query($query);
			if($query->num_rows() > 0){
				return $query->row();
			}else{
				return NULL;
			}
		}
	}