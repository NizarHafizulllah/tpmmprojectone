<?php

class Coremodel extends CI_Model
{

    public function get_data($id)
    {
        $query = $this->db->get('NIZAR.DEMO_CUSTOMERS')->result_array();
        
        return $query;
    }
}