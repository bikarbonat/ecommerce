<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	/**
		Logout page.
		Then redirect to main page
	 */
	public function index()
	{
		$this->load->library('session');
		$this->load->helper('url');
		$this->session->sess_destroy();
		redirect('home');
	}
}