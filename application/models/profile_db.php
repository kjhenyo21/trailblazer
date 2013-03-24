<?php
class Profile_DB extends CI_Model {
	function __construct() {
		$this->conn = $this->load->database();
		$this->load->library('encrypt');
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}
	
	function getProfile($uname) {
		$queryUser = $this->db->query("SELECT `no`, i.id as user_id, `lname`, `fname`, `mname`, `sex`, `bdate`, `address`, `contact`, `email`, a.id as id, username, position, password
						FROM users_info i, user_accounts a
						WHERE username = '$uname'
							AND i.no = a.id");
							
		$queryCompany = $this->db->query("SELECT * 
						FROM company_info
						LIMIT 1");
						
		if ($queryUser->result() && $queryCompany) {
			$rowU = $queryUser->row();
			$rowC = $queryCompany->row();
			$profile = array(
				'no' => $rowU->no,
				'user_id' => $rowU->user_id,
				'lname' => $rowU->lname,
				'fname' => $rowU->fname,
				'mname' => $rowU->mname,
				'sex' => $rowU->sex,
				'bdate' => $rowU->bdate,
				'email' => $rowU->email,
				'contact' => $rowU->contact,
				'address' => $rowU->address,
				'id' => $rowU->id,
				'username' => $rowU->username,
				'position' => $rowU->position,
				'password'  => $this->encrypt->decode($rowU->password),				
				'license_no' => $rowC->license_no,
				'comp_name' => $rowC->name,
				'comp_address' => $rowC->address
			);
			
			return $profile;
		} else return false;
	}
	
	function updateProfile($info) {
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
		
		$this->db->where('no', $info['no']);
		$this->db->update('users_info', $user);
		
		$this->db->truncate('company_info');
		$this->db->insert('company_info', $company);
		
		$this->db->where('id', $info['id1']);
		$this->db->update('user_accounts', $account);
	}
	
	function getPassword($id) {
		$query = $this->db->query("SELECT password 
						FROM user_account
						WHERE id = $id");
		$row = $query->row(); 
		$password = $this->encrypt->decode($row->password);
		return $password;				
	}
	
	function updatePassword($m) {
		$account = array(
			'password'  => $this->encrypt->encode($m['new_pass'])
		);
		
		$this->db->where('id', $m['id']);
		$this->db->update('user_account', $account);
	}
}
?>