<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
	}
	public function index()
	{
		$data['menu'] = $this->load->view('admin/main_menu','',TRUE);
		$data['product'] = $this->Product_Model->getAll();
		$this->load->view('admin/product/product_page' , $data);
	}
	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('productName', 'Name', 'required');
		$this->form_validation->set_rules('productCode', 'Code', '');
		$this->form_validation->set_rules('productSlug', 'Url', '');
		$this->form_validation->set_rules('productDescription', 'Url', '');
		$this->form_validation->set_rules('productPrice', 'Normal Price', 'required|numeric');
		$this->form_validation->set_rules('productSaleprice', 'Sale Price', 'numeric');
		$this->form_validation->set_rules('productQuantity', 'Quantity', 'integer');
		$this->form_validation->set_rules('productWeight', 'Weight', 'numeric');
		if ($this->form_validation->run() == FALSE)
		{
			$data['category'] = $this->Category_Model->getAll();
			$this->load->view('admin/product/add_page',$data);
		}
		else
		{
			$this->Product_Model->add();
			$id = $this->db->insert_id();
			$this->load->library('upload');
			$image1 = "";
			// Image1
			if (!empty($_FILES['files']['name']))
			{
				$this->load->library('upload');
				//Configure upload.			
				$config['upload_path'] = 'images/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '500';
				$config['encrypt_name'] = TRUE;

				// Initialize config for File 1
				$this->upload->initialize($config);

				//Perform upload.
				if($this->upload->do_multi_upload("files"))
				{
					foreach($this->upload->get_multi_upload_data() as $row)
					{
						$this->Image_Model->insert($id , $row['file_name']);
						$this->Image_Model->resize($row['file_name'] , 180 , 200);
						$this->image_lib->clear();
					}
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}
			$this->session->set_flashdata('message', '<div class="alert-box success four columns">Success Add Product Information<a href="" class="close">&times;</a></div>');
			//redirect('admin/product');
		}
	}
	public function edit()
	{
		$this->load->helper('file');
		$id = $this->uri->segment(4,0);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('productName', 'Name', 'required');
		$this->form_validation->set_rules('productCode', 'Code', '');
		$this->form_validation->set_rules('productSlug', 'Url', '');
		$this->form_validation->set_rules('productDescription', 'Url', '');
		$this->form_validation->set_rules('productPrice', 'Normal Price', 'required|numeric');
		$this->form_validation->set_rules('productSaleprice', 'Sale Price', 'numeric');
		$this->form_validation->set_rules('productQuantity', 'Quantity', 'integer');
		$this->form_validation->set_rules('productWeight', 'Weight', 'numeric');
		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->Product_Model->getSingle($id);
			$data['category'] = $this->Category_Model->getAll();
			$this->load->view('admin/product/edit_page' , $data);
		}
		else
		{
			$this->load->library('upload');
			$image1 = "";
			// Image1
			if (!empty($_FILES['userfile']['name']))
			{
				// Specify configuration for File 1
				$config['upload_path'] = 'images/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '500';
				$config['encrypt_name'] = TRUE;

				// Initialize config for File 1
				$this->upload->initialize($config);

				// Upload file 1
				if ($this->upload->do_upload('userfile'))
				{
					$data['file1'] = $this->upload->data();
					$image1 = $data['file1']['file_name'];
				}
				else
				{
					echo $this->upload->display_errors();
				}
				$config['image_library'] = 'gd2';
				$config['source_image']	= 'images/'.$image1;
				$config['new_image'] = 'images/thumb/'.$image1;
				$config['maintain_ratio'] = TRUE;
				$config['width']	 = 137;
				$config['height']	 = 160;
				$config['master_dim']	 = 'height';

				$this->load->library('image_lib', $config); 

				$this->image_lib->resize();

			}
			$this->Product_Model->update($id , $image1);
			$this->session->set_flashdata('message', '<div class="alert-box success four columns">Success Edit Product Information<a href="" class="close">&times;</a></div>');
			redirect('admin/product');
		}
	}
	public function update()
	{
		//print_r($this->input->post());
		$i = 0;
		foreach($this->input->post('id') as $row)
		{
			$id[$i] = $row;
			echo $row."<br/>";
			$i++;
		}
		$i = 0;
		foreach($this->input->post('name') as $row)
		{
			$this->db->where('product_id' , $id[$i]);
			$data['product_name'] = $row;
			$this->db->update('product' , $data);
			echo $row."<br/>";
			$i++;
		}
		$data = null;
		$i = 0;
		foreach($this->input->post('price') as $row)
		{
			$this->db->where('product_id' , $id[$i]);
			$data['product_price'] = $row;
			$this->db->update('product' , $data);
			echo $row."<br/>";
			$i++;
		}
		$data = null;
		$i = 0;
		foreach($this->input->post('saleprice') as $row)
		{
			$this->db->where('product_id' , $id[$i]);
			$data['product_saleprice'] = $row;
			$this->db->update('product' , $data);
			echo $row."<br/>";
			$i++;
		}
		redirect('admin/product');
	}
	public function delete()
	{
		$id = $this->uri->segment(4,0);
		$this->Product_Model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert-box alert four columns">Success Delete Product Information<a href="" class="close">&times;</a></div>');
		redirect('admin/product');
	}
}