<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Success extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
	}
	public function index()
	{
		$this->load->view('success_page');
	}
}