<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Label_material extends AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->controller = get_class($this);
		$this->load->model('Coremodel', 'cm');
		$this->session = $this->session->userdata('pengguna_login');
	}

	public function index()
	{
		$data = array();

		$data['arr_wilayah'] = $this->cm->arr_dropdown2('M_POLRES', 'POLRES_KODE', 'POLRES_NAMA', 'POLRES_NAMA', 'POLDA_ID', $this->session['vl_polda_id']);
		$data['title'] = "Pembuatan Label";
		$content = $this->load->view($this->controller . "View", $data, true);
		$this->set_title($data['title']);
		$this->set_subtitle('PEMBUATAN LABEL');
		$this->set_content($content);
		$this->render();
	}

	function get_data_from_server(){
		$post = $this->input->post();
		


	$this->load->library('form_validation');

	$this->form_validation->set_rules('jenis_penerbitan', 'Jenis Penerbitan', 'required');
  $this->form_validation->set_rules('wilayah_kerja', 'Wilayah Kerja ', 'required');
  
  if ($post['jeniscari']==0) {
  	$this->form_validation->set_rules('CrTanggalAwal', 'Tanggal Awal ', 'required');
  	$this->form_validation->set_rules('CrTanggalAkhir', 'Tanggal Akhir ', 'required');
  }else if($post['jeniscari']==1){
  		$this->form_validation->set_rules('CrNoRekBPKBAwal', 'No Rek BPKB Awal ', 'required');
  		$this->form_validation->set_rules('CrNoRekBPKBAkhir', 'No Rek BPKB Akhir ', 'required');
  }else if($post['jeniscari']==2){
  		$this->form_validation->set_rules('CrNoBPKBAwal', 'No BPKB Awal ', 'required');
  		$this->form_validation->set_rules('CrNoBPKBAkhir', 'No BPKB Akhir ', 'required');
  }

  $this->form_validation->set_message('required', ' %s Harus diisi ');
  $this->form_validation->set_error_delimiters('* ', '<br />');	

   if ($this->form_validation->run() == TRUE){

   	if ($post['jeniscari']==0) {
   		

   		$date1 = str_replace('/', '-', $post['CrTanggalAwal']);
   		$date2 = str_replace('/', '-', $post['CrTanggalAkhir']);
		$post['CrTanggalAwal'] = date("Ymd", strtotime($date1));
		$post['CrTanggalAkhir'] = date("Ymd", strtotime($date2));

   	}


   $v_is_get = $post['jeniscari'];              
   $v_polda_id = $this->session['vl_polda_id'];            
   $v_polres_id = $post['wilayah_kerja'];           
   $v_tgl_proses = $post['CrTanggalAwal'];          
   $v_nreg_awal = $post['CrNoRekBPKBAwal'];           
   $v_nreg_akhir = $post['CrNoRekBPKBAkhir'];          
   $v_no_bpkb_awal = $post['CrNoBPKBAwal'];
   $v_no_bpkb_akhir = $post['CrNoBPKBAkhir']; 
   $v_jns_penerbitan = $post['jenis_penerbitan'];      
   $v_tgl_proses2 = $post['CrTanggalAkhir'];         

	
	    $variables[0] = array("parameter" => "p1", "value" => $v_is_get);
	    $variables[1] = array("parameter" => "p2", "value" => $v_polda_id);
	    $variables[2] = array("parameter" => "p3", "value" => $v_polres_id);
	    $variables[3] = array("parameter" => "p4", "value" => $v_tgl_proses);
	    $variables[4] = array("parameter" => "p5", "value" => $v_nreg_awal);
	    $variables[5] = array("parameter" => "p6", "value" => $v_nreg_akhir);
	    $variables[6] = array("parameter" => "p7", "value" => $v_no_bpkb_awal);
	    $variables[7] = array("parameter" => "p8", "value" => $v_no_bpkb_akhir);
	    $variables[8] = array("parameter" => "p9", "value" => $v_jns_penerbitan);
	    $variables[9] = array("parameter" => "p10", "value" => $v_tgl_proses2);


	    
	  
	    $res =  $this->cm->readCursor("BPKB_GET_LIST_LABEL3(:p1, :p2, :p3, :p4, :p5, :p6, :p7, :p8, :p9, :p10, :refc)", $variables);
	   

	    $arr = array('error' => false, 'data' => $res);
	 }
	 else {
	   		$arr = array("error"=>true,"message"=>validation_errors());
	}
		echo json_encode($arr);
		
	}


	function get_noawal(){
		$post = $this->input->post();

	   $v_polda_id = $this->session['vl_polda_id']; 
	   $v_polres_id = $post['v_wilayah_kerja']; 
	   // $v_polres_id = $this->session['vl_polres_id'];      
	   $v_jns_penerbitan = $post['v_jenis_penerbitan'];

	    $variables[0] = array("parameter" => "p1", "value" => $v_polda_id);
	    $variables[1] = array("parameter" => "p2", "value" => $v_polres_id);
	    $variables[2] = array("parameter" => "p3", "value" => $v_jns_penerbitan);

		$res =  $this->cm->readCursor("BPKB_GET_LAST_NUMBER_LABEL2(:p1, :p2, :p3, :refc)", $variables);

		if (empty($res)) {
			$ret = array('NO_BPKB' => '', 
							'NREG_BPKB' => ''
						);
		}else{
			$ret = $res[0]; 
		}

		echo json_encode($ret);

		
	}


	function simpan_label(){
		$post = $this->input->post();

	$this->load->library('form_validation');
	$this->form_validation->set_rules('v_jenis_penerbitan', 'Jenis Penerbitan', 'required');
  	$this->form_validation->set_rules('v_wilayah_kerja', 'Wilayah Kerja ', 'required');
  	$this->form_validation->set_rules('v_tanggal_dikeluarkan', 'Tgl Dikeluarkan', 'required');
  	$this->form_validation->set_rules('v_jumlah_buku', 'Jumlah Buku', 'required');
  	$this->form_validation->set_rules('v_seri_bpkb', 'Wilayah', 'required');

  	if ($post['v_is_no_bpkb_null']==1) {
  		// $post['v_is_no_bpkb_null'] = 0;
  		$this->form_validation->set_rules('v_no_awal', 'No Awal BPKB', 'required');
  		$this->form_validation->set_rules('v_reg_no_awal', 'No Reg BPKB Awal', 'required');
  	}

  	$this->form_validation->set_rules('v_kode_wialayah', 'Wilayah', 'required');
  	$this->form_validation->set_rules('v_wilayah_kerja', 'Wilayah', 'required');
  	$this->form_validation->set_rules('v_wilayah_kerja', 'Wilayah', 'required');

  $this->form_validation->set_message('required', ' %s Harus diisi ');
  $this->form_validation->set_error_delimiters('* ', '<br />');	

  if ($this->form_validation->run() == TRUE){
  		
 $date1 = str_replace('/', '-', $post['v_tanggal_dikeluarkan']);
$post['v_tanggal_dikeluarkan'] = date("Ymd", strtotime($date1));


   $datanya = array(
				"v_polda_id" => $this->session['vl_polda_id'],
			   "v_polres_id" => $post['v_wilayah_kerja'],
			   "v_jenis_penerbitan" =>  $post['v_jenis_penerbitan'],
			   "v_is_no_bpkb_null" => $post['v_is_no_bpkb_null'],
			   "v_seri_bpkb" => $post['v_seri_bpkb'],
			   "v_kd_wil_bpkb" => $post['v_kode_wialayah'],
			   "v_no_awal_bpkb" => $post['v_no_awal'],
			   "v_bln_th_reg" => $post['v_bulan_tahun_bpkb'],
			   "v_akhiran_reg" => $post['v_akhiran_reg'],
			   "v_no_nreg_awal" => $post['v_reg_no_awal'],
			   "v_tgl_proses" => $post['v_tanggal_dikeluarkan'],
			   "v_jml_data" => $post['v_jumlah_buku']
   				);
   
   $res = $this->cm->call_function($datanya, 'BPKB_CREATE_LABEL');

   // show_array($res);
   $arr = array("error"=>false,"message"=>$res['RESULT']);



  }else{
  	$arr = array("error"=>true,"message"=>validation_errors());
  }

		echo json_encode($arr);
	}


	
}
