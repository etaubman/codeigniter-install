<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->register();
		$this->load->view('welcome_message');
	}
	
	public function register()
	{
		$u = new User();
		$u->username = 'etaubman';
		$u->first_name = 'Ethan';
		$u->last_name = 'Taubman';
		$u->save();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */