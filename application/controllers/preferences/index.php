<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('preferences_db');
		$this->load->model('files_db');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	
	public function index() {
		$pref = new preferences_db();
		$paths = $pref->getDocPaths();
		if (isset($_GET['response']))
			$response = $_GET['response'];
		else $response = '';
		$this->mysmarty->assign('response', $response);
		$this->mysmarty->assign('paths', $paths);
		$this->mysmarty->assign('nEPaths', $this->getNonExistentPaths());
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('preferences/index.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function updatePreferences() {
		//$path = $this->input->post('theFile');
		//echo $path;
		//return $path;
		$pref = new preferences_db();
		$pref->deleteAllPaths();
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
		//header("location: ".$this->config->item('base_url')."audit_trail");
	}
	
	public function removePath() {
		$id = $_GET['id'];
		$this->db->where('id', $id);
		$this->db->delete('doc_locations'); 
	}
	
	public function getNonExistentPaths() {
		$preferences = new preferences_db();
		$paths = $preferences->getDocPaths();
		$nonExistentPaths = array();
		foreach ($paths as $p) {
			if (!$this->pathExists($p['path']))
				$nonExistentPaths[] = $p['path'];
		}
		return $nonExistentPaths;
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
				$folder = 'files/temp';
				if (!is_dir($folder)) {
					mkdir($folder);
				}
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
						$file_contents = file_get_contents($file);
						$newFile = $folder.'/'.basename($file);
						file_put_contents($newFile, $file_contents);
					}
				}
			}
		}
		$file_handler->addAllFiles($new_files);
		return $files;
	}
}