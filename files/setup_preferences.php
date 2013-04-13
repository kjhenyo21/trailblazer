<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setup_Preferences extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('preferences_db');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	
	public function index() {
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('setup_preferences.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function savePreferences() {
		//$path = $this->input->post('theFile');
		//echo $path;
		//return $path;
		$pref = new preferences_db();
		$docs = $this->input->post('doc');
		$types = $this->input->post('type');
		$paths = $this->input->post('path');
		$exts = $this->input->post('ext');
		$size = sizeOf($docs);
		for ($i = 0; $i < $size; $i++) {
			$info = array(
				'doc' => $docs[$i],
				'type' => $types[$i],
				'path' => $paths[$i],
				'ext' => $exts[$i]
			);
			$pref->addPath($info);
		}
		$this->searchFiles();
		//echo "<script type='text/javascript'>window.alert('Setup successful! You will now be directed to the Login Page.'); window.location.href='".$this->config->item('base_url')."audit_trail'</script>";
		//unlink('./application/controllers/setup_preferences.php');
		//header("location: ".$this->config->item('base_url')."audit_trail");
	}
	
	public function doesPathExist() {
		if (isset($_GET['path']))
			$path = $_GET['path'];
		//echo $path;
		if (is_dir($path)) {
			//echo "EXIST!";
			echo "true";
		} else {
			//echo "nope";
			echo "false";
		}
	}
	
	public function searchFiles() {
		date_default_timezone_set('Asia/Hong_Kong');
		$preferences = new preferences_db();
		$file_handler = new files_db();
		$paths = $preferences->getDocPaths();
		foreach ($paths as $p) {
			if ($this->pathExists($p['path'])) {
				$directory = $p['path'];
				
				//echo $directory;
				$files = glob($directory.'/*');
				foreach($files as $file) {
					if (is_file($file)) {
						$stat = stat($file);
						$new_files[] = array(
							'filename' => basename($file),
							'path' => dirname($file),
							'date_created' => date("Y-m-d H:i:s", $stat['ctime']),
							'date_modified' => date("Y-m-d H:i:s", $stat['mtime']),
							'date_accessed' => date("Y-m-d H:i:s", $stat['atime']),
							'size' => $stat['size'],
							'checksum' => crc32(file_get_contents($file))
						);
					}
					/**echo $file."\r\n";
					echo basename($file)."\r\n";
					echo dirname($file)."\r\n";
					echo date("Y-m-d H:i:s", $stat['ctime'])."\r\n";
					echo date("Y-m-d H:i:s", $stat['mtime'])."\r\n";
					echo date("Y-m-d H:i:s", $stat['atime'])."\r\n";*/
				}
			}
		}
		$file_handler->addAllFiles($new_files);
		return $files;
	}
}