<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->dbutil(); 
		$this->load->dbforge();
		$this->load->helper('file');
    }
	
	public function index() {
		if (!$this->dbutil->database_exists('trailblazer')) {
			//$this->dbforge->create_database('trailblazer');
			$file = $this->load->file("files/trailblazer-db-instal.sql", true);
			//explode it in an array
			$file_array = explode(';', $file);
			//execute the exploded text content
			foreach($file_array as $line) {
				if ($line != '')
					$this->db->query($line);
			}
			header("location: ".$this->config->item('base_url')."setup");
		} else {
			$this->load->library('session');
			$this->load->model('account');
			$this->load->model('database_db');
			$this->load->helper('url');
			$database = new database_db();
			if($database->userExists()) {
				if ($this->session->userdata('status') == 'authorizedUser') {
					header("location: ".$this->config->item('base_url')."audit_trail");
				} else {
					$data['current_url'] = $this->config->item('base_url')."admin";
					$user_id = $this->session->userdata('username');
					if (!empty($_GET['response'])) {
						$this->mysmarty->assign('response', $_GET['response']);
					} else $this->mysmarty->assign('response', "");
					
					if (!empty($_GET['status'])) {
						$this->mysmarty->assign('accessStatus', $_GET['status']);
					} else $this->mysmarty->assign('accessStatus', "");
					
					$this->mysmarty->assign('status', $this->session->userdata('status'));
					$this->mysmarty->assign('base_url', $this->config->item('base_url'));
					$this->mysmarty->display('header.tpl');
					$this->mysmarty->display('index.tpl');
					$this->mysmarty->display('footer.tpl');
				}
			} else header("location: ".$this->config->item('base_url')."setup");
		}
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>