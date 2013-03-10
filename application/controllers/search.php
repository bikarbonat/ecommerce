<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	public function index()
	{
		$key = $this->input->get('s');
		$this->db->like('product_name', $key);
		$this->db->or_like('product_code', $key);
		$query = $this->db->get('product');
		$data['product'] = $query->result();
		$data['featured'] = $this->Product_Model->getFeatured();
		$this->load->view('search_page' , $data);
	}
}