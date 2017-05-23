<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Get_Model extends  CI_Model {
    function getData($db, $id){
        $query = $this->db->get_where($db,array("id" => $id));
        return $query->result();
    }
}