<?php

class Registrasi_bbn_1Model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  function get_server($param)
  {

    $this->db->select('COUNT(1) as jumlah', null, false)->from('T_BPKB_MASTER');

    if ($param['jeniscari'] == 0) {
      $this->db->where('NO_BPKB', $param['v_cari_no_bpkb']);
    } else if ($param['jeniscari'] == 1) {
      $this->db->where('NREG_BPKB', $param['v_cari_no_reg']);
    }
    if ($param['jeniscari'] == 2) {
      $this->db->like('NREG_BPKB', $param['v_cari_barcode']);
    }

    $data_arr = $this->db->get();

    return $data_arr;
  }
}
