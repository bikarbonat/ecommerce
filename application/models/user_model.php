<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class User_Model extends CI_Model
{
	public function getGroup($id)
	{
		$this->db->where('user_id',$id);
		$this->db->select('group_id');
		$query = $this->db->get('user');
		
		foreach($query->result() as $row)
		{
			return $row->group_id;
		}
	}
	public function getSingle($id)
	{
		$this->db->where('user_id' , $id);
		$query = $this->db->get('user');
		return $query->result();
	}
	public function getAll()
	{
		$query = $this->db->get('user');
		return $query->result();
	}
	public function add()
	{
		//$default = $this->Setting_Model->getDefaultRegistration();
		$code = $this->get_random();
		$data = array(
		'user_name' => $this->input->post('fullName'),
		'user_email' => $this->input->post('email'),
		'user_password' => $this->input->post('password'),
		//'group_id' => $default,
		'user_address' => $this->input->post('address'),
		'user_zip_code' => $this->input->post('zipcode'),
		'user_city' => $this->input->post('city'),
		'user_state' => $this->input->post('state'),
		'user_phone' => $this->input->post('phone'),
		'user_date_added' => date("Y-m-d H:i:s"),
		'user_code' => $code,
		);
		$this->db->insert('user' , $data);
	}
	public function update($id)
	{
		$this->db->where('user_id' , $id);
		
		if($this->input->post('fullName') != 0)
		{
			$data['user_name'] = $this->input->post('fullName');
		}
		if($this->input->post('email') != 0)
		{
			$data['user_email'] = $this->input->post('email');
		}
		if($this->input->post('password') != 0)
		{
			$data['user_password'] = $this->input->post('password');
		}
		if($this->input->post('address') != 0)
		{
			$data['user_address'] = $this->input->post('address');
		}
		if($this->input->post('zipcode') != 0)
		{
			$data['user_zip_code'] = $this->input->post('zipcode');
		}
		if($this->input->post('city') != 0)
		{
			$data['user_city'] = $this->input->post('city');
		}
		if($this->input->post('state') != 0)
		{
			$data['user_state'] = $this->input->post('state');
		}
		if($this->input->post('phone') != 0)
		{
			$data['user_phone'] = $this->input->post('phone');
		}
		if($this->input->post('group') != 0)
		{
			$data['group_id'] = $this->input->post('group');
		}
		$this->db->update('user' , $data);
	}
	public function delete($id)
	{
		$this->db->where('user_id' , $id);
		$this->db->delete('user');
	}
	public function activate($code , $email)
	{
		$this->db->where('user_code' , $code);
		$query = $this->db->get('user');
		foreach($query->result() as $row)
		{
			if(md5($row->user_email) == $email)
			{
				//success
				$data['user_status'] = 1;
				$this->db->where('user_id' , $row->user_id);
				$this->db->update('user' , $data);
				return true;
			}
			else
				return false;
		}
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