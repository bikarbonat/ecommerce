<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('upload');
	}
		function filemanipulation()
        {
			$extension = $_POST['type'];
			$filename = $_POST['name'];
            // you can insert the result into the database if you want.
            if($this->is_image($extension)) 
            {
                $config['image_library']  = 'gd2';
                $config['source_image']   = './uploads/'.$filename;
                $config['new_image']      = './uploads/thumbs/';
                $config['create_thumb']   = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['thumb_marker']   = '';
                $config['width']   = 100;
                $config['height']   = 100;
 
                $this->load->library('image_lib', $config); 
 
                $this->image_lib->resize();
                echo 'image';
            }
            else echo 'file';
        }
         
        private function is_image($imagetype)
        {
            $ext = array(
                '.jpg',
                '.gif',
                '.png',
                '.bmp'
            );
            if(in_array($imagetype, $ext)) return true;
            else return false;
        }
}