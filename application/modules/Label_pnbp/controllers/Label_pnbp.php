<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Label_pnbp extends AdminController
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
		$this->set_subtitle('LABEL PNBP');
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
   $v_jns_penerbitan = $post['jenis_penerbitan'];      
   $v_tgl_proses2 = $post['CrTanggalAkhir'];         

	

   	$variables[0] = array("parameter" => "p1", "value" => $v_polda_id);
	$variables[1] = array("parameter" => "p2", "value" => $v_polres_id);
	$variables[2] = array("parameter" => "p3", "value" => $v_tgl_proses);
	$variables[3] = array("parameter" => "p4", "value" => $v_tgl_proses2);
	$variables[4] = array("parameter" => "p5", "value" => $v_jns_penerbitan);

	  	// $this->db->select('TB.BRI_BARCODE, TB.BRI_NO, TB.TGL_KELUAR, TB.JNS_PENERBITAN, WK.POLRES_NAMA')->from('T_BRI TB');
	  	// $this->db->join('M_POLRES WK', 'WK.POLRES_KODE=TB.POLRES_ID');
	  	// $this->db->where('TB.IS_PROSES', 0);
	  	// $this->db->where('TB.POLDA_ID', $v_polda_id);
	  	// $this->db->where('TB.POLRES_ID', $v_polres_id);
	  	// $this->db->where('WK.POLDA_ID', $v_polres_id);
	  	// $this->db->where('TB.JNS_PENERBITAN', $v_jns_penerbitan);
	  	// $this->db->where("TB.TGL_KELUAR BETWEEN TO_DATE('". date('Y-m-d', strtotime($v_tgl_proses)). "', 'YYYY-MM-DD') and TO_DATE('". date('Y-m-d', strtotime($v_tgl_proses2))."', 'YYYY-MM-DD')");

	  	// $res = $this->db->get()->result_array();  
	  	// show_array($res);
	  	// exit();
	  	// echo $this->db->last_query();
	    $res =  $this->cm->readCursor("BPKB_GET_LIST_PNBP (:p1, :p2, :p3, :p4, :p5, :refc)", $variables);
	   
	    // show_array($res);
	    // exit();
	    $arr = array('error' => false, 'data' => $res);
	 }
	 else {
	   		$arr = array("error"=>true,"message"=>validation_errors());
	}
		echo json_encode($arr);
		
	}


	


	function simpan_label(){
		$post = $this->input->post();
		// show_array($post);
		// exit();
	$this->load->library('form_validation');
	$this->form_validation->set_rules('v_jenis_penerbitan', 'Jenis Penerbitan', 'required');
  	$this->form_validation->set_rules('v_wilayah_kerja', 'Wilayah Kerja ', 'required');
  	$this->form_validation->set_rules('v_tanggal_dikeluarkan', 'Tgl Dikeluarkan', 'required');
  	$this->form_validation->set_rules('v_jumlah_buku', 'Jumlah Data', 'required');
  	$this->form_validation->set_rules('v_bulan_tahun_bpkb', 'Bulan Tahun', 'required');

  
  $this->form_validation->set_message('required', ' %s Harus diisi ');
  $this->form_validation->set_error_delimiters('* ', '<br />');	

  if ($this->form_validation->run() == TRUE){
  		
 $date1 = str_replace('/', '-', $post['v_tanggal_dikeluarkan']);
$post['v_tanggal_dikeluarkan'] = date("Ymd", strtotime($date1));

$r2arr = array(1, 3, 5, 7);
$r4arr = array(2, 4, 6, 8);
	$pnbp = '';
if (in_array($post['v_jenis_penerbitan'], $r2arr)) {
	$pnbp = $this->session['vl_pnbpr2'];
}else{
	$pnbp = $this->session['vl_pnbpr4'];
}

// exit();

   $datanya = array(
			   "v_jenis_penerbitan" =>  $post['v_jenis_penerbitan'],
			   "v_tgl_proses" => $post['v_tanggal_dikeluarkan'],
			   "v_jml_data" => $post['v_jumlah_buku'],
			   "v_bln_th_reg" => $post['v_bulan_tahun_bpkb'],
			   "v_pnbp" => $pnbp,
				"v_polda_id" => $this->session['vl_polda_id'],
			   "v_polres_id" => $post['v_wilayah_kerja'],
   				);
   
   $res = $this->cm->call_function($datanya, 'BRI_CREATE_LABEL_WEB');

   // show_array($res);
   $arr = array("error"=>false,"message"=>$res['RESULT']);



  }else{
  	$arr = array("error"=>true,"message"=>validation_errors());
  }

		echo json_encode($arr);
	}


	
}
