<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {
	public function index()
	{
		$category = $this->uri->segment(2,0);
		$id = $this->Category_Model->getId($category);
		$data['sub'] = $this->Category_Model->getSubcategory($id);
		$data['featured'] = $this->Product_Model->getFeatured();
		$data['product'] = $this->Product_Model->getProductByCategory($id);
		$data['category'] = $category;
		$this->load->view('category_page' , $data);
	}
}