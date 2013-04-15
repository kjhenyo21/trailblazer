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
			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('user', $this->session->userdata('username'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->assign('nonExistentPaths', $this->checkPaths());
			$this->mysmarty->assign('noOfModFiles', $this->checkFiles());
			$this->mysmarty->assign('nEPaths', $this->getNonExistentPaths());
			$this->mysmarty->assign('noOfNewAndIgnoredMessages', $database->countIgnoredAndNewMessages());
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('audit_trail/index.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function readFile() {
		if ($this->session->userdata('status') != 'authorizedUser') {
			header("location:".$this->config->item('base_url')."index.php?status=unauthorizedAccess");
		} else {
			$files = new files_db();
			//Chrome automatically replaces path with C:\fakepath
			$init_filename = $_GET['file'];
			if (strpos($init_filename, "C:\\fakepath\\") === false)
				$filename = $init_filename;
			else {
				$filename = str_replace("C:\\fakepath\\", "", $init_filename);
			}
			//$filename = $this->input->post('file');
			$doc = $_GET['doc'];
			//$doc = $this->input->post('doc');
			$items = $_GET['items'];
			//$items = $this->input->post('items');
			$error_msg = false;
			$expected_columns = 2;
			$path = $files->getFilePath($filename);
			$full_path = $path."\\".$filename;
			$temp = explode("-", $filename);
			if (sizeOf($temp) == 3) {
				$month_in_num = $temp[1];
				$month = date("F", mktime(0, 0, 0, $temp[1], 10));
				$year = substr($temp[2], 0, strpos($temp[2], "."));
				$date = $month." ".$year;
			} else if (sizeOf($temp) == 2) {
				$month_in_num = false;
				$year = substr($temp[1], 0, strpos($temp[1], "."));
				$date = $year;
			}
			$info = false;
			$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
			$host = $_SERVER['HTTP_HOST'];
			$script = $_SERVER['SCRIPT_NAME'];
			$uri = $_SERVER["REQUEST_URI"];
			$params = $_SERVER['QUERY_STRING'];
			 
			$firstPageURL = $protocol . '://' . $host . $uri;
			$this->session->set_userdata('firstPageURL', $firstPageURL);
			
			if(file_exists($full_path)) {
				$errors = 0;
				if (($handle = fopen($full_path, "r") or die("File not found!")) !== FALSE) {
					while (($test = fgetcsv($handle, 1000, ",")) !== FALSE) {
						$size = count($test);
						if ($size != $expected_columns) {
							$errors++;
						}
					}
					//echo $errors;
					//$lines = file($full_path);
					/**foreach ($lines as $line_num => $line) {
						echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
					}*/
					if ($errors == 0) {
						$handle = fopen($full_path, "r");
						if ($doc == "Income Statement") {
							while (($temp = fgetcsv($handle, 1000, ",")) !== FALSE) {
								$size = count($temp);
					
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
						}
					} else $error_msg = "Certain line(s) of the file or the entire file may not be in the required format of this system for financial statements.";
				}
			} else $error_msg = "No results to display. Either file is not found or no results at all.";
					
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
	}
	
	public function checkPaths() {
		$preferences = new preferences_db();
		$paths = $preferences->getDocPaths();
		$noOfNonExistentPaths = 0;
		if ($paths) {
			foreach ($paths as $p) {
				if (!$this->pathExists($p['path']))
					$noOfNonExistentPaths++;
			}
		}
		return $noOfNonExistentPaths;
	}
	
	public function getNonExistentPaths() {
		$preferences = new preferences_db();
		$paths = $preferences->getDocPaths();
		$nonExistentPaths = array();
		if ($paths) {
			foreach ($paths as $p) {
				if (!$this->pathExists($p['path']))
					$nonExistentPaths[] = $p['path'];
			}
			return $nonExistentPaths;
		} else return false;
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
	
	public function checkFiles() {
		$files = new files_db();
		$filesToCheck = $files->getAllFiles();
		$noOfModifiedFiles = 0;
		if ($filesToCheck) {
			foreach ($filesToCheck as $f) {
				if ($this->pathExists($f['path'])) {
					$filepath = $f['path']."\\".$f['filename'];
					if (file_exists($filepath)) {
						$newCheckSum = crc32(file_get_contents($filepath));
						if ($f['checksum'] != $newCheckSum)
							$noOfModifiedFiles++;
					}
				}
			}
			return $noOfModifiedFiles;
		} else return false;
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
			if (($status == "confirmed") || ($status == "ignored"))
				$reply_msg = "You have already sent your confirmation on this transaction with Ref. No.: ". $ref .". Thank you for your cooperation!";
			else {
				if (strcasecmp($ans, "yes") == 0) {
					$reply_msg = "Thank you for your confirmation! We will call you should there be a need for further customer validation. Thank you and have a good day!";
					$database->saveReceivedMessage($ref, 'yes');
					$info = $messages->getMessageByRef($ref);
					echo $reply_msg;
					//header("location: ".$this->config->item('base_url')."messages/log_messages/writeToLog?data=".$info['date_received']." ".$info['name']."(0".$info['contact'].") replied 'yes' on Ref. No. ".$info['ref']);
				} else if (strcasecmp($ans, "no") == 0) {
					$reply_msg = "We are very sorry for bothering you. Thank you for your response, anyway. Have a good day!";
					$database->saveReceivedMessage($ref, 'no');
					$info = $messages->getMessageByRef($ref);
					echo $reply_msg;
					//header("location: ".$this->config->item('base_url')."messages/log_messages/writeToLog?data=".$info['date_received']." ".$info['name']."(0".$info['contact'].") replied 'no' on Ref. No. ".$info['ref']);
				} else $reply_msg = "Sorry, you have entered an invalid parameter. Please reply TRAIL<space><Ref No><space><Yes or No>. Thank you.";
			}
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
		header("location: ".$this->config->item('base_url')."messages/log_messages/writeToLog?data=".$info['date_sent']." ".$this->session->userdata('username')." sent a confirmation message to ".$info['name']." at 0".$info['contact']." with Ref. No. ".$info['ref']." on OR No. ".$info['or_no']." amounting to Php".$info['amt']);
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
		header("location: ".$this->config->item('base_url')."messages/log_messages/writeToLog?data=".$info['date_confirmed']." ".$this->session->userdata('username')." confirmed message with Ref. No. ".$info['ref']);
	}
	
	public function ignoreMessage() {
		$database = new database_db();
		$id = $_GET['id'];
		$database->ignoreMessage($id);
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>