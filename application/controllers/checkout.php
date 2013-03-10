<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
	}
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$data['user'] = $this->User_Model->getSingle($user_id);
		$this->load->view('checkout_page' , $data);
	}
	public function step1()
	{
		$this->load->view('checkout_step1_page');
	}
}