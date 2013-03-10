<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Email_Model extends CI_Model
{
	public function confirmRegistration($id)
	{
		$sender_email = "order@stylobag.com";
		$sender_name = "Stylo Men And Women Bag";
		$subject = "Confirm Registration Stylobag";
		$user = $this->User_Model->getSingle($id);
		$url = base_url();
		foreach($user as $row)
		{
			$message = $url."activation/$row->user_code/".md5($row->user_email);
			$email = $row->user_email;
		}	
		$this->sentEmail($sender_email , $sender_name , $email , $subject , $message);
	}
	public function resetPassword($email , $password)
	{
		$sender_email = "viralapp.my@gmail.com";
		$sender_name = "Viral Application System";
		$subject = "Maklumat Pendaftaran";
		$message = "<p>Berikut adalah maklumat akaun anda</p>
					<p>Email : $email </p>
					<p>Kata Laluan : $password</p>
					<p>Log masuk di http://viralapp.my/login</p>
					";
		$this->sentEmail($sender_email , $sender_name , $email , $subject , $message);
	}
	public function sendPassword($id)
	{
		//Get password
		$this->db->where('member_id',$id);
		$query = $this->db->get('member');
		$this->load->model('Activate_Model');
		$key = $this->Activate_Model->add(72);
		foreach($query->result() as $row)
		{
			$password = $row->member_password;
			$email = $row->member_email;
		}
		$sender_email = "viralapp.my@gmail.com";
		$sender_name = "Viral Application System";
		$subject = "Maklumat Pendaftaran";
		$message = "<p>Terima kasih kerana mendaftar di Sistem Aplikasi Viral</p>
					<p>Log masuk ke dalam sistem dengan maklumat berikut :</p>
					<p>Email : $email </p>
					<p>Kata Laluan : $password</p>
					<p>Log masuk di <a href='http://viralapp.my/login'>http://viralapp.my/login</a></p>
					<p>Sila tukar kata laluan anda di <a href='https://viralapp.my/profile/password'>https://viralapp.my/profile/password</a>
					<p>Ikuti tutorial untuk membuat aplikasi anda sendiri di <a href='http://viralapp.my/tutorial'>http://viralapp.my/tutorial</a>
					<p>
					Anda boleh gunakan Activation Key ini $key untuk mengaktifkan aplikasi yang telah anda buat.Activation Key ini hanya boleh digunakan sekali , dan aplikasi anda akan tamat tempoh selepas 72 jam.</p>";
		$this->sentEmail($sender_email , $sender_name , $email , $subject , $message);
	}
	public function sendKey($name , $email , $number , $time)
	{
		$this->load->model("Activate_Model");
		$message = "<p>Assalamualaikum $name</p>
					<p>Terima kasih kerana telah membuat bayaran untuk tempahan bagi Activation Key anda.</p>
					<p>Berikut merupakan Activation Key anda :</p>";
		$num = 1;
		for($x = 0;$x < $number;$x++)
		{
			$message .= $num.". ".$this->Activate_Model->add($time)."</br>";
			$num++;
		}
		$message .= "<p>Tempoh masa bagi setiap Activation Key anda ialah $time jam</p>";
		$sender_email = "viralapp.my@gmail.com";
		$sender_name = "Viral Application System";
		$subject = "Activation Key Viralapp.my";
		$this->sentEmail($sender_email , $sender_name , $email , $subject , $message);
	}
	public function sendInvoice($order_id)
	{
		$this->load->model('Order_Model');
		$order = $this->Order_Model->getSingle($order_id);
		foreach($order as $row)
		{
			$id = $row->order_id;
			$email = $row->member_email;
			$num_key = $row->order_num_key;
			$time_limit = $row->order_time_limit;
			$date_time = $row->order_date_time;
		}
		if($num_key < 20)
		{
			if($time_limit == 721)
			{
				$payment = 15 * $num_key;
			}
			else if($time_limit == 4321)
			{
				$payment = 70 * $num_key;
			}
			else if($time_limit == 8641)
			{
				$payment = 120 * $num_key;
			}
		}
		$message = "<p>Assalamulaikum</p>
					<p>Tempahan anda telah diterima pada $date_time</p>
					<p>Berikut adalah butiran tempahan :</p>
					<p>
					ID Tempahan : $id<br/>
					Jumlah Activation Key : $num_key<br/>
					Had Masa bagi setiap Activation Key : $time_limit<br/>
					Jumlah bayaran yang perlu dibuat ialah RM $payment
					</p>
					<p>Sila buat bayaran ke :</p>
					<p>Mohd Farhan Firdaus Jamil | Maybank | 155015064953</p>
					<p>Selepas membuat pembayaran , sila email(viralapp.my@gmail.com) kepada kami bukti pembayaran anda.<br/>
					Pastikan anda menggunakan ID Tempahan anda sebagai Subject email tersebut<br/>
					Sekadar peringatan , ID Tempahan anda ialah $id . Terima kasih</p>";
		$sender_email = "viralapp.my@gmail.com";
		$sender_name = "Viral Application System";
		$subject = "Tempahan Activation Key di Sistem Aplikasi Viral";
		$this->sentEmail($sender_email , $sender_name , $email , $subject , $message);
	}
	public function replaceStr($member_id , $message)
	{
		$upline_id = $this->Relationship_Model->getUplineId($member_id);
		$member_name = $this->Member_Model->getName($member_id);
		$member_email = $this->Member_Model->getEmail($member_id);
		$member_phone = $this->Member_Model->getPhone($member_id);
		$member_pass = $this->Member_Model->getPassword($member_id);
		
		$upline_name = $this->Member_Model->getName($upline_id);
		$upline_email = $this->Member_Model->getEmail($upline_id);
		$upline_phone = $this->Member_Model->getPhone($upline_id);
		$upline_pass = $this->Member_Model->getPassword($upline_id);
			
		$message = str_replace('$member_id', $member_id , $message);
		$message = str_replace('$member_name', $member_name , $message);
		$message = str_replace('$member_email', $member_email , $message);
		$message = str_replace('$member_phone', $member_phone , $message);
		$message = str_replace('$member_pass', $member_pass , $message);
		
		$message = str_replace('$upline_name' , $upline_name , $message);
		$message = str_replace('$upline_email' , $upline_email , $message);
		$message = str_replace('$upline_phone' , $upline_phone , $message);
		$message = str_replace('$upline_pass', $upline_pass , $message);
		
		return $message;
	}
	public function sentEmail($sender_email , $sender_name , $email , $subject , $message)
	{
		$config = Array(
			'protocol' => 'smtp',
			  'smtp_host' => 'smtp.mandrillapp.com',
			  'smtp_port' => 587,
			  'smtp_user' => 'paanblogger@gmail.com', // change it to yours
			  'smtp_pass' => '7fb33049-7ed1-493d-a8de-750180ef5578', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
		);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->clear();
		$data = array('some_var_for_view'=>'Some Value for View');

		$this->email->from($sender_email,$sender_name);
		$this->email->reply_to($sender_email, $sender_name);
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);
	 
		if(!($this->email->send()))
		{
				show_error($this->email->print_debugger());
		}
		else
		{
		}
	}
}