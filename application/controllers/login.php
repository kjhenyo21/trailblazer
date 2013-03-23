<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('account');
		$this->load->model('login_db');
	}
	
	public function index()	{
		$account = new account();
		$login = new login_db();

		$uname = $this->security->xss_clean($this->input->post('uname'));
		$password = $this->security->xss_clean($this->input->post('password'));
		if(($uname != "") && ($password != "")) {						//either/both uname and pwd has input
			$response = $account->validateUser($uname, $password);

			if ($response['error']) {													//if wrong uname and/or pwd			
				$message = $response['message'];
				header("location: index?response=$message");
			}
		} else if(($uname == "") || ($password == "")) {
			$message = "Enter user credentials to log in.";
			header("location: index?response=$message");
		}

	}
	
	public function generateString() {						// for password; credits to Sir Antoine Potgieter 
		$length = 10;											// http://www.lost-in-code.com/programming/php-code/php-random-string-with-numbers-and-letters/
		$characters = "0123456789abcdefghijklmnopqrstuvwxyz";
		$string = "";    
		for ($p = 0; $p < $length; $p++) {
			$string .= $characters[mt_rand(0, 35)];			// oh.. just like "+="
		}

		return $string;
	}
}	
?>