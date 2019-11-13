<?php

class Coremodel extends CI_Model
{

    public function get_data($id)
    {
        $query = $this->db->get('NIZAR.DEMO_CUSTOMERS')->result_array();
        
        return $query;
    }

    function get_menu(){
    	print_r($this->userdata);
    }

    function arr_dropdown2($vTable, $vINDEX, $vVALUE, $vORDERBY, $field, $search){

                $this->db->where($field, $search);
                $this->db->order_by($vORDERBY);
                $res  = $this->db->get($vTable);
       
                $ret = array('' => '');
                foreach($res->result_array() as $row) : 
                        $ret[$row[$vINDEX]] = $row[$vVALUE];
                endforeach;
                return $ret;

        }

    function add_arr_head($arr,$index,$str) {
	  $res[$index] = $str;
	  foreach($arr as $x => $y) : 
	  	$res[$x] = $y;
	  endforeach;
	  return $res;
	}


	function call_function($array, $function){

	 $string = '';
	 $jumlah_array = count($array);
  // echo $jumlah_array;
  // exit();
   $counter = 0;
	 foreach ($array as $key => $value) {
    $counter++;
	 	if ($counter==($jumlah_array)) {
	 		$string .= "'".$value."'";
	 	}else{
	 		$string .= "'".$value."', ";
      // echo 'last data'.$key
	 	}	
	 }

   // echo $string;
     $hasil = $this->db->query("select ".$function."(".$string.") as result from dual")->row_array();
     

   
     return $hasil;
  }


  public function readCursor($storedProcedure, $binds) {

// show_array($binds); 
      
      $conn = $this->db->conn_id;
            if ($conn) {
                
                // Create the statement and bind the variables (parameter, value, size)
                $stid = oci_parse($conn, 'begin ' . $storedProcedure . '; end;');
                foreach ($binds as $variable)
                    oci_bind_by_name($stid, $variable["parameter"], $variable["value"], strlen($variable["value"]));

                // Create the cursor and bind it

                try {


                $p_cursor = oci_new_cursor($conn);
                oci_bind_by_name($stid, ':refc', $p_cursor, -1, OCI_B_CURSOR);

                // Execute the Statement and fetch the data
                $rs = oci_execute($stid);
                if(!$rs) {
                    echo "gagal"; 
                     $data['erorr'] = true;
                    $data['message'] = oci_error();
                }
                oci_execute($p_cursor, OCI_DEFAULT);
                oci_fetch_all($p_cursor, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
                }
                // Return the data
                catch(exception $data){
                  //   $err = oci_error();
                  //   echo "hantu blau"; 
                  // $data = array("result"=>false,"message_err"=>"error ".$err['message']);
                  // show_array($data); exit;
                }

 
                // show_array($data); exit;
                return $data;
            }
      }
}