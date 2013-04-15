<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Load_Trans_Sample extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('files_db');
		$this->load->model('database_db');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index() {
		$database = new database_db();
		$medium = $_GET['medium'];
		$from = $_GET['from'];
		$to = $_GET['to'];
		$headings = $_GET['headings'];
		$doc_type = "Transaction Files";
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
		$doc = $_GET['doc'];
		$orig_trans_total_amt = $_GET['trans_total_amt'];
		$trans_total_amt = 0;
		$population = $_GET['pop'];
		$desiredReliabilityFactor = 0.05;
		$p = 0.50;
		$z = 1.95;
		if ($medium == 'manual')
			$sampleSize = $_GET['size'];
		else if ($medium == 'standard') {
			$sampleSize = false;
		}
		
		//if (!$database->tableExists('transactions_sample'))
			$database->createTransactionsSampleTable($headings);
		$info = $database->getSamplesWithRange($population, $sampleSize, $from, $to);
		if ($info) {
			foreach ($info as $i) {
				$trans_total_amt += $i[2];
			}
		} else { 
			$info = false;
			$error_msg = "Cannot find transaction.";
		}
		$this->mysmarty->assign('headings', $headings);
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
		$this->mysmarty->assign('orig_trans_total_amt', $orig_trans_total_amt);
		$this->mysmarty->assign('doc', $doc);
		$this->mysmarty->assign('ref', $ref);
		$this->mysmarty->assign('acct', $account);
		$this->mysmarty->assign('info', $info);
		$this->mysmarty->display('audit_trail/trail_sample_transactions.tpl');
	}
}
?>