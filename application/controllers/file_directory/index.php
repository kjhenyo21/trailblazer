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
			$files = new files_db();
			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('user', $this->session->userdata('username'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->assign('nonExistentPaths', $this->checkPaths());
			$this->mysmarty->assign('nEPaths', $this->getNonExistentPaths());
			$this->mysmarty->assign('noOfModFiles', $this->checkFiles());
			$this->mysmarty->assign('modFiles', $this->getModifiedFiles());
			$this->mysmarty->assign('files', $files->getAllFiles());
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('file_directory/index.tpl');
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
				if ($this->pathExists($f['path']."\\".$f['filename'])) {
					$newCheckSum = crc32(file_get_contents($f['path']."\\".$f['filename']));
					if ($f['checksum'] != $newCheckSum)
						$noOfModifiedFiles++;
				}
			}
			return $noOfModifiedFiles;
		} else return false;
	}
	
	public function getModifiedFiles() {
		$files = new files_db();
		$filesToCheck = $files->getAllFiles();
		$modifiedFiles = array();
		if ($filesToCheck) {
			foreach ($filesToCheck as $f) {
				if ($this->pathExists($f['path']."\\".$f['filename'])) {
					$newCheckSum = crc32(file_get_contents($f['path']."\\".$f['filename']));
					if ($f['checksum'] != $newCheckSum)
						$modifiedFiles[] = $f;
				}
			}
			return $modifiedFiles;
		} else return false;
	}
	
	public function restoreFiles() {
		$modFiles = $this->getModifiedFiles();
		if ($modFiles) {
			foreach ($modFiles as $mf) {
				$file_contents = file_get_contents('files/temp/'.$mf['filename']);
				$newFile = $mf['path']."\\".$mf['filename'];
				file_put_contents($newFile, $file_contents);
			}
		} else return false;
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>