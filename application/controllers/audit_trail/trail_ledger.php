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
			$year = $_GET['year'];

			if ((isset($_GET['month'])) && ($_GET['month'] != '')) {
				$month_num = $_GET['month'];
				$month = date("F", mktime(0, 0, 0, $month_num, 10));
				$path = $files->getFilePathByDocTypeAndDate($doc_type, $month_num, $year);
			} else {
				$month_num = false;
				$month = false;
				$path = false;
				$paths = $files->getFilePathByDocTypeAndYear($doc_type, $year);
			}
			
			$fs = $_GET['fs'];
			$fs_amt = $_GET['fs_amt'];
			$fs_file = $_GET['fs_file'];
			$within_the_account = false;
			$info = false;
			$detail = false;
			$expected_columns = 5;
			$error_msg = "";
			$lg_total_amt = 0;
			
			if ($path) {
				if (file_exists($path['full_path'])) {
					$errors = 0;
					if (($handle = fopen($path['full_path'], "r")) !== FALSE) {
						while (($test = fgetcsv($handle, 1000, ",")) !== FALSE) {
							$size = count($test);
							if ($size != $expected_columns)
								$errors++;
						}

						if ($errors == 0) {
							$handle = fopen($path['full_path'], "r");
							while (($temp = fgetcsv($handle, 1000, ",")) !== FALSE) {
								$size = count($temp);
								if ($temp[0] != 'a' && $temp[0] != '') {
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
										$lg_total_amt += trim($temp[3]) - trim($temp[4]);
									}
								} else {
									//$temp2 = explode(",", $temp[1]);
									//echo $temp2[0];
									if (trim($temp[1]) == $account) {
										$detail['acct_name'] = trim($temp[1]);
										$detail['acct_no'] = trim($temp[2]);
										$within_the_account = true;
									} else $within_the_account = false;
								}
							}
						} else $error_msg = "Certain line(s) of the file or the entire file may not be in the required format of this system for ledgers: [date,description,reference,debit,credit]";
					}
					$this->mysmarty->assign('source', $path['full_path']);
					$this->mysmarty->assign('doc', $path['doc']);
				} else $error_msg = "File not found!";
			} else if ($paths) {
				foreach($paths as $path) {
					if (file_exists($path['full_path'])) {
						$temp_date = explode("-", $path['filename']);
						$month_in_num = $temp_date[1];
						$per_month = date("F", mktime(0, 0, 0, $month_in_num, 10));
						$errors = 0;
						if (($handle = fopen($path['full_path'], "r")) !== FALSE) {
							while (($test = fgetcsv($handle, 1000, ",")) !== FALSE) {
								$size = count($test);
								if ($size != $expected_columns)
									$errors++;
							}

							if ($errors == 0) {
								$handle = fopen($path['full_path'], "r");
								while (($temp = fgetcsv($handle, 1000, ",")) !== FALSE) {
									$size = count($temp);
									if ($temp[0] != 'a' && $temp[0] != '') {
										//echo "date: ".trim($temp[0]);
										$date = explode("-", trim($temp[0]));
										$day = $date[2];
										if ($within_the_account) {
											$info[] = array(
												'month' => $per_month,
												'day' => $day,
												'desc' => trim($temp[1]),
												'ref' => trim($temp[2]),
												'debit' => trim($temp[3]),
												'credit' => trim($temp[4])
											);
											$lg_total_amt += trim($temp[3]) - trim($temp[4]);
										}
									} else {
										//$temp2 = explode(",", $temp[1]);
										//echo $temp2[0];
										if (trim($temp[1]) == $account) {
											$detail['acct_name'] = trim($temp[1]);
											$detail['acct_no'] = trim($temp[2]);
											$within_the_account = true;
										} else $within_the_account = false;
									}
								}
							} else $error_msg = "Certain line(s) of the file or the entire file may not be in the required format of this system for ledgers: [date,description,reference,debit,credit]";
						}
						$this->mysmarty->assign('source', $path['full_path']);
						$this->mysmarty->assign('doc', $path['doc']);
					} else $error_msg = "File not found!";
				}
			} else $error_msg = "File not found!";
			
			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->assign('month', $month);
			$this->mysmarty->assign('year', $year);
			$this->mysmarty->assign('fs', $fs);
			$this->mysmarty->assign('info', $info);
			$this->mysmarty->assign('error_msg', $error_msg);
			$this->mysmarty->assign('detail', $detail);
			$this->mysmarty->assign('acct', $account);
			$this->mysmarty->assign('fs_amt', $fs_amt);
			$this->mysmarty->assign('fs_file', $fs_file);
			$this->mysmarty->assign('lg_total_amt', abs($lg_total_amt));
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