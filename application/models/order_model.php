<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Order_Model extends CI_Model
{
	public function add()
	{
		$order = $this->get_random();
		$data = array(
		'order_number' => $order,
		'user_id' => $this->session->userdata('user_id'),
		'order_date' => date("Y-m-d H:i:s"),
		'order_shipping' => $this->input->post('shipping'),
		'order_total' => $this->input->post('total'),
		'order_name' => $this->input->post('fullName'),
		'order_address' => $this->input->post('address'),
		'order_zip_code' => $this->input->post('zipcode'),
		'order_city' => $this->input->post('city'),
		'order_state' => $this->input->post('state'),
		'order_phone' => $this->input->post('phone'),
		'order_status' => 1
		);
		
		$this->db->insert('order' , $data);
		return $order;
	}
	public function add_product($order_id , $id , $qty , $price , $total , $contents)
	{
		$data = array(
		'order_id' => $order_id,
		'product_id' => $id,
		'order_product_quantity' => $qty,
		'order_product_price' => $price,
		'order_product_subtotal' => $total,
		'order_contents' => $contents,
		);
		
		$this->db->insert('order_product' , $data);
	}
	public function getAll($status = false)
	{
		if($status)
		{
			$this->db->where('order.order_status' , $status);
		}
		$this->db->select('*');
		$this->db->order_by("order.order_date", "desc"); 
		$this->db->from('order');
		$this->db->join('user', 'user.user_id = order.user_id');
		$query = $this->db->get();
		return $query->result();
	}
	public function getAllByUser($id)
	{
		$this->db->where('user_id' , $id);
		$query = $this->db->get('order');
		return $query->result();
	}
	public function getOrder($id)
	{
		$this->db->select('*');
		$this->db->where('order.order_number' , $id);
		$this->db->from('order');
		$this->db->join('user', 'user.user_id = order.user_id');

		$query = $this->db->get();
		return $query->result();
	}
	public function getProduct($id)
	{
		$this->db->where('order_id' , $id);
		$query = $this->db->get('order_product');
		return $query->result();
	}
	public function update($id , $status)
	{
		$this->db->where('order_id' , $id);
		$data['order_status'] = $status;
		
		$this->db->update('order' , $data);
		
	}
	public function cancel($id)
	{
		$this->db->where('order_number' , $id);
		$data['order_status'] = -1;
		$this->db->update('order' , $data);
	}
	function get_random($chars_min=8, $chars_max=8, $use_upper_case=false, $include_numbers=false, $include_special_chars=false)
    {
        $length = rand($chars_min, $chars_max);
        //$selection = 'aeuoyibcdfghjklmnpqrstvwxz';
        $selection = '1234567890';
        if($include_numbers) {
            $selection .= "1234567890";
        }
        if($include_special_chars) {
            $selection .= "!@\"#$%&[]{}?|";
        }
                                
        $password = "";
        for($i=0; $i<$length; $i++) {
            $current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
            $password .=  $current_letter;
        }                
        return $password;
    }
}