<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyerahan_bpkb_bbn_1 extends AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->controller = get_class($this);
	}

	public function index()
	{
		$data = array();
		$data['title'] = "Penyerahan BPKB BBN 1";
		$content = $this->load->view($this->controller . "View", $data, true);
		$this->set_title($data['title']);
		$this->set_subtitle('BBN 1');
		$this->set_content($content);
		$this->render();
	}
}
