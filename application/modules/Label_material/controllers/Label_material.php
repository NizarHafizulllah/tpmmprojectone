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

  $this->form_validation->set_error_delimiters('* ', '<br />');	

   if ($this->form_validation->run() == TRUE){

   	if ($post['jeniscari']==0) {
   		// $timestamp = strtotime($original_date);
 
// Creating new date format from that timestamp
   		$date1 = str_replace('/', '-', $post['CrTanggalAwal']);
   		$date2 = str_replace('/', '-', $post['CrTanggalAkhir']);
		$post['CrTanggalAwal'] = date("Ymd", strtotime($date1));
		$post['CrTanggalAkhir'] = date("Ymd", strtotime($date2));
   	}


   	// show_array($post);

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


	
}
