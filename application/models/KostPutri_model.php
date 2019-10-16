<?php 

class KostPutri_model extends CI_model {
	public function getAllKostPutri()
	{
		return $this->db->get('kost_putri')->result_array();
		
	}
}