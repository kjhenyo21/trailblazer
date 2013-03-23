<?php
class Login_DB extends CI_Model {
	function __construct() {
		$this->conn = $this->load->database();
		$this->load->library('encrypt');
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}

	function verifyUser($uname, $pwd) {
		$query = $this->db->query("SELECT * 
									FROM user_accounts u
									WHERE username = '$uname'");
		
		if ($query->result()) {
			$result = $query->row_array(0);
			$username = $result['username'];
			$pass = $result['password'];
			$pass = $this->encrypt->decode($pass);
			
			$data = array();

			if(($username==$uname && $pass==$pwd)) {
				$data['validity'] = "valid";
				$data['username'] = $username;
				return $data;
			} else  {
				$data['validity'] = "invalid";
				return $data;
			}
		} return false;
	}
/**	
	function getID($id) {
		$query = $this->db->query("SELECT id
									FROM user_account
									WHERE studno = $studno");
		$row = $query->row(); 
		$id = $row->id;
		return $id;
	}
	*/
}
?>