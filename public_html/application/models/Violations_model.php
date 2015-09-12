<?php

class Violations_model extends CI_Model {
	//model for landing page - DJO/9-11-15

	function __construct()
	{
		parent::__construct();
	}

	function getAllViolations()
	{
			//$this->db->where('violations', $keyword);
			$query = $this->db->get('violations');
			$searchResult = $query->result();
			return $searchResult;
	}
	
	function getViolations($search_type,$keyword)
	{
		if($search_type == 'name'){
			//$this->db->where('violations', $keyword);
			$query = $this->db->get('violations');
			$searchResult = $query->result();
			return $searchResult;
		}
		
		if($search_type == 'citation_id'){
			$this->db->where('citation_number', $keyword);
			$query = $this->db->get('violations');
			$searchResult = $query->result();
			return $searchResult;
		}
	}
	
//end file	
}