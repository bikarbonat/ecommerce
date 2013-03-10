<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
	}
	public function index()
	{
		$data['user'] = $this->User_Model->getAll();
		$this->load->view('admin/user/user_page' , $data);
	}
	public function add()
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
			$this->session->set_flashdata('message', '<div class="alert-box success four columns">Success Add New User<a href="" class="close">&times;</a></div>');
			redirect('success');
		}
	}
	public function edit()
	{
		$id = $this->uri->segment(4,0);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullName', 'Full Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('zipcode', 'Postcode', 'required|is_natural');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|is_natural');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE)
		{
			$data['user'] = $this->User_Model->getSingle($id);
			$data['group'] = $this->Group_Model->getAll();
			$this->load->view('admin/user/edit_page' , $data);
		}
		else
		{
			$this->User_Model->update($id);
			$this->session->set_flashdata('message', '<div class="alert-box success four columns">Success Edit User Information<a href="" class="close">&times;</a></div>');
			redirect('admin/user');
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4,0);
		$this->User_Model->delete($id);
		redirect('admin/user');
	}
}