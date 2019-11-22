<?php
class AdminController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if ($this->session->has_userdata('pengguna_login')) {
			$this->userdata = $this->session->userdata('pengguna_login');

			$this->db->where('KODE', $this->userdata['vl_level_akses']);
			$res = $this->db->get('M_GROUP_SUB_MENU_APLIKASI')->result_array();
			
			$menu = array();
			foreach ($res as $key => $value) {
				
				$this->db->select('NAMA_GROUP')->from('M_MENU_APLIKASI_BPKB');
				$this->db->where('KODE_GROUP', $value['KODE_GROUP']);
				$menu[$value['KODE_GROUP']] = $this->db->get()->row_array();

				$this->db->select('NAMA_SUB_GROUP, PATH')->from('M_MENU_APLIKASI_BPKB');
				$this->db->where('KODE_GROUP', $value['KODE_GROUP']);
				$menu[$value['KODE_GROUP']]['submenu'] = $this->db->get()->result_array();
			}

			$this->menu = $menu;
			// show_array($this->userdata);
			// exit();
		}else{
			redirect('Login');
		}
		

	}

	function set_content($str)
	{
		$this->content['content'] = $str;
	}

	function set_title($str)
	{
		$this->content['title'] = $str;
	}

	function set_subtitle($str)
	{
		$this->content['subtitle'] = $str;
	}

	function render()
	{
		$this->load->view("NewAdminTemplate", $this->content);
	}
}
