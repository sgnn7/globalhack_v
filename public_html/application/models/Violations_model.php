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
	
	function getViolations($search_type,$keyword,$SSN)
	{
		if($search_type == 'name'){
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
			//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
			$this->db->like('citations.last_name', $keyword); 
			$this->db->where('socialsecurityauth.last4ssn', $SSN);
			
			$query = $this->db->get();
			$searchResult = $query->result();
			return $searchResult;
		}
		
		if($search_type == 'citation_id'){
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
			//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
			$this->db->where('socialsecurityauth.last4ssn', $SSN);
			$this->db->where('citations.citation_number', $keyword);
			$query = $this->db->get();
			$searchResult = $query->result();
			return $searchResult;
		}
		
		if($search_type == 'drivers_license'){
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
			//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
			$this->db->where('socialsecurityauth.last4ssn', $SSN);
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
		$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
		//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
		$this->db->where('citations.last_name', $last);
		$this->db->where('socialsecurityauth.last4ssn', $SSN);
		$query = $this->db->get();
		$searchResult = $query->result();
		return $searchResult;
	}
	
	function getViolationCount($last,$SSN)
		{
		$this->db->select('*');
		$this->db->from('citations');
		$this->db->join('violations', 'violations.citation_number = citations.citation_number');
		$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
		//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
		$this->db->where('socialsecurityauth.last_name', $last);
		$this->db->where('socialsecurityauth.last4ssn', $SSN);
		$query = $this->db->get();
		$searchResult = $query->num_rows();
		return $searchResult;
	}
	
	function getCourtByViolationID($id) {
		$query =  $this->db->query('select cl.* from violations v, citations c, courtlocations cl where v.citation_number = c.citation_number and c.court_address=cl.Address and c.citation_number='.$id);
		return $query->result();
	}
	
	function isWarrant($last,$SSN)
		{
		$this->db->select('*');
		$this->db->from('citations');
		$this->db->join('violations', 'violations.citation_number = citations.citation_number');
		$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
		//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
		$this->db->where('socialsecurityauth.last_name', $last);
		$this->db->where('socialsecurityauth.last4ssn', $SSN);
		$this->db->where('violations.warrant_status','TRUE');
		$query = $this->db->get();
		$searchResult = $query->num_rows();
		
		return $searchResult;
	}
	
	function getName($search_type, $keyword, $SSN)
	{
		if($search_type == 'name'){
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
			//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
			$this->db->like('citations.last_name', $keyword); 
			$this->db->where('socialsecurityauth.last4ssn', $SSN);
			
			$query = $this->db->get();
			$searchResult = $query->result();
			$name = $searchResult[0]->first_name.' '.$searchResult[0]->last_name;
			return $name;
		}
		
		if($search_type == 'citation_id'){
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
			//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
			$this->db->where('socialsecurityauth.last4ssn', $SSN);
			$this->db->where('citations.citation_number', $keyword);
			$query = $this->db->get();
			$searchResult = $query->result();
			$name = $searchResult[0]->first_name.' '.$searchResult[0]->last_name;
			return $name;
		}
		
		if($search_type == 'drivers_license'){
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
			//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
			$this->db->where('socialsecurityauth.last4ssn', $SSN);
			$this->db->where('citations.drivers_license_number', $keyword);
			$query = $this->db->get();
			$name = $searchResult[0]->first_name.' '.$searchResult[0]->last_name;
			return $name;
		}
	}
	
	function getCitationCount($last,$first)
		{
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
			$this->db->where('citations.last_name', $last);
			$this->db->where('citations.first_name', $first);
			$this->db->group_by("violations.citation_number"); 
			$query = $this->db->get();
			$searchResult = $query->num_rows();
			return $searchResult;
	}
	
	function ViolationCount($last,$first,$SSN)
		{
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
			//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
			$this->db->like('citations.last_name', $last); 
			$this->db->where('citations.first_name', $first);
			$this->db->where('socialsecurityauth.last4ssn', $SSN);
			
			$query = $this->db->get();
			$searchResult = $query->num_rows();
			return $searchResult;
	}
	
	function getWarrantCount($last,$first,$SSN)
		{
			$this->db->select('*');
			$this->db->from('citations');
			$this->db->join('violations', 'violations.citation_number = citations.citation_number');
			$this->db->join('socialsecurityauth','socialsecurityauth.last_name = citations.last_name');
			//$this->db->join('socialsecurityauth','socialsecurityauth.first_name = citations.first_name');
			$this->db->like('citations.last_name', $last); 
			$this->db->where('citations.first_name', $first);
			$this->db->where('socialsecurityauth.last4ssn', $SSN);
			$this->db->where('violations.warrant_status','TRUE');
			
			$query = $this->db->get();
			$searchResult = $query->num_rows();
			return $searchResult;
	}
	
//end file	
}