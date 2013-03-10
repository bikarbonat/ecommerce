<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Image_Model extends CI_Model
{
	public function insert($id , $name)
	{
		$data = array(
		'product_id' => $id,
		'image_name' => $name,
		);
		
		$this->db->insert('image' , $data);
	}
	public function resize($name , $width , $height)
	{
		$config['image_library'] = 'gd2';
		$config['source_image']	= 'images/'.$name;
		$config['new_image'] = 'images/thumb/'.$name;
		$config['maintain_ratio'] = TRUE;
		$config['width']	 = $width;
		$config['height']	 = $height;
		$config['master_dim']	 = 'height';

		$this->load->library('image_lib', $config); 

		$this->image_lib->resize();
		$this->image_lib->clear();
	}
}