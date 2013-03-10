<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
	}
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$data['order'] = $this->Order_Model->getAllByUser($user_id);
		$this->load->view('customer/order/order_page' , $data);
	}
	public function edit()
	{
		$data = '';
		$this->load->view('customer/order/edit_page' , $data);
	}
	public function cancel()
	{
		$order_number = $this->uri->segment(3,0);
		$this->Order_Model->cancel($order_number);
		redirect('order');
	}
}