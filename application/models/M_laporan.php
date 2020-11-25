<?php
	/**
	 * 
	 */
	class M_laporan extends CI_Model
	{
		public function hasil(){
			$query = "SELECT * FROM datapenjualan";
			$query = $this->db->query($query);

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
	}
?>