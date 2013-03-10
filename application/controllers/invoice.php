<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Invoice extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
	}
	public function index()
	{
		$order_id = $this->uri->segment(2,0);
		$data['order'] = $this->Order_Model->getOrder($order_id);
		$data['product'] = $this->Order_Model->getProduct($order_id);
		$this->load->view('customer/invoice_page',$data);
	}
}