<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Text extends CI_Controller {

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
		$this->load->library('Twilio');
	}

public function send_text($to,$message)
		{
			
			$from = '3142549725';
/* 			$to = '13142788933'; */
/* 			$message = 'This is a test...'; */
			$response = $this->twilio->sms($from, $to, $message);
			if($response->IsError)
				echo 'Error: ' . $response->ErrorMessage;
			else
				echo 'Sent message to ' . $to;
	}
	
	public function receive_text()
		{
		$AccountSid = 'ACec7530ecb3ad04e72a617b10c47dd8b5';
			$response = $this->twilio->request("/2010-04-01/Accounts/$AccountSid/Messages", "POST",{'13142788933',,'9/12/2015'});
			var_dump($response);
	}
	
//end file	
}