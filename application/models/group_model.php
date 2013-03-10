<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Group_Model extends CI_Model
{
	public function getName($id)
	{
		$this->db->where('group_id',$id);
		$this->db->select('group_name');
		$query = $this->db->get('group');
		
		foreach($query->result() as $row)
		{
			return $row->group_name;
		}
	}
	public function getPermission($id)
	{
		$this->db->where('group_id',$id);
		$this->db->select('group_permission');
		$query = $this->db->get('group');
		
		foreach($query->result() as $row)
		{
			return $row->group_permission;
		}
	}
	public function getSingle($id)
	{
		$this->db->where('group_id' , $id);
		$query = $this->db->get('group');
		return $query->result();
	}
	public function getAll()
	{
		$query = $this->db->get('group');
		return $query->result();
	}
	public function add()
	{
		$data = array(
		'group_name' => $this->input->post('groupName'),
		'group_permission' => $this->input->post('groupPermission'),
		'group_discount' => $this->input->post('groupDiscount'),
		);
		
		$this->db->insert('group' , $data);
	}
	public function update($id)
	{
		$this->db->where('group_id' , $id);
		$data = array(
		'group_name' => $this->input->post('groupName'),
		'group_permission' => $this->input->post('groupPermission'),
		'group_discount' => $this->input->post('groupDiscount'),
		);
		
		$this->db->update('group' , $data);
	}
	public function delete($id)
	{
		$this->db->where('group_id' , $id);
		$this->db->delete('group');
	}
}