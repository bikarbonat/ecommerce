<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function index()
	{
		$this->load->view('cart_page');
	}
	public function add()
	{
		$slug = $this->uri->segment(3,0);
		$product = $this->Product_Model->getSingle(0 , $slug);
		
		foreach($product as $row)
		{
			if($row->product_saleprice > 0)
				$price = $row->product_saleprice;
			else
				$price = $row->product_price;
			$data = array(
               'id'      => $row->product_id,
               'qty'     => 1,
               'price'   => $price,
               'name'    => $row->product_name,
			   'options' => array('Name' => $row->product_name,'Code' => $row->product_code , 'Weight' => $row->product_weight)
            );
		}

		$this->cart->insert($data);
		$this->session->set_flashdata('message', "<div class='alert alert-success'>Success Add Product To Cart</div>");
		redirect('cart');
	}
	public function remove()
	{
		$slug = $this->uri->segment(3,0);
		$data = array(
               'rowid' => $slug,
               'qty'   => 0
            );

		$this->cart->update($data);
		$this->session->set_flashdata('message', "<div class='alert alert-success'>Success Remove Product From Cart</div>");
		redirect('cart');
	}
	public function update()
	{
		$element = count($this->input->post('id'));
		foreach($this->input->post('id') as $row)
		{
			$id[] = $row;
		}
		$i = 0;
		foreach($this->input->post('quantity') as $row)
		{
			$data = array(
				   'rowid' => $id[$i],
				   'qty'   => $row
				);

			$this->cart->update($data);
			$i++;
		}
		$this->session->set_flashdata('message', "<div class='alert alert-success'>Success Update Cart</div>");
		redirect('cart');
	}
}