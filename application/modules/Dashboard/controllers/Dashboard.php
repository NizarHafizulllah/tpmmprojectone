<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->controller = get_class($this);
	}

	public function index()
	{
		// show_array($this->u`serdata);
		$data = array();
		$data['total'] = round(disk_total_space("C://") / 1024 / 1024 / 1024);
        $data['df'] = round(disk_free_space("C://") / 1024 / 1024 / 1024);
        $data['used'] = $data['total']-$data['df'];
        $data['persen'] = ($data['used']/$data['total'])*100;
        // $data['persen'] = 92;
        if ($data['persen']<=70) {
        	$data['class'] = '';
        }else if ($data['persen']>=71&&$data['persen']<=80) {
        	$data['class'] = 'bg-warning';
        }else{
        	$data['class'] = 'bg-danger';
        }
		
		$data['title'] = "Dashboard";
		$content = $this->load->view($this->controller . "View", $data, true);
		$this->set_title($data['title']);
		$this->set_subtitle('subtitle');
		$this->set_content($content);
		$this->render();
	}
}
