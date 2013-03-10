<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Product_Model extends CI_Model
{
	public function getImage($id)
	{
		$this->db->where('product_id',$id);
		$this->db->select('product_image');
		$query = $this->db->get('product');
		
		foreach($query->result() as $row)
		{
			return $row->product_image;
		}
	}
	// To get single data
	public function getSingle($id=0 , $slug = "")
	{
		if($id != 0)
			$this->db->where('product.product_id' , $id);
		else
			$this->db->where('product.product_slug' , $slug);
			
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('category', 'category.category_id = product.category_id');
		$query = $this->db->get();
		return $query->result();
	}
	public function getProductByCategory($id)
	{
		$this->db->where('category_id' , $id);
		$query = $this->db->get('product');
		return $query->result();
	}
	public function getFeatured()
	{
		$this->db->limit(5);
		$this->db->where('product_featured' , 1);
		$query = $this->db->get('product');
		return $query->result();
	}
	// To get all data
	public function getAll()
	{
		$query = $this->db->get('product');
		return $query->result();
	}
	public function add()
	{
		$data = array(
		'product_name' => $this->input->post('productName'),
		'product_code' => $this->input->post('productCode'),
		'product_quantity' => $this->input->post('productQuantity'),
		'product_weight' => $this->input->post('productWeight'),
		'product_price' => $this->input->post('productPrice'),
		'product_saleprice' => $this->input->post('productSaleprice'),
		'product_slug' => url_title($this->input->post('productSlug')),
		'product_status' => $this->input->post('productStatus'),
		'product_featured' => $this->input->post('productFeatured'),
		'category_id' => $this->input->post('productCategory'),
		'product_description' => $this->input->post('productDescription'),
		);
		if($this->input->post('productSlug') == "")
		{
			$data['product_slug'] = url_title($this->input->post('productName'));
		}		
		$this->db->insert('product' , $data);
	}
	public function update($id , $image)
	{
		$this->db->where('product_id' , $id);
		$data = array(
		'product_name' => $this->input->post('productName'),
		'product_code' => $this->input->post('productCode'),
		'product_quantity' => $this->input->post('productQuantity'),
		'product_weight' => $this->input->post('productWeight'),
		'product_price' => $this->input->post('productPrice'),
		'product_saleprice' => $this->input->post('productSaleprice'),
		'product_slug' => url_title($this->input->post('productSlug')),
		'product_status' => $this->input->post('productStatus'),
		'product_featured' => $this->input->post('productFeatured'),
		'category_id' => $this->input->post('productCategory'),
		'product_description' => $this->input->post('productDescription'),
		);
		if($this->input->post('productSlug') == "")
		{
			$data['product_slug'] = url_title($this->input->post('productName'));
		}
		if($image != "")
		{
			$data['product_image'] = $image;
		}
		
		$this->db->update('product' , $data);
	}
	public function delete($id)
	{
		$this->db->where('product_id' , $id);
		$this->db->delete('product');
	}
}