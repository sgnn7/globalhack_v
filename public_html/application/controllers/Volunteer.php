<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Controller {

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
		$this->load->model('Volunteer_model');
	}
	
	public function index()
	{
		$config['curNav'] = 'volunteer';
		$config['Volunteers'] = $this->Volunteer_model->getAllOpportunities();
		$this->load->view('includes/header');
		$this->load->view('includes/nav', $config);
		$this->load->view('Volunteer/home', $config);
		$this->load->view('includes/footer');	
	}	
}
