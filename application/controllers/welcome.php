<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
	/*
	public $pre_filter = array(
									'authenticate_user' => 'index'
								);

	public $post_filter = array(
									'update_timestamp' => array('register','index')
								);
							
	public function authenticate_user ()
	{
		
	}
	
	public function update_timestampe ()
	{
		
	}
	*/	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function register()
	{
		$u = new User();
		$u->username = 'etaubman';
		$u->first_name = 'Ethan';
		$u->last_name = 'Taubman';
		//$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */