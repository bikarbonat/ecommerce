<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
	}
	public function index()
	{
		/*
			Situation : user go to login page , when user is already login
			Solution  : user will be redirect to elite controller
		*/
		if($this->login_lib->is_logged_in())
		{
			redirect('dashboard');
		}
		else
		{
			$this->load->view('login_page');
		}
	}

	public function validate_user()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			
			$this->session->set_flashdata('message', '<div class="alert alert-error">Please Login ! </div>');
			redirect("login");
		}
		else
		{
			// Get username / email and password
			$login_id = $_POST['email'];
			$password = $_POST['password'];
			// If user login success
			if($this->login_lib->user_login($login_id , $password))
			{
				// Check if session requested page is set
				$requested_page = $this->session->userdata('requested_page');

				if(isset($requested_page) && $requested_page != "")
				{
					// Redirect to requested page
					redirect($requested_page);
				}
				else
				{
					switch($this->login_lib->user_level())
					{
						case 1:
						case 2:
							redirect('admin/dashboard');
						break;
						case 3:
							redirect('home');
						break;
						default:
							redirect('home');
						break;
					}
				}
			}
			// If user login not success
			else
			{
				redirect('login');
			}
		}
	}
}