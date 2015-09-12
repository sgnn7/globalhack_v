<?php

class Volunteer_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getAllOpportunities()
    {
        $query = $this->db->query('SELECT cso.OpportunityType, cso.Name, cso.fake_date_of_service as date_of_service, cso.city, cso.fake_hours_offered as hours_offered FROM pashleco_data.communityserviceopportunities cso WHERE (cso.OpportunityType IS NOT NULL) ORDER BY cso.OpportunityType ASC');
        $searchResult = $query->result();
        return $searchResult;
    }

//end file
}