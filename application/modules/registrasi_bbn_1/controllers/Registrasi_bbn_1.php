<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi_bbn_1 extends AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->controller = get_class($this);
	}

	public function index()
	{
		$data = array();
		$data['title'] = "Registrasi BBN 1";
		$content = $this->load->view($this->controller . "View", $data, true);
		$this->set_title($data['title']);
		$this->set_subtitle('BBN 1');
		$this->set_content($content);
		$this->render();
	}

	public function baru()
	{
		$data = array();
		$data['title'] = "List Data BPKB";
		$content = $this->load->view($this->controller . "ListData", $data, true);
		$this->set_title($data['title']);
		$this->set_subtitle('BBN 1');
		$this->set_content($content);
		$this->render();
	}
}
