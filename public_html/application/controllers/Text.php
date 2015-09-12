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
		$this->load->model('Violations_model');
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
		$people = array(
        "+13146012731" => "Dj Ojo",
        "+13142788933" => "Paul",
		"+3146051326" => "John",
        "+3143688889" => "Michelle"
    	);
		$Input = $_REQUEST['Body'];
		
		
		if($Input == "Pashle") {
 
			// now greet the sender
			header("content-type: text/xml");
			echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
		?>
		<Response>
			<Message><?php echo $name ?>, To Query our system please use the format LAST NAME*LAST 4 SSN. You said <?=$Input;?></Message>
		</Response>
		
<?
			
    	}
		else
		{
			$InputArray = explode('*',$Input);
			$lastName = $InputArray[0];
			$SSN = $InputArray[1];
			$response = $this->Violations_model->getViolationName($lastName,$SSN);
			
			// now greet the sender
			header("content-type: text/xml");
			echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
			$fine_amount = $response[0]->fine_amount;
			    $court_cost = $response[0]->court_cost;
/* 				$fine_amount = substr($fine_amount,1);
				$court_cost = substr($court_cost,1); */
				$totalAmount = $fine_amount + $court_cost; ?>
		?>
		<Response>
			<Message>Citation#:<?=$response[0]->citation_number;?>|Amount Owed:$<?=$totalAmount;?></Message>
		</Response>
		
<?
		}
			
			
	}
	
//end file	
}
?>