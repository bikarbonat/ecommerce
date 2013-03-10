<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Group extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
		
	}
	public function index()
	{
		$data['group'] = $this->Group_Model->getAll();
		$this->load->view('admin/group/group_page' , $data);
	}
	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('groupName', 'Name', 'required');
		$this->form_validation->set_rules('groupPermission', 'Permission', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/group/add_page');
		}
		else
		{	
			$this->Group_Model->add();
			$this->session->set_flashdata('message', '<div class="alert-box success four columns">Success Add New User Group<a href="" class="close">&times;</a></div>');
			redirect('admin/group');
		}
	}
	public function edit()
	{
		$id = $this->uri->segment(4 , 0);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('groupName', 'Name', 'required');
		$this->form_validation->set_rules('groupPermission', 'Permission', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['group'] = $this->Group_Model->getSingle($id);
			$this->load->view('admin/group/edit_page' , $data);
		}
		else
		{	
			$this->Group_Model->update($id);
			$this->session->set_flashdata('message', '<div class="alert-box success four columns">Success Edit User Group<a href="" class="close">&times;</a></div>');
			redirect('admin/group');
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4 , 0);
		$this->Group_Model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert-box alert four columns">Success Delete User Group<a href="" class="close">&times;</a></div>');
		redirect('admin/group');
	}
}