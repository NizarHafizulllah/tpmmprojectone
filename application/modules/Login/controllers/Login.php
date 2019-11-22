<?php

class Login extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->controller = get_class($this);
		$this->load->model($this->controller."Model","dm");
	}

	public function index()
	{		

		$this->load->view($this->controller.'View');
	}


    function logout(){
        $this->session->unset_userdata('pengguna_login');
        redirect(site_url('Login'));
    }

	function cek_login(){
		$post = $this->input->post();
		$return = $this->dm->cek_login($post);

		if ($return[0]=='00') {
			$data_session = explode('|', $return[1]);
			
			$new_data = $this->mapping_res($data_session);
			$this->session->set_userdata('pengguna_login', $new_data);

			$arr = array('error' => false, 'message' => 'Login Berhasil', 'url' => site_url('dashboard') );
		}else{
			$arr = array('error' => true, 'message' => $return[1]);
		}
		// exit();
		echo json_encode($arr);
	}

	function mapping_res($arrs){

		$maps = [
            'vl_op_id',
            'vl_op_login',
            'vl_op_authhash',
            'vl_op_nama',
            'vl_op_initial',
            'vl_nrp',
            'vl_op_lastlogindate',
            'vl_op_pangkat',
            'vl_wilayah_id',
            'vl_polda_id',
            'vl_polres_id',
            'vl_level_akses',
            'vl_blocked',
            'vl_tgl',
            'vl_awalan_tnkb',
            'vl_seri_bpkb',
            'vl_kode_wil_bpkb',
            'vl_akhiran_noreg',
            'vl_tempat_keluar_bpkb',
            'vl_bpkb_dikeluarkan_oleh',
            'vl_pnbpr2',
            'vl_pnbpr4',
            'vl_toleransi_koordinat',
            'vl_access',
            'vl_lama_rekom',
            'vl_lama_rekom_sementara',
            'vl_prop_id',
            'vl_kab_id',
            'vl_kd_bank',
            'vl_is_data_from_apm',
            'vl_snhh'
        ];
        $data_baru = array();
        foreach ($arrs as $key => $value) {
        	$data_baru[$maps[$key]] = $value;
        }

        return $data_baru;
        // print_r($data_baru);
	}
}
