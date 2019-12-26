<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi_bbn_1 extends AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->controller = get_class($this);
		$this->load->model($this->controller . "Model", "dm");
		$this->load->model('Coremodel', 'cm');
		$this->session = $this->session->userdata('pengguna_login');
	}

	public function index()
	{
		$data = array();
		$data['title'] = "Registrasi BBN 1";
		$content = $this->load->view($this->controller . "ListData", $data, true);
		$this->set_title($data['title']);
		$this->set_subtitle('BBN 1');
		$this->set_content($content);
		$this->render();
	}

	public function baru()
	{
		$data = array();
		$data['arr_wilayah'] = $this->cm->arr_dropdown2('M_POLRES', 'POLRES_KODE', 'POLRES_NAMA', 'POLRES_NAMA', 'POLDA_ID', $this->session['vl_polda_id']);
		$data['arr_pemohon'] = $this->cm->arr_dropdown2('M_PEMOHON', 'PEMOHON_ID', 'PEMOHON_NAMA', 'PEMOHON_NAMA', 'POLDA_ID', $this->session['vl_polda_id']);
		$data['arr_impor'] = $this->cm->arr_dropdown('M_CARA_IMPOR', 'IMPMTHD_ID', 'IMPMTHD_NAME', 'IMPMTHD_NAME');
		$data['arr_merk'] = $this->cm->arr_dropdown('M_MERK', 'MERK_ID', 'MERK_NAMA', 'MERK_NAMA');
		$data['arr_jenis'] = $this->cm->arr_dropdown('M_JENIS', 'JENIS_ID', 'JENIS_NAMA', 'JENIS_NAMA');
		$data['arr_provinsi'] = $this->cm->arr_dropdown('M_JENIS', 'JENIS_ID', 'JENIS_NAMA', 'JENIS_NAMA');
		$data['arr_model'] = array('' => '- Pilih Satu -');
		$data['arr_pekerjaan'] = $this->cm->arr_dropdown('M_PEKERJAAN', 'PEKERJAAN_NAMA', 'PEKERJAAN_NAMA', 'PEKERJAAN_NAMA');
		$data['arr_jenisdaftaran'] = $this->cm->arr_dropdown('M_JENIS_DAFTARAN', 'JD_ID', 'JD_NAMA', 'JD_ID');
		$data['arr_provinsi'] = $this->cm->arr_dropdown('M_PROPINSI', 'NO_PROP', 'NAMA_PROP', 'NO_PROP');

		$data['title'] = "List Data BPKB";
		$content = $this->load->view($this->controller . "View", $data, true);
		$this->set_title($data['title']);
		$this->set_subtitle('BBN 1');
		$this->set_content($content);
		$this->render();
	}


	function get_data_from_server()
	{
		$post = $this->input->post();

		$data_ret = array();

		$this->load->library('form_validation');

		$this->form_validation->set_rules('tgl_cari', 'Tanggal', 'required');

		if ($post['jeniscari'] == 0) {
			$this->form_validation->set_rules('v_cari_no_bpkb', 'No BPKB ', 'required');
		} else if ($post['jeniscari'] == 1) {
			$this->form_validation->set_rules('v_cari_no_reg', 'No Reg BPKB', 'required');
		} else if ($post['jeniscari'] == 2) {
			$this->form_validation->set_rules('v_cari_barcode', 'Barcode Berkas ', 'required');
		}

		$this->form_validation->set_message('required', ' %s Harus diisi ');
		$this->form_validation->set_error_delimiters('* ', '<br />');

		if ($this->form_validation->run() == TRUE) {


			if ($post['jeniscari'] == 0) {
				if (strpos($post['v_cari_no_bpkb'], '-') !== false) {
					$post['v_cari_no_bpkb'] = str_replace("-", " ", $post['v_cari_no_bpkb']);
				}
			}

			$date1 = str_replace('/', '-', $post['tgl_cari']);
			$post['tgl_cari'] = date("Ymd", strtotime($date1));
			$data = $this->dm->get_server($post)->row_array();

			if ($post['jeniscari'] == 0) {
				$cari = $post['v_cari_no_bpkb'];
			} else if ($post['jeniscari'] == 1) {
				$cari = $post['v_cari_no_reg'];
			}
			if ($post['jeniscari'] == 2) {
				$cari = $post['v_cari_barcode'];
			}

			if ($data['JUMLAH'] == 0) {
				// $data_ret['jenis'] = 1;
				$v_is_get = $post['jeniscari'];
				$v_polda_id = $this->session['vl_polda_id'];
				$v_polres_id = $this->session['vl_polres_id'];
				$v_tgl_proses = $post['tgl_cari'];
				$v_cari = $cari;

				$variables[0] = array("parameter" => "p1", "value" => $v_is_get);
				$variables[1] = array("parameter" => "p2", "value" => $v_polda_id);
				$variables[2] = array("parameter" => "p3", "value" => $v_polres_id);
				$variables[3] = array("parameter" => "p4", "value" => $v_tgl_proses);
				$variables[4] = array("parameter" => "p5", "value" => $v_cari);



				$data_ret['detail'] =  $this->cm->readCursor("BPKB_GET_REGISTRASI(:p1, :p2, :p3, :p4, :p5, :refc)", $variables);
				// show_array($data_ret);
				if (!empty($data_ret['detail'])) {
					if ($post['tgl_cari'] <= $data_ret['detail'][0]['TGL_KELUAR']) {
						$data_ret['detail'][0]['tgl_keluar'] = convertdate($data_ret['detail'][0]['TGL_KELUAR']);
						$arr = array("error" => false, "data" => $data_ret['detail'][0], 'jenis' => 1);
					} else {
						$arr = array("error" => true, "message" => "No BPKB sudah Kedaluwarsa");
					}
				} else {
					$arr = array("error" => true, "message" => "No BPKB tidak ditemukan ");
				}
			} else {
				$data_ret['jenis'] = 2;
			}
			// show_array($data_ret);

		} else {
			$arr = array("error" => true, "message" => validation_errors());
		}

		// $res = $this->cm->call_function($datanya, 'BPKB_GET_REGISTRASI');
		// show_array($arr);
		// show_array($data->result_array());
		echo json_encode($arr);
		// show_array($post);
	}

	function get_data_noka()
	{
		$post = $this->input->post();

		$this->db->select('A.BARCODE')->from('T_PAYMENT2 A');
		$this->db->join('T_PENDAFTARAN2 B', 'A.DAFT_ID=B.DAFT_ID', 'INNER');
		$this->db->where('B.NO_RANGKA', $post['no_rangka']);
		$this->db->where('B.DUP_NR_COUNT', 0);

		$cek1 = $this->db->get();

		if ($cek1->num_rows() > 0) {
			$data = $cek1->row_array();
			$variables[0] = array("parameter" => "v_jenis", "value" => 1);
			$variables[1] = array(
				"parameter" => "V_Cari", "value" => $post['no_rangka']
			);

			$data_detail =  $this->cm->readCursor("BPKB_GET_DATA_FAKTUR2(:v_jenis, :v_cari, :refc)", $variables);
			// show_array()
			// echo $this->db->last_query();
			$data_detail[0]['NAMA_PEMILIK'] = 'NIZAR HAFIZULLAH MARGA DININGRAT AGUS PRAYONO MUZDALIFA';
			// $data_detail[0]['nama'] = $this->split_word($data_detail[0]['NAMA_PEMILIK']);
			$data_detail[0]['nama'] = explode("\n", wordwrap($data_detail[0]['NAMA_PEMILIK'], 36));
			// show_array($data);
			// exit();
			// $data_detail[0]['nama'][0] = substr($data_detail[0]['NAMA_PEMILIK'],0,36);
			// $data_detail[0]['nama'][1] = substr($data_detail[0]['NAMA_PEMILIK'],36,72);

			$data_detail[0]['alamat'] = explode("\n", wordwrap($data_detail[0]['ALAMAT_PEMILIK'], 36));
			// $data_detail[0]['alamat'][0] = substr($data_detail[0]['ALAMAT_PEMILIK'],0,36);
			// $data_detail[0]['alamat'][1] = substr($data_detail[0]['ALAMAT_PEMILIK'],36,72);
			// $data_detail[0]['alamat'][2] = substr($data_detail[0]['ALAMAT_PEMILIK'],72,108);

			$ret = array('error' => 1, 'data' => $data, 'detail' => $data_detail[0]);
		} else {
			$ret = array('error' => 2, 'message' => 'DATA KENDARAAN NO RANGKA ' . $post['no_rangka'] . ' BELUM DIDAFTARKAN <BR/> MOHON UNTUK DIDAFTARKAN');
		}

		echo json_encode($ret);
		// show_array($data);

	}
}
