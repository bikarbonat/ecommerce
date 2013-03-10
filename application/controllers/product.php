<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
	public function index()
	{
		$product_slug = $this->uri->segment(2,0);
		$data['product'] = $this->Product_Model->getSingle(0,$product_slug);
		$this->load->view('product_page' , $data);
	}
}