<?php 

class LoginModel extends CI_Model {


  function __construct(){
    parent::__construct();
  }

  function cek_login($param){
  	 // $insert_user_stored_proc = "CALL BPKB_LOGIN_WEB(?, ?)";
  	 // $data = array('v_user_name' => $param['email'], 'v_password' => $param['password']);
     $hasil = $this->db->query("select BPKB_LOGIN_WEB('".$param['email']."', '".$param['password']."') as result from dual")->row_array();
     $data_arr = explode('#', $hasil['RESULT']);

   
     return $data_arr;
  }


 }

 ?>