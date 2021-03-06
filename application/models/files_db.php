<?php
class Files_DB extends CI_Model {
	private $conn;
	
	function __construct() {
		$this->conn = $this->load->database();
		/*$this->conn = new database() /*mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
					  die('There was a problem connecting to the database.');*/
	}

	function addAllFiles($files) {
		$this->db->truncate('files');
		foreach ($files as $f) {
			echo $f['filename'],
			$file = array(
				'path' => $f['path'],
				'filename' => $f['filename'],
				'date_created' => $f['date_created'],
				'date_modified' => $f['date_modified'],
				'date_accessed' => $f['date_accessed'],
				'size' => $f['size'],
				'checksum' => $f['checksum']
			);
			$this->db->insert('files', $file);
		}
	}
	
	function getAllFiles() {
		$query = $this->db->query("SELECT *
									FROM files");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$files[] = array(
					'path' => $row->path,
					'filename' => $row->filename,
					'date_created' => $row->date_created,
					'date_modified' => $row->date_modified,
					'date_accessed' => $row->date_accessed,
					'size' => $row->size,
					'checksum' => $row->checksum
				);
			}
			return $files;
		} else return false;
	}
	
	function deleteAFileInDirectory($path, $filename) {
		$this->db->where('path', $path);
		$this->db->where('filename', $filename);
		$this->db->delete('files');
	}
	
	function deleteAllFilesInDirectory() {
		$this->db->truncate('files');
	}
	
	function getFilePath($filename) {
		$query = $this->db->query("SELECT path
									FROM files
									WHERE filename = '$filename'");
		if ($query->row()) {
			$row = $query->row(); 
			$path = $row->path;
			return $path;
		} else return false;
	}

	function getFilePathByDocTypeAndDate($doc_type, $month, $year) {
		$query = $this->db->query("SELECT dl.path, f.filename, dl.document
									FROM files f, doc_locations dl, doc_types dt
									WHERE dt.type = '$doc_type'
										AND dt.id = dl.type
										AND filename LIKE '%".$month."-".$year."%'
										AND f.path = dl.path");
		if ($query->row()) {
			$row = $query->row(); 
			$path['path'] = $row->path;
			$path['full_path'] = $row->path."\\".$row->filename;
			$path['doc'] = $row->document;
			return $path;
		} else return false;
	}
	
	function getFilePathByDocTypeAndYear($doc_type, $year) {
		$query = $this->db->query("SELECT dl.path, f.filename, dl.document
									FROM files f, doc_locations dl, doc_types dt
									WHERE dt.type = '$doc_type'
										AND dt.id = dl.type
										AND filename LIKE '%-".$year."%'
										AND f.path = dl.path");

		if ($query->result()) {
			foreach ($query->result() as $row) {
				$paths[] = array(
					'path' => $row->path,
					'filename' => $row->filename,
					'full_path' => $row->path."\\".$row->filename,
					'doc' => $row->document
				);
			}
			return $paths;
		} else return false;
	}

	function getFilePathByReference($doc_type, $ref) {
		$query = $this->db->query("SELECT dl.path, f.filename, dl.document
									FROM files f, doc_locations dl, doc_types dt
									WHERE dt.type = '$doc_type'
										AND dt.id = dl.type
										AND filename LIKE '%".$ref."%'
										AND f.path = dl.path");

		if ($query->row()) {
			$row = $query->row(); 
			$path['path'] = $row->path;
			$path['full_path'] = $row->path."\\".$row->filename;
			$path['doc'] = $row->document;
			return $path;
		} else return false;
	}
	
	function getFilePathsByName($filename) {
		$query = $this->db->query("SELECT *
									FROM files
									WHERE filename LIKE '%".$filename."%'");
		if ($query->result()) {
			foreach ($query->result() as $row) {			
				$paths[] = $row->path."\\".$row->filename;
			}
			return $paths;
		} else return false;
	}
	
	function removeTempItem($id) {
		$query = $this->db->query("SELECT amount
									FROM sales_invoice_temp
									WHERE id = $id");
		$row = $query->row(); 
		$data['amount'] = $row->amount;
		
		$this->db->where('id', $id);
		$this->db->delete('sales_invoice_temp');
		
		return $data;
	}
	
	function emptyTempInvoices() {
		$this->db->empty_table('sales_invoice_temp');
	}
	
	function createInvoice($info) {
		$temp = explode(",", $info['cust_name']);
		$lname = trim($temp[0]);
		$fname = trim($temp[1]);
		
		$invoice_info = array(
			'cust_acct_no' => $info['cust_id'],
			'cust_name' => $info['cust_name'],
			'cashier_no' => $info['user_id'],
			'vat_amount' => $info['vat_amount']
		);
		
        $this->db->insert('sales_invoice', $invoice_info);
		
		//if the customer isn't in the database yet, add him/her
		$query = $this->db->query("SELECT *
									FROM customers
									WHERE lname = '$lname'
										AND fname = '$fname'");
										
		if (!$query->row()) {
			$cust_info = array(
				'id' => $info['cust_id'],
				'lname' => $lname,
				'fname' => $fname,
				'bdate' => $info['cust_bdate'],
				'sex' => $info['cust_sex'],
				'address' => $info['cust_address'],
				'contact' => $info['cust_contact'],
				'email' => $info['cust_email']
			);
			$this->db->insert('customers', $cust_info);
		}
		
		$query = $this->db->query("SELECT *
									FROM sales_invoice s
									ORDER BY s.invoice_no
									DESC LIMIT 1");
									
		$row = $query->row(); 
		$si_info['invoice_no'] = $row->invoice_no;
		$si_info['date_time'] = $row->date_time;
		$si_info['user_id'] = $row->cashier_no;
		
		return $si_info;
	}

	function updateSalesInvoiceDetails($items) {
		$items = array(
			'invoice_no' => $items['invoice_no'],
			'inventory_no' => $items['inventory_no'],
			'item_code' => $items['item_code'],
			'quantity' => $items['units_sold'],
			'price' => $items['price'],
			'amount' => $items['amount']
		);
		
        $this->db->insert('sales_invoice_details', $items);
	}
	
	function updateAmountDue($d) {
		$info = array(
			'amount_due' => $d['amount_due']
		);
		
		$this->db->where('invoice_no', $d['invoice_no']);
		$this->db->update('sales_invoice', $info);
	}

	function getPresentVATRate() {
		$query = $this->db->query("SELECT *
									FROM vat_rates
									ORDER BY id
									DESC LIMIT 1");
									
		$row = $query->row(); 
		$vat_rate = $row->vat_rate;
		
		return $vat_rate;
	}
	
	function getPaymentsByStudno($studno) {
		$query = $this->db->query("SELECT p.id as id, OR_no, studno, facID, f.name as facName, amt_paid, date_time
									FROM payments p, fac f
									WHERE p.studno = $studno
										AND p.facID = f.id");
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$payments[] = array(
					'id' => $row->id,
					'OR_no' => $row->OR_no,
					'studno' => $row->studno,
					'facID' => $row->facID,
					'facName' => $row->facName,
					'amt_paid' => $row->amt_paid,
					'date_time' => $row->date_time
				);
			}
			return $payments;
		} else return false;
	}
	
	function getTotalPayableByStudno($studno) {
		$query = $this->db->query("SELECT amount
									FROM payables p, fac f
									WHERE p.studno = $studno
										AND p.facID = f.id");
		$totalPayable = 0;
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$totalPayable += $row->amount;
			}
			return $totalPayable;
		} else return false;
	}
	
	function getTotalAmtPaidByStudno($studno) {
		$query = $this->db->query("SELECT amt_paid
									FROM payments p, fac f
									WHERE p.studno = $studno
										AND p.facID = f.id");
		$totalAmtPaid = 0;
		if ($query->result()) {
			foreach ($query->result() as $row) {
				$totalAmtPaid += $row->amt_paid;
			}
			return $totalAmtPaid;
		} else return false;
	}
	
	function getID($name) {
		$query = $this->db->query("SELECT id
									FROM fac
									WHERE name='$name'");
		$row = $query->row(); 
		$id = $row->id;
		return $id;
	}
	
	function enterPayment($p) {
 		$payment = array(
			'OR_no' => $p['or'],
			'studno' => $p['studno'],
			'facID' => $p['fac'],
			'type' => $p['type'],
			'amt_paid' => $p['amount']
		);
		
        $this->db->insert('payments', $payment);	
	}

	function addFacToStud($studno, $fac_id) {
		$payable = array(
			'studno' => $studno,
			'facID' => $fac_id
		);
		
        $this->db->insert('payables', $payable);			
	}
	
	function updateFac($f) {
		$fac = array(
			'name' => $f['name'],
			'amount' => $f['amount'],
			'date_due' => $f['date_due'],
			'memo' => $f['memo']
		);
		
		$this->db->where('id', $f['id']);
		$this->db->update('fac', $fac);
	}
	
	function deleteFac($id) {
		$this->db->where('id', $id);
		$this->db->delete('fac');
	}
}
?>