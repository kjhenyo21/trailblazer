<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trail_Ledger extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('files_db');
		//$this->load->model('account');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index() {
		if ($this->session->userdata('status') != 'authorizedUser') {
			header("location:".$this->config->item('base_url')."index.php?status=unauthorizedAccess");
		} else {
			$files = new files_db();
			$doc_type = "Ledgers";
			$error_msg = false;
			$account = $_GET['acct'];
			$month_num = $_GET['month'];
			$month = date("F", mktime(0, 0, 0, $month_num, 10));
			$year = $_GET['year'];
			$fs = $_GET['fs'];
			$fs_amt = $_GET['fs_amt'];
			$fs_file = $_GET['fs_file'];
			$within_the_account = false;
			
			$path = $files->getFilePathByDocTypeAndDate($doc_type, $month_num, $year);
			if($path) {
				//echo $path['path'];
				//echo $path['full_path'];
			} else $error_msg = "File not found!";

			$lines = file($path['full_path']);
			foreach ($lines as $line) {
				$temp = explode(",", $line);
				$size = sizeOf($temp);
				
				if ($size > 1) {
					//echo "date: ".trim($temp[0]);
					$date = explode("-", trim($temp[0]));
					$day = $date[2];
					if ($within_the_account) {
						$info[] = array(
							'day' => $day,
							'desc' => trim($temp[1]),
							'ref' => trim($temp[2]),
							'debit' => trim($temp[3]),
							'credit' => trim($temp[4])
						);
					}
				} else {
					$temp2 = explode(" ", $line);
					if (trim($temp2[0]) == $account) {
						$detail['acct_name'] = trim($temp2[0]);
						$detail['acct_no'] = trim($temp2[1]);
						$within_the_account = true;
					} else $within_the_account = false;
				}
			}

			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->assign('month', $month);
			$this->mysmarty->assign('year', $year);
			$this->mysmarty->assign('fs', $fs);
			$this->mysmarty->assign('info', $info);
			$this->mysmarty->assign('detail', $detail);
			$this->mysmarty->assign('acct', $account);
			$this->mysmarty->assign('source', $path['full_path']);
			$this->mysmarty->assign('doc', $path['doc']);
			$this->mysmarty->assign('fs_amt', $fs_amt);
			$this->mysmarty->assign('fs_file', $fs_file);
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('audit_trail/trail_ledger.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>