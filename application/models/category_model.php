<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Category_Model extends CI_Model
{
	public function getId($slug)
	{
		$this->db->where('category_slug',$slug);
		$this->db->select('category_id');
		$query = $this->db->get('category');
		
		foreach($query->result() as $row)
		{
			return $row->category_id;
		}
	}
	public function getName($id)
	{
		$this->db->where('category_id',$id);
		$this->db->select('category_name');
		$query = $this->db->get('category');
		
		foreach($query->result() as $row)
		{
			return $row->category_name;
		}
	}
	public function getSingle($id)
	{
		$this->db->where('category_id' , $id);
		$query = $this->db->get('category');
		return $query->result();
	}
	public function getSubcategory($id)
	{
		$this->db->where('category_parent_id' , $id);
		$query = $this->db->get('category');
		return $query->result();
	}
	public function getAll($parent = 0)
	{
		$this->db->where('category_parent_id' , $parent);
		$query = $this->db->get('category');
		return $query->result();
	}
	public function add()
	{
		$data = array(
		'category_name' => $this->input->post('categoryName'),
		'category_slug' => url_title($this->input->post('categorySlug')),
		'category_sequence' => $this->input->post('categorySequence'),
		'category_description' => $this->input->post('categoryDescription'),
		'category_parent_id' => $this->input->post('categoryParent'),
		);
		
		if($this->input->post('categorySlug') == "")
		{
			$data['category_slug'] = url_title($this->input->post('categoryName'));
		}
		$this->db->insert('category' , $data);
	}
	public function edit($id)
	{
		$this->db->where('category_id' , $id);
		$data = array(
		'category_name' => $this->input->post('categoryName'),
		'category_slug' => url_title($this->input->post('categorySlug')),
		'category_sequence' => $this->input->post('categorySequence'),
		'category_description' => $this->input->post('categoryDescription'),
		'category_parent_id' => $this->input->post('categoryParent'),
		);
		
		if($this->input->post('categorySlug') == "")
		{
			$data['category_slug'] = url_title($this->input->post('categoryName'));
		}
		$this->db->update('category' , $data);
	}
}