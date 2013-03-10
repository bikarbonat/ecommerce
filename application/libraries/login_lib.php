<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_Lib
{
	var $CI;
	var $user_table = 'user';
	var $user_field = 'user_email';
	
	// To login the user
	function user_login($user , $password)
	{
		//Put here for PHP 4 users
		$this->CI =& get_instance();
		// check from specified table
		$this->CI->db->where($this->user_field, $user); 
		$query = $this->CI->db->get($this->user_table);
			
		// if return value is not 0
		if($query->num_rows() > 0)
		{
			$row = $query->row_array();
			
			// Log in success
			if($row['user_password'] == $password)
			{
				// set session data
				$newdata = array(
				'logged_in' => true, 
				'user_level' => $row['group_id'],
				'user_id' => $row['user_id']);
				$data['user_last_login'] = date("Y-m-d H:i:s");
				$this->CI->db->where('user_id', $row['user_id']);
				$this->CI->db->update('user', $data); 
				$this->CI->session->set_userdata($newdata);
				return true;
			}
			// if user enter wrong password
			else 
			{
				$this->CI->session->set_flashdata('message', '<div class="alert-box alert four columns">Wrong Password<a href="" class="close">&times;</a></div>');
				return false;
			}
		}
		// if user enter wrong username / email
		else 
		{
			$this->CI->session->set_flashdata('message', '<div class="alert-box alert four columns">Wrong Email<a href="" class="close">&times;</a></div>');
			return false;
		}
	}
	
	// To check if user login or not
	// Return true / false
	function is_logged_in()
	{
		//Put here for PHP 4 users
		$this->CI =& get_instance();
		$login = $this->CI->session->userdata('logged_in');
		if(isset($login) && $login)
		{
			return true;
		}
		else
			return false;
	}
	
	// To check user level
	// return user level
	function user_level()
	{
		//Put here for PHP 4 users
		$this->CI =& get_instance();
		$id = $this->CI->session->userdata('user_id');
		$group = $this->CI->User_Model->getGroup($id);
		$permission = $this->CI->Group_Model->getPermission($group);
		if(isset($permission) && $permission)
		{
			return $permission;
		}
		else
		{
			return false;
		}
	}
	function check()
	{
		$this->CI =& get_instance();
		if(!$this->is_logged_in())
		{
			// Save request_page session
			$newdata = array('requested_page' => current_url());
			$this->CI->session->set_userdata($newdata);
			// Redirect to login page
			redirect('login');
		}
	}
}