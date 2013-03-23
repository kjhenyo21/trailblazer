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
			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('user', $this->session->userdata('username'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->assign('nonExistentPaths', $this->checkPaths());
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('audit_trail/index.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function readFile() {
		$files = new files_db();
		$filename = $this->input->post('file');
		//echo $filename;
		$doc = $this->input->post('doc');
		$items = $this->input->post('items');
		$error_msg = false;
		$path = $files->getFilePath($filename);
		$full_path = $path."\\".$filename;
		if($path) {
			//echo $full_path;
		} else $error_msg = "No results to display. Either file is not found or no results at all.";
		
		$temp = explode("-", $filename);
		$month_in_num = $temp[1];
		$month = date("F", mktime(0, 0, 0, $temp[1], 10));
		$year = substr($temp[2], 0, strpos($temp[2], "."));
		$date = $month." ".$year;
		
		$lines = file($full_path);
		/**foreach ($lines as $line_num => $line) {
			echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		}*/
		if ($doc == "Income Statement") {
			foreach ($lines as $line) {
				$temp = explode(",", $line);
				$size = sizeOf($temp);
				if ($size > 1) {
					$info[] = array(
						'account' => trim($temp[0]),
						'amount' => trim($temp[1])
					);
				} else {
					$info[] = array(
						'account' => trim($temp[0]),
						'amount' => ""
					);
				}
			}
			
			$size = sizeOf($info);		
			foreach ($info as $i) {
				//echo $i['account'];
				//echo $i['amount'];
			}
		}
		
		$this->mysmarty->assign('fr_kind', $doc);
		$this->mysmarty->assign('info', $info);
		$this->mysmarty->assign('source', $full_path);
		$this->mysmarty->assign('error_msg', $error_msg);
		$this->mysmarty->assign('date', $date);
		$this->mysmarty->assign('month', $month_in_num);
		$this->mysmarty->assign('year', $year);
		$this->mysmarty->assign('file', $filename);
		$this->session->set_userdata('items_of_interest', $items);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('audit_trail/trail_fs.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function checkPaths() {
		$preferences = new preferences_db();
		$paths = $preferences->getDocPaths();
		$noOfNonExistentPaths = 0;
		foreach ($paths as $p) {
			if (!$this->pathExists($p['path']))
				$noOfNonExistentPaths++;
		}
		return $noOfNonExistentPaths;
	}

	public function pathExists($path) {
		//echo $path;
		if (is_dir($path)) {
			//echo "EXIST!";
			return true;
		} else {
			//echo "nope";
			return false;
		}
	}
	
	public function replyPerson() {
		$database = new database_db();
		$messages = new messages_db();
		$num = $_GET['num'];
		$content = $_GET['reply'];
		if ($content != '' && $content != ' ') {
			$temp = explode(" ", $content);
			$ref = $temp[0];
			$ans = $temp[1];

			$status = $database->checkMessageStatus($ref);
			if ($status != "confirmed") {
				if (strcasecmp($ans, "yes") == 0) {
					$reply_msg = "Thank you for your confirmation! We will call you should there be a need for further customer validation. Thank you and have a good day!";
					$database->saveReceivedMessage($ref, 'yes');
					$info = $messages->getMessageByRef($ref);
					header("location: ".$this->config->item('base_url')."audit_trail/log_messages/writeToLog?data=".$info['date_received']." ".$info['name']."(0".$info['contact'].") replied 'yes' on Ref. No. ".$info['ref']);
				} else if (strcasecmp($ans, "no") == 0) {
					$reply_msg = "We are very sorry for bothering you. Thank you for your response, anyway. Have a good day!";
					$database->saveReceivedMessage($ref, 'no');
					$info = $messages->getMessageByRef($ref);
					header("location: ".$this->config->item('base_url')."audit_trail/log_messages/writeToLog?data=".$info['date_received']." ".$info['name']."(0".$info['contact'].") replied 'no' on Ref. No. ".$info['ref']);
				} else $reply_msg = "Sorry, you have entered an invalid parameter. Please reply TRAIL<space><Ref No><space><Yes or No>. Thank you.";
			} else $reply_msg = "You have already sent your confirmation on this transaction with Ref. No.: ". $ref .". Thank you for your cooperation!";
			echo $reply_msg;
		} else {
			$reply_msg = "Sorry, you have entered an invalid parameter. Please reply TRAIL<space><Ref No><space><Yes or No>. Thank you.";
			echo $reply_msg;
		}
		return $reply_msg;
	}
	
	public function textPerson() {
		$database = new database_db();
		$messages = new messages_db();
		//$data['ref'] = rand(1000,9999);
		
		$data['name'] = $_GET['name'];
		$data['ref'] = $_GET['ref'];
		$data['contact'] = $_GET['contact'];
		$data['date'] = $_GET['date'];
		$data['or_no'] = $_GET['or_no'];
		$data['amt'] = $_GET['amt'];
		
		$database->storeSentMessage($data);
		$info = $messages->getMessageByRef($data['ref']);
		header("location: ".$this->config->item('base_url')."audit_trail/log_messages/writeToLog?data=".$info['date_sent']." sent a confirmation message to ".$info['name']." at 0".$info['contact']." with Ref. No. ".$info['ref']." on OR No. ".$info['or_no']." amounting to Php".$info['amt']);
	}
	
	public function test() {
		$database = new database_db();
		$messages = $database->getIgnoredMessages();
		$this->mysmarty->assign('messages', $messages);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('messages.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function checkIgnoredAndNewMessages() {
		$database = new database_db();
		$currentNo = $_GET['no'];
		$data['latest_count'] = $database->countIgnoredAndNewMessages();
		echo json_encode($data);
	}
	
	public function checkNewMessages() {
		$database = new database_db();
		$data['latest_count'] = $database->countLatestNewMessages();
		$data['all'] = $database->countIgnoredAndNewMessages();
		echo json_encode($data);
	}
	
	public function confirmMessage() {
		$database = new database_db();
		$messages = new messages_db();
		$id = $_GET['id'];
		$database->confirmMessage($id);
		$info = $messages->getMessageByID($id);
		header("location: ".$this->config->item('base_url')."audit_trail/log_messages/writeToLog?data=".$info['date_confirmed']." confirmed message with Ref. No. ".$info['ref']);
	}
	
	public function ignoreMessage() {
		$database = new database_db();
		$id = $_GET['id'];
		$database->ignoreMessage($id);
	}
	
	public function searchCustomerInvoice() {
		$customers = new customers_db();
		$temp_inv_no = random_string('numeric', 10);
		$cust_no = $this->security->xss_clean($this->input->post('cust_acct_no'));
		header("location: ".$this->config->item('base_url')."cashier/invoice?customer=".$cust_no."&invoice=".$temp_inv_no);
	}
	
	public function addItem() {
		$items = new cashier_db();
		$facs = new fac_db();
		$i['item_code'] = $this->security->xss_clean($this->input->post('or'));
		$items->addItem($i);
		header("location: ".$this->config->item('base_url')."cashier");			
	}
	
	public function editProfile() {
		$profile = new profile_db();
		$m['id'] = $this->security->xss_clean($this->input->post('id'));
		$m['studno'] = $this->security->xss_clean($this->input->post('studno'));
		$m['lname'] = $this->security->xss_clean($this->input->post('lname'));
		$m['fname'] = $this->security->xss_clean($this->input->post('fname'));
		$m['mname'] = $this->security->xss_clean($this->input->post('mname'));
		$m['mail'] = $this->security->xss_clean($this->input->post('mail'));
		$m['sex'] = $this->security->xss_clean($this->input->post('sex'));
		$m['bdate'] = $this->security->xss_clean($this->input->post('bdate'));
		$m['address'] = $this->security->xss_clean($this->input->post('address'));
		$m['phone'] = $this->security->xss_clean($this->input->post('phone'));		
		$m['year'] = $this->security->xss_clean($this->input->post('year'));		
		$m['block'] = $this->security->xss_clean($this->input->post('block'));		
			//$m['password'] = $this->security->xss_clean($this->input->post('password'));
		$profile->updateProfile($m);
		header("location: ".$this->config->item('base_url')."admin?status=saved");		
	}
	
	public function changePass() {
		$profile = new profile_db();
		$user_id = $this->session->userdata('id');
		$old_pass = $profile->getPassword($user_id);
		$m['id'] = $user_id;
		$id = $this->security->xss_clean($this->input->post('id'));
		$m['old_pass'] = $this->security->xss_clean($this->input->post('old_pass'));
		$m['new_pass'] = $this->security->xss_clean($this->input->post('new_pass'));
		$m['c_new_pass'] = $this->security->xss_clean($this->input->post('c_new_pass'));
		$this->form_validation->set_rules('old_pass', 'Old Password', 'required');
		$this->form_validation->set_rules('new_pass', 'New Password', 'required');
		$this->form_validation->set_rules('c_new_pass', 'Password Confirmation', 'required|matches[new_pass]');

		if ($this->form_validation->run() == FALSE) {
			$this->mysmarty->assign('error_old_pass', form_error('old_pass'));
			$this->mysmarty->assign('error_new_pass', form_error('new_pass'));
			$this->mysmarty->assign('error_c_new_pass', form_error('c_new_pass'));
			$this->mysmarty->assign('profile', $profile->getProfile($user_id));
			$this->mysmarty->assign('adminID', $this->session->userdata('id'));
			$this->mysmarty->display('admin/index.tpl');
			echo "<script>";
			echo "$('#changePass$id').show();";
			echo "</script>";
		} else {
			if ($old_pass == $m['old_pass']) {
				$profile->updatePassword($m);
				echo "<script>";
				echo "$('#changePass$id').hide();";
				echo "</script>";
				header("location: ".$this->config->item('base_url')."admin?status=passChanged");
			} else {
				$this->mysmarty->assign('error_old_pass', 'Invalid password!');
				$this->mysmarty->assign('error_new_pass', form_error('new_pass'));
				$this->mysmarty->assign('error_c_new_pass', form_error('c_new_pas'));
				$this->mysmarty->assign('profile', $profile->getProfile($user_id));
				$this->mysmarty->assign('adminID', $this->session->userdata('id'));
				$this->mysmarty->display('admin/index.tpl');
				echo "<script>";
				echo "$('#changePass$id').show();";
				echo "</script>";
			}
		}
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>