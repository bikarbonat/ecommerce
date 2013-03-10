<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activation extends CI_Controller {
	public function index()
	{
		$code = $this->uri->segment(2,0);
		$email = $this->uri->segment(3,0);
		if($this->User_Model->Activate($code , $email))
		{
			$data['message'] = "Account Activation Success";
			$this->load->view('success_page' , $data);
		}
	}
}