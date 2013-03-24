<?php
class Account extends CI_Model {
	function validateUser($uname, $pwd) {
		$this->load->model('login_db');
		$this->load->library('session');
		$mysql = new login_db();
		$ensure_credentials = $mysql->verifyUser($uname, $pwd);
		echo $ensure_credentials['validity'];
		if($ensure_credentials['validity'] == "valid") {
			$newdata = array(
						'status' => 'authorizedUser',
						'username' => $ensure_credentials['username']
					);
			$this->session->set_userdata($newdata);
			header("location:".$this->config->item('base_url')."audit_trail");
		} else if ($ensure_credentials['validity'] == "invalid") {
			echo "invalid";
			$data['message'] = "Please enter a correct username and password.";
			$data['error'] = true;
			return $data;
		}
	}
	
	function logOut() {
		$this->load->library('session');
		$this->session->sess_destroy();		
		if(($this->session->userdata('status'))) {
			
			if(isset($_COOKIE[session_name()]))
				setcookie(session_name(), '', time() - 1000);
				$this->session->sess_destroy();
		}
		header("location:".$this->config->item('base_url'));
	}
}

?>