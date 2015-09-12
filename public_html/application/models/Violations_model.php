<?php

class Violations_model extends CI_Model {
	//model for landing page - DJO/9-11-15

	function __construct()
	{
		parent::__construct();
	}

	function getViolations()
	{
		$this->db->where('reservation_type', 'reservation');
		$query = $this->db->get('reservations');
		$searchResult = $query->result();
		return $searchResult;
	}
	
//end file	
}