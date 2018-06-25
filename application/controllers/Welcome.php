<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('user');
		$this->load->helper('form');
		$this->load->helper('url');
    }
	
	public function index()
	{
		if(isset($this->session->account_type))
		{
			if($this->session->account_type == "1")
			{
				redirect(base_url()."welcome/user_home");
			}
			else if($this->session->account_type == "0" || $this->session->account_type == "2" || $this->session->account_type == "3")
			{
				redirect(base_url()."welcome/admin_home");
			}	
		}
		else
		{
			$this->load->view('Login.html');
		}
	}
	
	public function user_registration()
	{
		
		$data['first_name'] = $_POST['first_name'];
		$data['last_name'] = $_POST['last_name'];
		$data['phone'] = $_POST['phone'];
		$data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);
		
		
		
	
	
	}
}
