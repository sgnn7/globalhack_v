<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Violations extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
		function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->library('email');
		$this->load->helper('form');
		$this->load->helper('url');	
		$this->load->model('Violations_model');
	}
	
	public function index()
	{
		$config['curNav'] = 'search';
		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('Landing/home');
		$this->load->view('includes/footer');
	}
	
	
	public function Violation_list()
	{
		$config['curNav'] = 'search';
		$config['Violations'] = $this->Violations_model->getAllViolations();
		
		$this->load->view('includes/header', $config);
		$this->load->view('includes/nav', $config);
		$this->load->view('Violations/Violations_list', $config);
		$this->load->view('includes/footer');
	}
	
	public function Violation_search()
	{
		$config['curNav'] = 'search';
		$keyword = $this->security->xss_clean($this->input->post('keyword'));
		$search_type = $this->security->xss_clean($this->input->post('search_type'));
		$SSN = $this->security->xss_clean($this->input->post('SSN'));
		$name = $this->Violations_model->getName($search_type, $keyword, $SSN);
		$nameArray = explode(' ',$name);
		
		
		$config['Violations'] = $this->Violations_model->getViolations($search_type, $keyword, $SSN);
		$config['PersonName'] = $name;
		$config['CitationCount'] = $this->Violations_model->getCitationCount($SSN);
		$config['ViolationCount'] = $this->Violations_model->ViolationCount($SSN);
		$config['WarrantCount'] = $this->Violations_model->getWarrantCount($SSN);
		$this->load->view('includes/header', $config);
		$this->load->view('includes/nav', $config);
		$this->load->view('Violations/Violations_search', $config);
		$this->load->view('includes/footer');
	}
	
	public function Violation_details($id)
	{
		$config['curNav'] = 'search';
		$config['Citations'] = $this->Violations_model->getCitationByID($id);
		$config['Violations'] = $this->Violations_model->getViolationByCitationID($id);
		$config['Courts'] = $this->Violations_model->getCourtByViolationID($id);

		$this->load->view('includes/header', $config);
		$this->load->view('includes/nav', $config);
		$this->load->view('Violations/Violations_detail', $config);
		$this->load->view('includes/footer');
	}
	
	
}
