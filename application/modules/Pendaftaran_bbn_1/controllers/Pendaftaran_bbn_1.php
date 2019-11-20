<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_bbn_1 extends AdminController
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
		$data['title'] = "Pendaftaran BBN 1";
		$data['arr_pemohon'] = $this->cm->arr_dropdown3('M_PEMOHON', 'PEMOHON_ID', 'PEMOHON_NAMA', 'PEMOHON_NAMA',"PEMOHON_JENIS", "PRIBADI", 'POLDA_ID', $this->session['vl_polda_id']);
		$content = $this->load->view($this->controller . "View", $data, true);
		$this->set_title($data['title']);
		$this->set_subtitle('BBN 1');
		$this->set_content($content);
		$this->render();
	}


	function get_pemohon(){

		$post = $this->input->post();

		$this->db->select('PEMOHON_ID, PEMOHON_NAMA')->from('M_PEMOHON');
		$this->db->where("PEMOHON_JENIS",$post['pemohon_jenis']);
		$this->db->where("POLDA_ID", $this->session['vl_polda_id']);
		$this->db->order_by("PEMOHON_NAMA");
		$res = $this->db->get();
		$html="<option value='x'>= PILIH PEMOHON =</option>";
		foreach($res->result() as $row): 
			
			$html.="<option value=$row->PEMOHON_ID >$row->PEMOHON_NAMA</option>";
		endforeach;
		echo $html;

	}


	function get_data_from_server(){
		$post = $this->input->post();
		


	$this->load->library('form_validation');

	$this->form_validation->set_rules('v_tanggal', 'Tanggal', 'required');
  $this->form_validation->set_rules('pemohon_jenis', 'Jenis Pemohon', 'required');
  $this->form_validation->set_rules('pemohon', 'Pemohon', 'required');
  
  

  $this->form_validation->set_message('required', ' %s Harus diisi');
  $this->form_validation->set_error_delimiters('* ', '<br />');	

   if ($this->form_validation->run() == TRUE){

 
   		$date1 = str_replace('/', '-', $post['v_tanggal']);
		$post['v_tanggal'] = date("Ymd", strtotime($date1));

   

   $v_tanggal = $post['v_tanggal'];              
   $v_pemohon = $post['pemohon'];            
   $v_bbn1 = '0';                    

	
	    $variables[0] = array("parameter" => "p1", "value" => $v_tanggal);
	    $variables[1] = array("parameter" => "p2", "value" => $v_pemohon);
	    $variables[2] = array("parameter" => "p3", "value" => $v_bbn1);
	    


	    
	  
	    $res =  $this->cm->readCursor("LIST_PENDAFTARAN(:p1, :p2, :p3, :refc)", $variables);
	   
	    // show_array($res);
	    if (!empty($res)) {
	    	$arr = array('error' => false, 'data' => $res);
	    }else{
	    	$arr = array('error' => true, 'message' => 'Data Kosong');
	    }

	 }
	 else {
	   		$arr = array("error"=>true,"message"=>validation_errors());
	}
		echo json_encode($arr);
		
	}



	function simpan(){
		$post = $this->input->post();

		// show_array($post);
		// exit();

		
	$this->load->library('form_validation');
	$this->form_validation->set_rules('v_tanggal', 'Tanggal', 'required');
  	$this->form_validation->set_rules('pemohon', 'Pemohon', 'required');
  	$this->form_validation->set_rules('vBarcodeBank', 'Tgl Dikeluarkan', 'required');
  	$this->form_validation->set_rules('vTypeKendaraan', 'Jumlah Buku', 'required');
  	$this->form_validation->set_rules('vNoRangka', 'Wilayah', 'required');

  $this->form_validation->set_message('required', ' %s Harus diisi ');
  $this->form_validation->set_error_delimiters('* ', '<br />');	

  if ($this->form_validation->run() == TRUE){
  		
 $date1 = str_replace('/', '-', $post['v_tanggal']);
$post['v_tanggal'] = date("Ymd", strtotime($date1));

	if (!empty($post['daftaran_id'])) {
		$datanya = array(
			   "vNoRangka" => $post['vNoRangka'],
			   "vTglDaftar" =>  $post['v_tanggal'],
			   "vNoBPKB" => '',
			   "vPemohonID" => $post['pemohon'],
			   "vPetugasID" => $this->session['vl_op_id'],
			   "vBarcodeBank" => $post['vBarcodeBank'],
			   "vLoketNo" => 1,
			   "vEnrollmentType" => 1,
			   "vTypeDaftaran" => $post['vTypeKendaraan'],
			   "vMerkID" => '',
			   "vDaftarID" => $post['daftaran_id'],
			   "vPOLDA_ID" => $this->session['vl_polda_id'],
			   "vPOLRES_ID" => $this->session['vl_polres_id']
   				);

		$res = $this->cm->call_function($datanya, 'BPKB_PENDAFTARAN_EDIT_WEB');
	}else{
		$datanya = array(
			   "vNoRangka" => $post['vNoRangka'],
			   "vTglDaftar" =>  $post['v_tanggal'],
			   "vNoBPKB" => '',
			   "vPemohonID" => $post['pemohon'],
			   "vPetugasID" => $this->session['vl_op_id'],
			   "vBarcodeBank" => $post['vBarcodeBank'],
			   "vLoketNo" => 1,
			   "vEnrollmentType" => 1,
			   "vTypeDaftaran" => $post['vTypeKendaraan'],
			   "vMerkID" => '',
			   "vPOLDA_ID" => $this->session['vl_polda_id'],
			   "vPOLRES_ID" => $this->session['vl_polres_id']
   				);

		$res = $this->cm->call_function($datanya, 'BPKB_PENDAFTARAN_ADD_WEB');
	}
   
   
   $bagi = explode('#', $res['RESULT']);
   
   if ($bagi[0]=='00') {
   		 $arr = array("error"=>false,"message"=>'Berhasil Simpan');
   }else{
   		$arr = array("error"=>true,"message"=>$res['RESULT']);
   }

  }else{
  	$arr = array("error"=>true,"message"=>validation_errors());
  }

		echo json_encode($arr);
	}


	function hapus(){
		$post = $this->input->post();



		$datanya = array(
			   "vDaftarID" => $post['DAFT_ID'],
			   "vPetugasID" =>  $this->session['vl_op_id']
   				);

		$res = $this->cm->call_function($datanya, 'BPKB_PENDAFTARAN_DELETE');

   
   		$arr = array("error"=>false,"message"=>$res['RESULT']);

		echo json_encode($arr);

	}

}
