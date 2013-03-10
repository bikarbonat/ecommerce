<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
	}
	public function index()
	{
		$data['main_menu'] = $this->load->view('admin/main_menu','' ,true);
		$this->load->view('admin/dashboard_page' , $data);
	}
}