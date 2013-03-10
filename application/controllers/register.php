<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullName', 'Full Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('zipcode', 'Postcode', 'required|is_natural');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|is_natural');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.user_email]|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[confirmpassword]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('registration_page');
		}
		else
		{
			$this->User_Model->add();
			$id = $this->db->insert_id();
			$this->Email_Model->confirmRegistration($id);
			$data['message'] = "Registration Success.Activation link will be sent to your email";
			$this->load->view('success_page' , $data);
		}
	}
}