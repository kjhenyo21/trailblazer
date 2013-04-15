<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Audit_Logs_By_Date extends CI_Controller {
	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('files_db');
		$this->load->model('database_db');
		$this->load->model('messages_db');
		$this->load->model('preferences_db');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index() {
		if ($this->session->userdata('status') != 'authorizedUser') {
			header("location:".$this->config->item('base_url')."index.php?status=unauthorizedAccess");
		} else {
			$database = new database_db();
			$from = $_GET['from'];
			$to = $_GET['to'];
			$database = new database_db();
			
			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('user', $this->session->userdata('username'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->assign('logs', $database->getSystemAuditLogsByDate($from, $to));
			$this->mysmarty->display('system_audit/audit_logs_with_filter.tpl');
		}
	}
	
	public function filterByDate() {
		$from = $_GET['from'];
		$to = $_GET['to'];
		$database = new database_db();
		$info = $database->getSystemAuditLogsByDate($from, $to);
		foreach ($info as $i) {
			$data[] = array(
					'date' => $row->date,
					'time' => $row->time,
					'user' => $row->user,
					'action' => $row->action,
					'trans_date' => $row->trans_date,
					'account' => $row->account
				);
		}
		return $data;
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>