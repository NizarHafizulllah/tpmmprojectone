<?php
class Oramodel extends CI_Model {
  function Oramodel () {
    parent::__construct();
  }


  public Function readCursor($storedProcedure, $binds) {

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




      public Function readCursor2($storedProcedure, $binds) {

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




function readcursor3(){

$c = $this->db->conn_id;
    
$stmt = "BEGIN
              :return_cursor := GET_DATA_REKOM_BY_USER(:p1,:p2,:p3);
            END;";

// $stmt = strip_special_characters($stmt);


$s = oci_parse($c,$stmt);

// Declare a return cursor for the connection.
$rc = oci_new_cursor($c);

// bind all input parameter 

$v_tglawal = '20190401';
$v_tglakhir = '20190424';
$v_usr = 'ATWIS';   

oci_bind_by_name($s,':p1',$v_tglawal);
oci_bind_by_name($s,':p2',$v_tglakhir);
oci_bind_by_name($s,':p3',$v_usr);




// Bind PHP variables to the OCI output or in/out mode variable.
oci_bind_by_name($s,':return_cursor',$rc,-1,OCI_B_CURSOR);

oci_execute($s);
oci_execute($rc);

while($row = oci_fetch_assoc($rc)) : 

show_array($row);

endwhile;



}




      function call_function($sql) {
// echo "did i called ";
            $conn = $this->db->conn_id;
            if($conn){
                $stdin = oci_parse($conn, $sql);
                // foreach($param as $vars) : 
                //     oci_bind_by_name($stid,$vars['parameter'],$vars['value']);
                // endforeach;
                oci_execute($stdin);
                $row = oci_fetch_array($stid, OCI_ASSOC);
                // show_array($row);
                return $row;
            }
            else {
                return array("MSG"=>"error");
            }
      }


}

?>