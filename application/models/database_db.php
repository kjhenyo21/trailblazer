<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Database_DB extends CI_Model {
	private $conn;
	
	
	function __construct() {
		$this->conn = $this->load->database();
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}

	function tableExists($table) {
		if ($this->db->table_exists($table)) {
			return true;
		} else return false;
	}
	
	function createTransactionsTable($columns) {
		$query = "DROP TABLE IF EXISTS `transactions`";
		$query_string = "CREATE TABLE `transactions` (";
		foreach($columns as $c) {
			$query_string .= "`".trim($c)."` varchar(255),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ","));
		$query_string .= ") ENGINE = InnoDB DEFAULT CHARSET = latin1;";
		//echo $query_string;
		
		$this->db->query($query);
		$this->db->query($query_string);
	}

	function createTransactionsSampleTable($columns) {
		$query = "DROP TABLE IF EXISTS `transactions_sample`";
		$query_string = "CREATE TABLE `transactions_sample` (";
		foreach($columns as $c) {
			//if (trim($c) == 'Amount Due')
			//	$query_string .= "`".trim($c)."` int(11),";
			//else $query_string .= "`".trim($c)."` varchar(255),";
			$query_string .= "`".trim($c)."` varchar(255),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ","));
		$query_string .= ") ENGINE = InnoDB DEFAULT CHARSET = latin1;";
		//echo $query_string;
		
		$this->db->query($query);
		$this->db->query($query_string);
	}
	
	function createTransactionDetailsTable($columns) {
		$query = "DROP TABLE IF EXISTS `transaction_details`";
		$query_string = "CREATE TABLE `transaction_details` (";
		foreach($columns as $c) {
			$query_string .= "`".trim($c)."` varchar(255),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ","));
		$query_string .= ") ENGINE = InnoDB DEFAULT CHARSET = latin1;";
		//echo $query_string;
		
		$this->db->query($query);
		$this->db->query($query_string);
	}
	
	function addTransactions($head, $info) {
		$this->db->truncate('transactions');
		$query_string = "INSERT INTO `transactions` (";
		$noOfHeads = 0;
		foreach($head as $h) {
			$query_string .= "`".trim($h)."`,";
			$noOfHeads++;
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).") VALUES ";

		foreach($info as $i) {
			$query_string .= "(";
			$index = 0;
			while ($index < $noOfHeads) {
				$query_string .= "'".trim($i[$index])."',";
				$index++;
			}
			$query_string = substr($query_string, 0, strrpos($query_string, ","));
			$query_string .= "),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).";";
		//echo $query_string;
		
		$this->db->query($query_string);
	}

	function addTransactionDetails($head, $info) {
		$this->db->truncate('transaction_details');
		$query_string = "INSERT INTO `transaction_details` (";
		$noOfHeads = 0;
		foreach($head as $h) {
			$query_string .= "`".trim($h)."`,";
			$noOfHeads++;
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).") VALUES ";

		foreach($info as $i) {
			$query_string .= "(";
			$index = 0;
			while ($index < $noOfHeads) {
				$query_string .= "'".trim($i[$index])."',";
				$index++;
			}
			$query_string = substr($query_string, 0, strrpos($query_string, ","));
			$query_string .= "),";
		}
		$query_string = substr($query_string, 0, strrpos($query_string, ",")).";";
		//echo $query_string;
		
		$this->db->query($query_string);
	}
	
	function getSamples($sizeOfTrans, $info) {
		$totalAmountDue = 0;
		$totalTaxableAmount = 0;
		$auditedDeductions = 0;
		$percentageOfDeductions = 0;
		$items_of_interest = $this->session->userdata('items_of_interest');
		$sampleSize = 0;
		
		foreach ($info as $i) {
			$totalAmountDue += $i[2];
			$totalTaxableAmount += $i[3];
		}
		
		$auditedDeductions = $totalAmountDue - $totalTaxableAmount;
		$percentageOfDeductions = $auditedDeductions / $totalAmountDue;
		$sampleSize = $items_of_interest / $percentageOfDeductions;
		$sampleSize = round($sampleSize);
		
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Amount Due` as amt_due, `Name` as name, `Address` as address, `Contact` as contact
									FROM transactions
									ORDER BY RAND()
									LIMIT $sampleSize");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$items[] = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->amt_due,
					3 => $row->name,
					4 => $row->address,
					5 => $row->contact
				);
			}
			return $items;
		} else return false;		
	}
	
	function getSamplesWithRange($population, $sampleSize, $from, $to) {
		//get the top20%
		$this->db->truncate('transactions_sample');
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Amount Due` as amt_due, `Name` as name, `Address` as address, `Contact` as contact
									FROM transactions
									WHERE `OR No` BETWEEN $from and $to
									ORDER BY `Amount Due`+0 DESC");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$this->db->query("INSERT INTO `transactions_sample` (
										`Date` ,
										`OR No` ,
										`Amount Due` ,
										`Name` ,
										`Address` ,
										`Contact`
										)
									VALUES (
									'" . $row->date . "',  '" . $row->or_no . "',  '" . floatval($row->amt_due) . "',  '" . $row->name . "',  '" . $row->address . "',  '" . $row->contact . "'
									);"
								);

			}
			//$this->db->insert_batch('transactions_sample', $data); 
		} else return false;	
		$top20percent = $population * 0.20;
		$population -= $top20percent;
		
		if ($sampleSize === false) {
			$desiredReliabilityFactor = 0.05;
			$p = 0.50;
			$z = 1.95;
			$sampleSize = (($population * ($z * $z)) * ($p * (1 - $p))) / (($population * ($desiredReliabilityFactor * $desiredReliabilityFactor)) + (($z * $z) * ($p * (1 - $p))));
			$sampleSize = round($sampleSize);
		}
		
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Amount Due` as amt_due, `Name` as name, `Address` as address, `Contact` as contact
									FROM transactions_sample
									LIMIT $top20percent");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$items[] = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->amt_due,
					3 => $row->name,
					4 => $row->address,
					5 => $row->contact
				);
				$or = $row->or_no;
				$this->db->query("DELETE FROM transactions_sample
									WHERE `OR No`=$or");
			}
		} else return false;		
		
		//perform the random sampling
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Amount Due` as amt_due, `Name` as name, `Address` as address, `Contact` as contact
									FROM transactions_sample
									WHERE `OR No` BETWEEN $from and $to
									ORDER BY RAND()
									LIMIT $sampleSize");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$items[] = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->amt_due,
					3 => $row->name,
					4 => $row->address,
					5 => $row->contact
				);
			}
			return $items;
		} else return false;		
	}

	function getTransactionsWithRange($from, $to) {		
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Amount Due` as amt_due, `Name` as name, `Address` as address, `Contact` as contact
									FROM transactions
									WHERE `OR No` BETWEEN $from and $to");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$items[] = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->amt_due,
					3 => $row->name,
					4 => $row->address,
					5 => $row->contact
				);
			}
			return $items;
		} else return false;		
	}
	
	function getTransactionDetailsByOR($or_no) {
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Item` as item, `Quantity` as qty, `Unit Price` as price, `Amount` as amt
									FROM transaction_details
									WHERE `OR No` = '$or_no'");
		if ($query->result()) {
			//echo "hey";
			foreach ($query->result() as $row) {
				$items[] = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->item,
					3 => $row->qty,
					4 => $row->price,
					5 => $row->amt
				);
			}
			return $items;
		} else return false;
	}

	function getTransactionByDesc($or_no) {
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Amount Due` as amt_due, `Name` as name, `Address` as address, `Contact` as contact
									FROM transactions
									WHERE `OR No` = '$or_no'");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$items[] = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->amt_due,
					3 => $row->name,
					4 => $row->address,
					5 => $row->contact
				);
			}
			return $items;
		} else return false;
	}
	
	function getTransactionViaOR($or_no) {
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Amount Due` as amt_due, `Name` as name, `Address` as address, `Contact` as contact
									FROM transactions
									WHERE `OR No` = $or_no");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$items[] = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->amt_due,
					3 => $row->name,
					4 => $row->address,
					5 => $row->contact
				);
			}
			return $items;
		} else return false;
	}	
	
	function getTransactionByOR($or_no) {
		$query = $this->db->query("SELECT Date as date, `OR No` as or_no, `Amount Due` as amt, `Name` as name, `Address` as address, `Contact` as contact
									FROM transactions
									WHERE `OR No` = $or_no");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$items = array(
					0 => $row->date,
					1 => $row->or_no,
					2 => $row->amt,
					3 => $row->name,
					4 => $row->address,
					5 => $row->contact
				);
			}
			return $items;
		} else return false;
	}
	
	function storeSentMessage($d) {
		$data = array(
		   'ref' => $d['ref'],
		   'name' => $d['name'],
		   'contact' => $d['contact'],
		   'date' => $d['date'],
		   'or_no' => $d['or_no'],
		   'amt' => $d['amt'],
		   'status' => 'sent'
		);

		$this->db->insert('messages', $data); 
	}
	
	function saveReceivedMessage($ref, $message) {
		date_default_timezone_set('Asia/Hong_Kong');
		$data = array(
			'date_received' => date("Y-m-d H:i:s", time()),
			'reply' => $message,
			'status' => 'new'
		);

		$this->db->where('ref', $ref); 
		$this->db->update('messages', $data); 
	}
	//--
	function confirmMessage($id) {
		date_default_timezone_set('Asia/Hong_Kong');
		$data = array(
			'date_confirmed' => date("Y-m-d H:i:s", time()),
			'status' => 'confirmed'
		);

		$this->db->where('id', $id);
		$this->db->update('messages', $data); 
	}
	
	function ignoreMessage($id) {
		$query = $this->db->query("SELECT status	
									FROM messages 
									WHERE id=$id");
		if ($query->result()) {
			$row = $query->row();
			$prev_status = $row->status;
			echo $prev_status;
		} else return false;
		
		$data = array(
		   'status' => 'ignored'
		);
		
		$this->db->where('id', $id);
		$this->db->update('messages', $data);
	}
	
	function getIgnoredMessages() {
		$query = $this->db->query("SELECT *	
									FROM messages 
									WHERE status='new' 
										OR status='ignored' 
									ORDER BY id ASC;");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$messages[] = array(
					'id' => $row->id,
					'ref' => $row->ref,
					'date_received' => $row->date_received,
					'name' => $row->name,
					'contact' => $row->contact,
					'date' => $row->date,
					'or_no' => $row->or_no,
					'amt' => $row->amt,
					'reply' => $row->reply,
					'status' => $row->status
				);
			}
			return $messages;
		} else return false;
	}
	
	function countLatestNewMessages() {
		$query = $this->db->query("SELECT COUNT(*) as count	
									FROM messages 
									WHERE status='new'");
		if ($query->result()) {
			$row = $query->row();
			$count = $row->count;
			return $count;
		} else return false;
	}
	
	function countIgnoredAndNewMessages() {
		$query = $this->db->query("SELECT COUNT(*) as count	
									FROM messages 
									WHERE status='new'
										OR status='ignored'");
		if ($query->result()) {
			$row = $query->row();
			$count = $row->count;
			return $count;
		} else return false;
	}
	
	function checkMessageStatus($ref) {
		$query = $this->db->query("SELECT status	
									FROM messages 
									WHERE ref=$ref");
		if ($query->result()) {
			$row = $query->row();
			$status = $row->status;
			return $status;
		} else return false;
	}
	
	function createSystemAuditTable() {
		$query = "DROP TABLE IF EXISTS `system_audits`;
					 CREATE  TABLE  `system_audits` (  `id` int( 11  )  NOT  NULL  AUTO_INCREMENT ,
					 `date_time` datetime NOT  NULL ,
					 `user` varchar( 255  )  NOT  NULL ,
					 `action` varchar( 255  )  NOT  NULL ,
					 `trans_date` datetime NOT  NULL ,
					 `account` varchar( 255  )  NOT  NULL ,
					 PRIMARY  KEY (  `id`  )  ) ENGINE  = InnoDB  DEFAULT CHARSET  = latin1;";
		
		$this->db->query($query);
	}
	
	function addSystemAuditLogs($info) {
		$this->db->truncate('system_audit');
		foreach ($info as $i) {
			$data = array(
				'date' => $i['date'],
				'time' => $i['time'],
				'user' => $i['user'],
				'action' => $i['action'],
				'trans_date' => $i['trans_date'],
				'account' => $i['account']
			);
			$this->db->insert('system_audit', $data);
		}		
	}
	
	function getAllSystemAuditLogs() {
		$query = $this->db->query("SELECT *	
									FROM system_audit");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$info[] = array(
					'date' => $row->date,
					'time' => $row->time,
					'user' => $row->user,
					'action' => $row->action,
					'trans_date' => $row->trans_date,
					'account' => $row->account
				);
			}
			return $info;
		} else return false;
	}
	
	function getSystemAuditLogsByDate($from, $to) {
		if (($to == '') || ($to == null))
			$to = $from;
		$query = $this->db->query("SELECT *
									FROM system_audit
									WHERE date BETWEEN '$from' and '$to'");
									
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$info[] = array(
					'date' => $row->date,
					'time' => $row->time,
					'user' => $row->user,
					'action' => $row->action,
					'trans_date' => $row->trans_date,
					'account' => $row->account
				);
			}
			return $info;
		} else return false;
	}

	function getSystemAuditLogsByUser($user) {
		$query = $this->db->query("SELECT *
									FROM system_audit
									WHERE user LIKE '%".$user."%'");
									
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$info[] = array(
					'date' => $row->date,
					'time' => $row->time,
					'user' => $row->user,
					'action' => $row->action,
					'trans_date' => $row->trans_date,
					'account' => $row->account
				);
			}
			return $info;
		} else return false;
	}

	function userExists() {
		$query = $this->db->query("SELECT *
									FROM users_info, user_accounts");
									
		if ($query->result()) {
			return true;
		} else return false;
	}
}