<?php

class Violations_model extends CI_Model {
	//model for landing page - DJO/9-11-15

	function __construct()
	{
		parent::__construct();
	}

	function getAllViolations()
	{		
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$query = $this->db->get();
			$searchResult = $query->result();
			return $searchResult;
	}
	
	function getViolations($search_type,$keyword)
	{
		if($search_type == 'name'){
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->like('last_name', $keyword); 
			$query = $this->db->get();
			$searchResult = $query->result();
			return $searchResult;
		}
		
		if($search_type == 'citation_id'){
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->where('citations.citation_number', $keyword);
			$query = $this->db->get();
			$searchResult = $query->result();
			return $searchResult;
		}
		
		if($search_type == 'drivers_license'){
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->where('citations.drivers_license_number', $keyword);
			$query = $this->db->get();
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

	function getViolationByCitationID($id)
	{
		$this->db->where('citation_number', $id);
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

	function getViolationName($last,$SSN)
	{
		$this->db->select('*');
		$this->db->from('citations');
		$this->db->join('violations', 'violations.citation_number = citations.citation_number');
		$this->db->join('socialsecurityauth', {'socialsecurityauth.last_name = citations.last_name','socialsecurit'
		$this->db->where('citations.last_name', $last);
		$this->db->where();
		$query = $this->db->get();
		$searchResult = $query->result();
		return $searchResult;
	}
	
	function getCourtByViolationID($id) {
		$query =  $this->db->query('select cl.* from violations v, citations c, courtlocations cl where v.citation_number = c.citation_number and c.court_address=cl.Address and c.citation_number='.$id);
		return $query->result();
	}
	
//end file	
}