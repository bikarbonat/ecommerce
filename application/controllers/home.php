<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
	}
	public function index()
	{
		$data['featured'] = $this->Product_Model->getFeatured();
		$data['product'] = $this->Product_Model->getAll();
		$this->load->view('home_page',$data);
	}
}