<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trail_Journal extends CI_Controller {

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
			$doc_type = "Journals";
			$error_msg = false;
			$ref = $_GET['ref'];
			$account = $_GET['acct'];
			$fs = $_GET['fs'];
			$fs_amt = $_GET['fs_amt'];
			$fs_file = $_GET['fs_file'];
			$ledger = $_GET['ledger'];
			$lg_ref = $_GET['lg_ref'];
			$lg_desc = $_GET['lg_desc'];
			$lg_debit = $_GET['lg_debit'];
			$lg_credit = $_GET['lg_credit'];
			$lg_amt = abs($lg_debit - $lg_credit);
			$lg_total_amt = $_GET['lg_total_amt'];
			$lg_total_amt_disp = $_GET['lg_total_amt_disp'];
			$jl_ref = $_GET['jl_ref'];
			//$jl_desc = $_GET['jl_desc'];
			$date_temp = explode("-", $ref);
			$month_num = trim($date_temp[1]);
			$month = date("F", mktime(0, 0, 0, $month_num, 10));
			$year = trim($date_temp[2]);
			$expected_columns = 7;
			$info = false;
			$error_msg = "";
			$jl_total_dr_disp = 0;
			$jl_total_other_disp = 0;
			$jl_total_cr_disp = 0;
			$jl_total_amt_disp = 0;
			
			$this->mysmarty->assign('doc', "Journal");
			$path = $files->getFilePathByReference($doc_type, $ref);
			if(file_exists($path['full_path'])) {
				$this->mysmarty->assign('doc', $path['doc']);
				$errors = 0;
				$has_total_row = 0;
				if (($handle = fopen($path['full_path'], "r") or die()) !== FALSE) {
					while (($test = fgetcsv($handle, 1000, ",")) !== FALSE) {
						$size = count($test);
						if ($size != $expected_columns)
							$errors++;
						if ($test[0] == 't' && $test[0] != '') {
							$has_total_row++;							
						}
					}
					if ($has_total_row == 0)
						$errors++;
					//echo $errors;
					if ($errors == 0) {
						$handle = fopen($path['full_path'], "r");
						$jl_entry_found = 1;
						//echo $lg_desc;
						while (($temps = fgetcsv($handle, 1000, ",")) !== FALSE) {							
							//echo $temps[2];
							if (strcasecmp(trim($temps[2]), $lg_desc) != 0) {
								$jl_entry_found *= 1;
							} else $jl_entry_found *= 0;
						}
						
						if ($jl_entry_found == 0) {
							$handle = fopen($path['full_path'], "r");
							while (($temp = fgetcsv($handle, 1000, ",")) !== FALSE) {
								if (($temp[0] != 't') && ($temp[0] != '')) {
									$date = explode("-", trim($temp[0]));
									$day = $date[2];
									if (strcasecmp($path['doc'], "cash receipts journal") == 0) {
										$info[] = array(
											'day' => $day,
											'acct' => trim($temp[1]),
											'desc' => trim($temp[2]),
											'ref' => trim($temp[3]),
											'cash' => trim($temp[4]),
											'other' => trim($temp[5]),
											'sales' => trim($temp[6])
										);
									} else if (strcasecmp($path['doc'], "cash disbursements journal") == 0) {
										$info[] = array(
											'day' => $day,
											'acct' => trim($temp[1]),
											'desc' => trim($temp[2]),
											'ref' => trim($temp[3]),
											'purch' => trim($temp[4]),
											'other' => trim($temp[5]),
											'cash' => trim($temp[6])
										);
									}
								} else if ($temp[0] == 't' && $temp[0] != '') {
									$jl_total_dr_disp += trim($temp[4]);
									$jl_total_other_disp += trim($temp[5]);
									$jl_total_cr_disp += trim($temp[6]);
									if (strcasecmp($path['doc'], "cash receipts journal") == 0) {		
										$jl_total_amt_disp = $jl_total_dr_disp;
										//$jl_total_amt_disp = $jl_total_dr_disp - ($jl_total_other_disp + $jl_total_cr_disp);
									} else if (strcasecmp($path['doc'], "cash disbursements journal") == 0) {
										//$jl_total_amt_disp = ($jl_total_dr_disp + $jl_total_other_disp) - $jl_total_cr_disp;
									}
								}
							}
						} $error_msg = "Cannot find journal entry!";
					} else $error_msg = "Certain line(s) of the file or the entire file may not be in the required format of this system for journals: [date,description,reference,account1,other_account,account2]";
				} else $error_msg = "File not found!";
			} else $error_msg = "File not found!";

			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->assign('month', $month);
			$this->mysmarty->assign('year', $year);
			$this->mysmarty->assign('info', $info);
			$this->mysmarty->assign('error_msg', $error_msg);
			$this->mysmarty->assign('acct', $account);
			$this->mysmarty->assign('source', $path['full_path']);
			$this->mysmarty->assign('fs', $fs);
			$this->mysmarty->assign('fs_amt', $fs_amt);
			$this->mysmarty->assign('fs_file', $fs_file);
			$this->mysmarty->assign('ledger', $ledger);
			$this->mysmarty->assign('lg_ref', $lg_ref);
			$this->mysmarty->assign('lg_desc', $lg_desc);
			//$this->mysmarty->assign('jl_desc', $jl_desc);
			$this->mysmarty->assign('lg_debit', $lg_debit);
			$this->mysmarty->assign('lg_credit', $lg_credit);
			$this->mysmarty->assign('lg_amt', $lg_amt);
			$this->mysmarty->assign('lg_total_amt', $lg_total_amt);
			$this->mysmarty->assign('lg_total_amt_disp', $lg_total_amt_disp);
			$this->mysmarty->assign('jl_total_amt_disp', abs($jl_total_amt_disp));
			$this->mysmarty->assign('jl_total_dr_disp', $jl_total_dr_disp);
			$this->mysmarty->assign('jl_total_other_disp', $jl_total_other_disp);
			$this->mysmarty->assign('jl_total_cr_disp', $jl_total_cr_disp);
			$this->mysmarty->assign('jl_ref', $jl_ref);
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('audit_trail/trail_journal.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}
?>