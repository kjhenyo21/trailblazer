<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Summary extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('files_db');
		$this->load->model('database_db');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index() {

		if ($this->session->userdata('status') != 'authorizedUser') {
			header("location:".$this->config->item('base_url')."index.php?status=unauthorizedAccess");
		} else {
			$files = new files_db();
			$database = new database_db();
			$doc_type = "Transaction Files";
			$error_msg = false;
			$account = trim($_GET['acct']);
			if(isset($_GET['or_no'])) {
				$or_no = $_GET['or_no'];
				if (is_numeric($or_no)) {
					$info = $database->getTransactionViaOR($or_no);
				} else {
					$info = $database->getTransactionByDesc($or_no);
				}
				$details = $database->getTransactionDetailsByOR($or_no);
				$dets_total_amt = 0;
				foreach ($details as $d) {
					$dets_total_amt += $d[5];
				}
				$dets_total_amt = trim($dets_total_amt);
			} else { 
				$or_no = false;
				$info = false;
				$details = false;
				$dets_total_amt = false;
			}
			if(isset($_GET['ref'])) {
				$ref = trim($_GET['ref']);
				$date_temp = explode("-", $ref);
				$month_num = trim($date_temp[1]);
				$month = date("F", mktime(0, 0, 0, $month_num, 10));
				$year = trim($date_temp[2]);
			} else {
				$ref = false;
				$date_temp = false;
				$month_num = false;
				$month = false;
				$year = false;
			}
			$fs = trim($_GET['fs']);
			$fs_amt = trim($_GET['fs_amt']);
			$fs_file = trim($_GET['fs_file']);
			if(isset($_GET['ledger'])) 
				$ledger = trim($_GET['ledger']);
			else $ledger = false;
			if(isset($_GET['lg_ref'])) 
				$lg_ref = trim($_GET['lg_ref']);
			else $lg_ref = false;
			if(isset($_GET['lg_desc']))
				$lg_desc = trim($_GET['lg_desc']);
			else $lg_desc = false;
			if(isset($_GET['lg_debit'])) {
				if ($_GET['lg_debit'] == '')
					$lg_debit = 0;
				else $lg_debit = trim($_GET['lg_debit']);
			} else $lg_debit = false;
			if(isset($_GET['lg_credit'])) {
				if ($_GET['lg_credit'] == '')
					$lg_credit = 0;
				else $lg_credit = trim($_GET['lg_credit']);
			} else $lg_credit = false;
			if(($lg_debit !== false) && ($lg_credit !== false))
				$lg_amt = trim(abs($lg_debit - $lg_credit));
			else $lg_amt = false;
			if(isset($_GET['lg_total_amt']))
				$lg_total_amt = trim($_GET['lg_total_amt']);
			else $lg_total_amt = false;
			if(isset($_GET['journal']))
				$journal = trim($_GET['journal']);
			else $journal = false;
			if(isset($_GET['jl_ref']))
				$jl_ref = trim($_GET['jl_ref']);
			else $jl_ref = false;
			if(isset($_GET['jl_desc']))
				$jl_desc = trim($_GET['jl_desc']);
			else $jl_desc = false;
			if(isset($_GET['jl_amt']))
				$jl_amt = trim($_GET['jl_amt']);
			else $jl_amt = false;
			if(isset($_GET['trans']))
				$trans = trim($_GET['trans']);
			else $trans = false;
			if(isset($_GET['trans_amt']))
				$trans_amt = trim($_GET['trans_amt']);
			else $trans_amt = false;
			if(isset($_GET['trans_total_amt']))
				$trans_total_amt = trim($_GET['trans_total_amt']);
			else $trans_total_amt = false;

			$row = 0;
			$numerical_errors = 0;
			if (strrpos($jl_desc, "-") != false) {
				$range = explode("-", $jl_desc);
				if (is_numeric($range[0]) && is_numeric($range[1])) {
					$from = $range[0];
					$to = $range[1];
				} else $range = false;
			} else $range = false;
			
			
			if ($lg_total_amt) {
				if ($fs_amt == $lg_total_amt) {
					$fs_lg_result = "The amount of ".$account." Account selected from the ".$fs." MATCHES the total amount of the ledger entries in the ".$ledger.".";
					$fs_lg_result_stat = true;
				} else {
					$fs_lg_result = "The amount of ".$account." Account selected from the ".$fs." DOES NOT MATCH the total amount of the ledger entries in the ".$ledger.".";
					$fs_lg_result_stat = 0;
					$numerical_errors++;
				}
			} else {
				$fs_lg_result = false;
				$fs_lg_result_stat = -1;
				$numerical_errors++;
			}
			
			if ($jl_amt) {
				if ($lg_amt == $jl_amt) {
					$lg_jl_result = "The amount of the entry selected from the ".$ledger." MATCHES the amount of the journal entry highlighted in the ".$journal.".";
					$lg_jl_result_stat = true;
				} else {
					$lg_jl_result = "The amount of the entry selected from the ".$ledger." DOES NOT MATCH the amount of the journal entry highlighted in the ".$journal.".";
					$lg_jl_result_stat = 0;
					$numerical_errors++;
				}
			} else {
				$lg_jl_result = false;
				$lg_jl_result_stat = -1;
				$numerical_errors++;
			}
			
			if ($trans_total_amt) {
				if ($jl_amt == $trans_total_amt) {
					$jl_trans_result = "The amount of the entry selected from the ".$journal." MATCHES the amount of the entry displayed in the ".$trans." File.";
					$jl_trans_result_stat = true;
				} else { 
					$jl_trans_result = "The amount of the entry selected from the ".$journal." DOES NOT MATCH the amount of the entry displayed in the ".$trans." File.";
					$jl_trans_result_stat = 0;				
					$numerical_errors++;
				}
			} else {
				$jl_trans_result = false;
				$jl_trans_result_stat = -1;				
				$numerical_errors++;
			}
			
			if ($dets_total_amt) {
				if ($trans_amt == $dets_total_amt) {
					$trans_dets_result = "The amount of the entry selected from the ".$trans." MATCHES the amount of the entry displayed in the ".$trans." Details.";
					$trans_dets_result_stat = true;
				} else { 
					$trans_dets_result = "The amount of the entry selected from the ".$trans." DOES NOT MATCH the total amount of the entries in the ".$trans." Details.";
					$trans_dets_result_stat = 0;
					$numerical_errors++;
				}
			} else {
				$trans_dets_result = false;
				$trans_dets_result_stat = -1;
				$numerical_errors++;
			}
			
			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('firstPageURL', $this->session->userdata('firstPageURL'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->assign('month', $month);
			$this->mysmarty->assign('year', $year);
			//$this->mysmarty->assign('source', $path['full_path']);
			$this->mysmarty->assign('fs', $fs);
			$this->mysmarty->assign('ledger', $ledger);
			$this->mysmarty->assign('journal', $journal);
			$this->mysmarty->assign('trans', $trans);
			$this->mysmarty->assign('acct', $account);
			$this->mysmarty->assign('info', $info);
			$this->mysmarty->assign('fs', $fs);
			$this->mysmarty->assign('fs_amt', $fs_amt);
			$this->mysmarty->assign('fs_file', $fs_file);
			$this->mysmarty->assign('ledger', $ledger);
			$this->mysmarty->assign('lg_ref', $lg_ref);
			$this->mysmarty->assign('lg_desc', $lg_desc);
			$this->mysmarty->assign('lg_debit', $lg_debit);
			$this->mysmarty->assign('lg_credit', $lg_credit);
			$this->mysmarty->assign('journal', $journal);
			$this->mysmarty->assign('jl_ref', $jl_ref);
			$this->mysmarty->assign('jl_amt', $jl_amt);
			$this->mysmarty->assign('ref', $ref);
			//$this->mysmarty->assign('fs_lg_result', $fs_lg_result);
			$this->mysmarty->assign('fs_lg_result', $fs_lg_result);
			$this->mysmarty->assign('fs_lg_result_stat', $fs_lg_result_stat);
			$this->mysmarty->assign('lg_jl_result', $lg_jl_result);
			$this->mysmarty->assign('lg_jl_result_stat', $lg_jl_result_stat);
			$this->mysmarty->assign('jl_trans_result', $jl_trans_result);
			$this->mysmarty->assign('jl_trans_result_stat', $jl_trans_result_stat);
			$this->mysmarty->assign('trans_dets_result', $trans_dets_result);
			$this->mysmarty->assign('trans_dets_result_stat', $trans_dets_result_stat);		
			$this->mysmarty->assign('numerical_errors', $numerical_errors);		
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('audit_trail/summary.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function save() {
		$based64Image=substr($_POST['data'], strpos($_POST['data'], ',')+1);
		$image = imagecreatefromstring(base64_decode($based64Image));
		date_default_timezone_set('Asia/Hong_Kong');
		$fileName='';
		if($image != false) {
			$fileName=date("Y-m-d_H-i-s", time()).'.png';
			$folder = 'files/audit_trail_summary';
			if (!is_dir($folder)) {
				mkdir($folder);
			}
			$newFile = 'audit_trail_summary/'.$fileName;
			$fileName = $folder.'/'.$fileName;
			
			if(!imagepng($image, $fileName)) {
		//          fail;
			}

		} else {
//          fail;
		}
		echo $newFile;
	}

	public function download() {
		$file = $_GET['data'];
		$file_contents = file_get_contents('files/'.$file);
		$local_trailblazer_path = "C:\\Trailblazer";
		if (!is_dir($local_trailblazer_path)) {
			mkdir($local_trailblazer_path);
		}
		$local_file_path = 'C:\\Trailblazer\\audit_trail_summary';
		if (!is_dir($local_file_path)) {
			mkdir($local_file_path);
		}
		$newFile = 'C:/Trailblazer/'.$file;
		file_put_contents($newFile, $file_contents);
		echo $local_file_path;
		//$glob_string =  realpath('C:\\Temp\\'). DIRECTORY_SEPARATOR .time().'.png';
		//header('Content-Type: image/png');
		//header('Content-Disposition: attachment; filename='.basename($fullPath));
		//readfile($fullPath);
		
	}
	
	public function open() {
		$path = $_GET['path'];
		$newPath = str_replace("/", "\\", $path);
		exec('%SystemRoot%\explorer.exe  "'.$newPath.'"');
		header('Location:' . $_SERVER['HTTP_REFERER']);
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}
?>