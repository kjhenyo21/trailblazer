<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('account');
		$this->load->helper('url');
    }
	
	public function index() {
		if ($this->session->userdata('status') == 'authorizedUser') {
			header("location: ".$this->config->item('base_url')."audit_trail");
		} else {
			$data['current_url'] = $this->config->item('base_url')."admin";
			$user_id = $this->session->userdata('username');
			if (!empty($_GET['response'])) {
				$this->mysmarty->assign('response', $_GET['response']);
			} else $this->mysmarty->assign('response', "");
			
			if (!empty($_GET['status'])) {
				$this->mysmarty->assign('accessStatus', $_GET['status']);
			} else $this->mysmarty->assign('accessStatus', "");
			
			$this->mysmarty->assign('status', $this->session->userdata('status'));
			$this->mysmarty->assign('base_url', $this->config->item('base_url'));
			$this->mysmarty->display('header.tpl');
			$this->mysmarty->display('index.tpl');
			$this->mysmarty->display('footer.tpl');
		}
	}
	
	public function logout() {
		$account = new account();
		$account->logOut();
	}
}

?>