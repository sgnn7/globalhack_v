<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller {

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
	}
	
	public function index()
	{
		$config['curNav'] = 'information';
		$this->load->view('includes/header');
		$this->load->view('includes/nav', $config);
		$this->load->view('Information/home');
		$this->load->view('includes/footer');
		
	}
	
	
}