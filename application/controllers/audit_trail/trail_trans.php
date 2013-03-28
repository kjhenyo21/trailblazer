<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trail_Trans extends CI_Controller {

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
			$account = $_GET['acct'];
			$ref = $_GET['ref'];
			$fs = $_GET['fs'];
			$fs_amt = $_GET['fs_amt'];
			$fs_file = $_GET['fs_file'];
			$ledger = $_GET['ledger'];
			$lg_ref = $_GET['lg_ref'];
			$lg_desc = $_GET['lg_desc'];
			$lg_debit = $_GET['lg_debit'];
			$lg_credit = $_GET['lg_credit'];
			$lg_amt = $_GET['lg_amt'];
			$lg_total_amt = $_GET['lg_total_amt'];
			$journal = $_GET['journal'];
			$jl_ref = $_GET['jl_ref'];
			$jl_desc = $_GET['jl_desc'];
			$jl_amt = $_GET['jl_amt'];
			
			if (strrpos($jl_desc, "-") != false) {
				$range = explode("-", $jl_desc);
				if (is_numeric($range[0]) && is_numeric($range[1])) {
					$from = $range[0];
					$to = $range[1];
				} else $range = false;
			} else $range = false;
			$date_temp = explode("-", $ref);
			$month_num = trim($date_temp[1]);
			$month = date("F", mktime(0, 0, 0, $month_num, 10));
			$year = trim($date_temp[2]);
			$row = 0;
			$info = false;
			$detail = false;
			$expected_columns = 7;
			$error_msg = "";
			$error_msg_det = "";
			$headings = "";
			$detHeadings = "";
			$detInfo = "";
			$trans_total_amt = 0;
			
			$path = $files->getFilePathByReference($doc_type, $ref);
			
			if(file_exists($path['full_path'])) {
				$errors = 0;
				if (($handle = fopen($path['full_path'], "r")) !== FALSE) {
					
					while (($test = fgetcsv($handle, 1000, ",")) !== FALSE) {
						$size = count($test);
						//if ($test[0] == 'h');	//heading
						//else {
							if ($size != $expected_columns)
								$errors++;
						//}
					}
					if ($errors == 0) {
						$handle = fopen($path['full_path'], "r");
						while (($temp = fgetcsv($handle, 1000, ",")) !== FALSE) {
							$size = count($temp);
							if ($temp[0] == 'h') {
								//echo "hey";
								for ($i = 1; $i < $size; $i++) {
									$headings[] = $temp[$i];
								}
							} else {
								if ($size > 1) {
									if (strcasecmp($path['doc'], "sale transactions") == 0) {
										
										$info[] = array(
											0 => trim($temp[1]),
											1 => trim($temp[2]),
											2 => trim($temp[3]),
											3 => trim($temp[4]),
											4 => trim($temp[5]),
											5 => trim($temp[6])
										);
									} else if (strcasecmp($path['doc'], "purchase transactions") == 0) {
										$info[] = array(
											0 => trim($temp[1]),
											1 => trim($temp[2]),
											2 => trim($temp[3]),
											3 => trim($temp[4]),
											4 => trim($temp[5]),
											5 => trim($temp[6])
										);
									} else if (strcasecmp($path['doc'], "expense transactions") == 0) {
										$info[] = array(
											0 => trim($temp[1]),
											1 => trim($temp[2]),
											2 => trim($temp[3]),
											3 => trim($temp[4]),
											4 => trim($temp[5]),
											5 => trim($temp[6])
										);
									}
								}
								//if (!$database->tableExists('transactions'))
									$database->createTransactionsTable($headings);
								//else "EXISTS";
								$database->addTransactions($headings, $info);
							}
							$row++;
						}
					} else $error_msg = "Certain line(s) of the file or the entire file may not be in the required format of this system for transaction files: [date,or_no,amt_due,cust_name,cust_address,cust_contact]";
				} else $error_msg = "File not found!";
			
				//path of transaction details
				$temp_ref = explode("-", $ref);
				$filename = trim($temp_ref[0])."d";
				$detailsRef = $filename."-".trim($temp_ref[1])."-".trim($temp_ref[2]);
				//echo $detailsRef;
				$detailsPath = $files->getFilePathByReference($doc_type, $detailsRef);
				if($detailsPath) {
					//for transaction details
					$errors = 0;
					if (($handle = fopen($detailsPath['full_path'], "r")) !== FALSE) {
						while (($test = fgetcsv($handle, 1000, ",")) !== FALSE) {
							$size = count($test);
							//if ($test[0] == 'h');	//heading
							//else {
								if ($size != $expected_columns)
									$errors++;
							//}
						}
						//echo $errors;
						if ($errors == 0) {
							$handle = fopen($detailsPath['full_path'], "r");
							while (($temp = fgetcsv($handle, 1000, ",")) !== FALSE) {
								$size = count($temp);
								if ($temp[0] == 'h') {
									//echo "hey";
									for ($i = 1; $i < $size; $i++) {
										$detHeadings[] = $temp[$i];
									}
								} else {
								
									if ($size > 1) {
										if (strcasecmp($detailsPath['doc'], "sale transactions") == 0) {
											$detInfo[] = array(
												0 => trim($temp[1]),
												1 => trim($temp[2]),
												2 => trim($temp[3]),
												3 => trim($temp[4]),
												4 => trim($temp[5]),
												5 => trim($temp[6])
											);
										} else if (strcasecmp($detailsPath['doc'], "purchase transactions") == 0) {
											$detInfo[] = array(
												0 => trim($temp[1]),
												1 => trim($temp[2]),
												2 => trim($temp[3]),
												3 => trim($temp[4]),
												4 => trim($temp[5]),
												5 => trim($temp[6])
											);
										} else if (strcasecmp($detailsPath['doc'], "expense transactions") == 0) {
											
											$detInfo[] = array(
												0 => trim($temp[1]),
												1 => trim($temp[2]),
												2 => trim($temp[3]),
												3 => trim($temp[4]),
												4 => trim($temp[5]),
												5 => trim($temp[6])
											);
										}
									}
								}
							}
							if (!$database->tableExists('transaction_details'))
								$database->createTransactionDetailsTable($detHeadings);
							$database->addTransactionDetails($detHeadings, $detInfo);
						}
						$row++;
					}
				} else $error_msg_det = "File not found!";
				
				$sizeOfTrans = sizeOf($info);
				$min = 8;
				if (is_numeric($jl_desc)) {
					$info = $database->getTransactionViaOR($jl_desc);
				} else {
					if ($range) {
						if ($sizeOfTrans > $min)
							$info = $database->getSamplesWithRange($sizeOfTrans, $info, $from, $to);
						else $info = $database->getTransactionsWithRange($sizeOfTrans, $info, $from, $to);
					} else {
						$info = $database->getTransactionByDesc($jl_desc);
					}
				}
				if ($info) {
					foreach ($info as $i) {
						$trans_total_amt += $i[2];
					}
				}
			} else $error_msg = "File not found!";
			$messages = $database->getIgnoredMessages();

			$this->mysmarty->assign('messages', $messages);
			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('user', $this->session->userdata('username'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->assign('month', $month);
			$this->mysmarty->assign('year', $year);
			$this->mysmarty->assign('headings', $headings);
			$this->mysmarty->assign('error_msg', $error_msg);
			$this->mysmarty->assign('error_msg_det', $error_msg_det);
			$this->mysmarty->assign('info', $info);
			$this->mysmarty->assign('details', $detInfo);
			$this->mysmarty->assign('source', $path['full_path']);
			$this->mysmarty->assign('fs', $fs);
			$this->mysmarty->assign('fs_amt', $fs_amt);
			$this->mysmarty->assign('fs_file', $fs_file);
			$this->mysmarty->assign('ledger', $ledger);
			$this->mysmarty->assign('lg_ref', $lg_ref);
			$this->mysmarty->assign('lg_desc', $lg_desc);
			$this->mysmarty->assign('lg_debit', $lg_debit);
			$this->mysmarty->assign('lg_credit', $lg_credit);
			$this->mysmarty->assign('lg_amt', $lg_amt);
			$this->mysmarty->assign('lg_total_amt', $lg_total_amt);
			$this->mysmarty->assign('journal', $journal);
			$this->mysmarty->assign('jl_ref', $jl_ref);
			$this->mysmarty->assign('jl_desc', $jl_desc);
			$this->mysmarty->assign('jl_amt', $jl_amt);
			$this->mysmarty->assign('trans_total_amt', $trans_total_amt);
			$this->mysmarty->assign('doc', $path['doc']);
			$this->mysmarty->assign('ref', $ref);
			$this->mysmarty->assign('acct', $account);
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('audit_trail/trail_transactions.tpl');
			$this->mysmarty->display('audit_trail/message.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function getTransDetails() {
		$database = new database_db();
		$or_no = $_GET['or_no'];
		$details = $database->getTransactionDetailsByOR($or_no);
		$total_amt = 0;
		foreach ($details as $d) {
			$data[] = array(
				0 => $d[0],
				1 => $d[1],
				2 => $d[2],
				3 => $d[3],
				4 => $d[4],
				5 => $d[5]
			);
			$total_amt += $d[5];
		}
		//echo json_encode($data);
		echo $data;
		return $data;
	}
	
	public function call() {
		/**$fp = fopen ("COM5:", "wb+");
		if (!$fp) {
			echo "Not open";
		} else {
			echo "Open";
		}*/
		
		$device = "COM4";

		exec("mode $device BAUD=9600 PARITY=n DATA=8 STOP=1 xon=off octs=off rts=on");

		$comport = fopen($device, "r+b");

		if ($comport === false) {
		die ("Failed opening com port");
		} else {
		echo "Com Port Open";
		}

		stream_set_blocking($comport, 0);

		$atcmd = "ATDT+639336925206;"; // dial fake number
		echo fwrite($comport, $atcmd );
		//$atcmd = "AT+CSMP?"; // dial fake number
		//echo fwrite($comport, $atcmd );
		//$atcmd = "AT+CMGS=\"+639336925206\"\rHello"; // dial fake number
		/**if (fwrite($comport, $atcmd ) === false) {
		die ("Failed writing to com port"); 
		} else {
		echo "Wrote $atcmd to com port";
		}*/

		//sleep(10); // added fix to make program work, was closing port too soon for it to dial

		//fclose($comport);



	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}
?>