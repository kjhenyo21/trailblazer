<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('profile_db');
		//$this->load->model('account');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	
	public function index() {
		$uname = $this->session->userdata('username');
		$profile = new profile_db();
		$info = $profile->getProfile($uname);
		if (isset($_GET['response']))
			$response = $_GET['response'];
		else $response = '';
		$this->mysmarty->assign('info', $info);
		$this->mysmarty->assign('response', $response);
		$this->mysmarty->display('header.tpl');
		$this->mysmarty->display('profile/index.tpl');
		$this->mysmarty->display('footer.tpl');
	}
	
	public function updateProfile() {
		$profile = new profile_db();
		$info['id'] = $this->security->xss_clean($this->input->post('id'));
		$info['lname'] = $this->security->xss_clean($this->input->post('lname'));
		$info['fname'] = $this->input->post('fname');
		$info['mname'] = $this->security->xss_clean($this->input->post('mname'));
		$info['sex'] = $this->security->xss_clean($this->input->post('sex'));
		$info['bdate'] = $this->security->xss_clean($this->input->post('bdate'));
		$info['address'] = $this->input->post('address');
		$info['contact'] = $this->security->xss_clean($this->input->post('contact'));		
		$info['email'] = $this->security->xss_clean($this->input->post('email'));	
		$info['license_no'] = $this->security->xss_clean($this->input->post('license_no'));	
		$info['cname'] = $this->security->xss_clean($this->input->post('cname'));	
		$info['caddress'] = $this->input->post('caddress');		
		$info['position'] = $this->security->xss_clean($this->input->post('email'));	
		$info['uname'] = $this->security->xss_clean($this->input->post('uname'));
		$info['password'] = $this->security->xss_clean($this->input->post('password'));
		$info['no'] = $this->security->xss_clean($this->input->post('no'));
		$info['id1'] = $this->security->xss_clean($this->input->post('id1'));

		$profile->updateProfile($info);
		//header("location: ".$this->config->item('base_url')."setup_preferences");
	}
	
	public function delete() {
		unlink('./application/controllers/setup.php');
		//unlink('./application/views/install.php');
	}
}