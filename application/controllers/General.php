<?php 
class General extends CI_Controller {
	function __construct(){
		parent::__construct();
	}



	

	function get_model(){

		$post = $this->input->post();


		$this->db->where("JENIS_ID",$post['id_jenis']);
		$this->db->order_by("MODEL_ID");
		$res = $this->db->get("M_MODEL");
		$html="<option value=''>- PILIH SATU -</option>";
		// $sel = "";
		foreach($res->result() as $row): 
			// $sel = ($row->id == $id_desa)?"selected":"";
			$html.="<option value=$row->MODEL_ID>$row->MODEL_NAMA</option>";
		endforeach;
		echo $html;

	}


	function get_kabupaten(){
		$post = $this->input->post();

		$this->db->where("NO_PROP",$post['provinsi']);
		$this->db->order_by("NO_KAB");
		$res = $this->db->get("M_KABUPATEN");
		$html="<option value=''>- PILIH SATU -</option>";
		// $sel = "";
		foreach($res->result() as $row): 
			// $sel = ($row->id == $id_desa)?"selected":"";
			$html.="<option value=$row->NO_KAB>$row->NAMA_KAB</option>";
		endforeach;
		echo $html;
	}

	function get_kecamatan(){
		$post = $this->input->post();

		$this->db->where("NO_KAB",$post['kabupaten']);
		$this->db->order_by("NO_KEC");
		$res = $this->db->get("M_KECAMATAN");
		$html="<option value=''>- PILIH SATU -</option>";
		// $sel = "";
		foreach($res->result() as $row): 
			// $sel = ($row->id == $id_desa)?"selected":"";
			$html.="<option value=$row->NO_KEC>$row->NAMA_KEC</option>";
		endforeach;
		echo $html;
	}

	function get_kelurahan(){
		$post = $this->input->post();

		$this->db->where("NO_KEC",$post['kecamatan']);
		$this->db->order_by("NO_KEL");
		$res = $this->db->get("M_KELURAHAN");
		$html="<option value=''>- PILIH SATU -</option>";
		// $sel = "";
		foreach($res->result() as $row): 
			// $sel = ($row->id == $id_desa)?"selected":"";
			$html.="<option value=$row->NO_KEL>$row->NAMA_KEL</option>";
		endforeach;
		echo $html;
	}


	function get_id_merk(){
		$post = $this->input->post('merk');

		$this->db->where('MERK_NAMA', $post);
		$data_merk = $this->db->get('M_MERK')->row_array();
		echo json_encode($data_merk);
	}

	function get_id_jenis(){
		$post = $this->input->post('jenis');

		$this->db->where('JENIS_NAMA', $post);
		$data_merk = $this->db->get('M_JENIS')->row_array();
		echo json_encode($data_merk);
	}

	function get_id_model(){
		$post = $this->input->post('model');
		$post1 = $this->input->post('id_jenis');

		$this->db->where('MODEL_NAMA', $post);
		$this->db->where('JENIS_ID', $post1);
		$data_model = $this->db->get('M_MODEL')->row_array();
		echo json_encode($data_model);
	}


}
?>