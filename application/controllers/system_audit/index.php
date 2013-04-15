<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
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
			$files = new files_db();
			$paths = $files->getFilePathsByName('system-audit');
			$expected_columns = 6;
			if ($paths) {
				foreach ($paths as $path) {
					
					if(file_exists($path)) {
						$errors = 0;
						if (($handle = fopen($path, "r")) !== FALSE) {						
							while (($test = fgetcsv($handle, 1000, ",")) !== FALSE) {
								$size = count($test);
									if ($size != $expected_columns)
										$errors++;
							}
							if ($errors == 0) {
								$handle = fopen($path, "r");
								while (($temp = fgetcsv($handle, 1000, ",")) !== FALSE) {
									$size = count($temp);
									if ($size > 0) {
										$info[] = array(
											'date' => trim($temp[0]), 
											'time' => trim($temp[1]),
											'user' => trim($temp[2]),
											'action' => trim($temp[3]),
											'trans_date' => trim($temp[4]),
											'account' => trim($temp[5])
										);
									}
								}
							} else $error_msg = "Certain line(s) of the file or the entire file may not be in the required CSV format of this system.";
						} else $error_msg = "File(s) not found!";
					} else $error_msg = "File(s) not found!";
				}
				if (!$database->tableExists('system_audit'))
				$database->createSystemAuditTable();
				$database->addSystemAuditLogs($info);
			} else $error_msg= "File(s) not found.";

			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('user', $this->session->userdata('username'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->assign('logs', $database->getAllSystemAuditLogs());
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('system_audit/index.tpl');
			$this->mysmarty->display('footer.tpl');
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