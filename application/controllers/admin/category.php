<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
	}
	public function index()
	{
		$data['category'] = $this->Category_Model->getAll();
		$this->load->view('admin/category/category_page' , $data);
	}
	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('categoryName', 'Name', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['category'] = $this->Category_Model->getAll();
			$this->load->view('admin/category/add_page' , $data);
		}
		else
		{
			$this->Category_Model->add();
			redirect('admin/category');
		}
	}
	public function edit()
	{
		$id = $this->uri->segment(4,0);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('categoryName', 'Name', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['category_all'] = $this->Category_Model->getAll();
			$data['category'] = $this->Category_Model->getSingle($id);
			$this->load->view('admin/category/edit_page',$data);
		}
		else
		{
			$this->Category_Model->edit($id);
			redirect('admin/category');
		}
	}
}