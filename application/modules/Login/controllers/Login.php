<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


 function __construct()
	{
		parent::__construct();
		$this->controller = get_class($this);
		// $this->load->model('Coremodel', 'cm');
	}

	public function index()
	{

		
		$this->load->view('LoginView');
	}
}
