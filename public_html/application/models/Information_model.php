<?php

class Information_model extends CI_Model {
	//model for landing page - DJO/9-11-15

	function __construct()
	{
		parent::__construct();
	}
	
		function findByZip($id)
	{		
			$this->db->select('*');
			$this->db->from('courtlocations');
			$this->db->where('zipcode', $id);
			$query = $this->db->get();
			$searchResult = $query->result();
			return $searchResult;
	}
}
