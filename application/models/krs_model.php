<?php 

	/**
	 * 
	 */
	class Krs_model extends CI_Model
	{
		
		public function tampil_data()
		{
			return $this->db->get('krs');
		}
	}

?>