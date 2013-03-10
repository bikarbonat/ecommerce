<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Confirm extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->login_lib->check();
	}
	public function index()
	{
		$id = $this->Order_Model->add();
		
		foreach($this->cart->contents() as $row)
		{
			$contents = serialize($this->cart->product_options($row['rowid']));
			$this->Order_Model->add_product($id , $row['id'] , $row['qty'] , $row['price'] ,$row['subtotal'],$contents );
		}
		$this->cart->destroy();
		redirect('success');
	}
}