<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Order extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
	}
	public function index()
	{
		$data['order'] = $this->Order_Model->getAll();
		$data['pending'] = $this->Order_Model->getAll(1);
		$data['processing'] = $this->Order_Model->getAll(2);
		$data['delivering'] = $this->Order_Model->getAll(3);
		$data['delivered'] = $this->Order_Model->getAll(4);
		$data['cancelled'] = $this->Order_Model->getAll(5);
		$this->load->view('admin/order/order_page',$data);
	}
	public function edit()
	{
	
	}
	public function view()
	{
		$order_id = $this->uri->segment(4,0);
		$data['order'] = $this->Order_Model->getOrder($order_id);
		$data['product'] = $this->Order_Model->getProduct($order_id);
		$this->load->view('admin/order/view_page',$data);
	}
	public function update()
	{
		foreach($this->input->post('id') as $row)
		{
			$id[] = $row;
		}
		$i = 0;
		foreach($this->input->post('status') as $row)
		{
			$this->Order_Model->update($id[$i] , $row);
			$i++;
		}
		redirect('admin/order');
	}
}