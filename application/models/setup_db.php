<?php
class Setup_DB extends CI_Model {
	private $conn;
	
	function __construct() {
		$this->conn = $this->load->database();
		$this->load->library('encrypt');
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}

	function saveUserInfo($info) {
		echo $info['lname'];
		$user = array(
			'id' => $info['id'],
			'lname' => $info['lname'],
			'fname' => $info['fname'],
			'mname' => $info['mname'],
			'sex' => $info['sex'],
			'bdate' => $info['bdate'],
			'address' => $info['address'],
			'contact' => $info['contact'],
			'email' => $info['email']
		);
		
		$company = array(
			'license_no' => $info['license_no'],
			'name' => $info['cname'],
			'address' => $info['caddress']
		);
		
		$account = array(
			'position' => $info['position'],
			'username' => $info['uname'],
			'password' => $this->encrypt->encode($info['password'])
		);
		
		$this->db->insert('users_info', $user);
		$this->db->insert('company_info', $company);
		$this->db->insert('user_accounts', $account);
	}
}
?>