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
	
	function getViolationByID($id)
	{
		$this->db->where('violation_number', $id);
		$query = $this->db->get('violations');
		$violation = $query->result();
		return $violation;
	}
	
	function getCitationByID($id)
	{
		$this->db->where('citation_number', $id);
		$query = $this->db->get('citations');
		$citations = $query->result();
		return $citations;
	}
	
//end file	
}