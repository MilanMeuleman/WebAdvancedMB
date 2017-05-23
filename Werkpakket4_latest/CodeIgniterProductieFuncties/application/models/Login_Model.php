<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_Model extends  CI_Model {
    function checkData($username, $password){
        $query = $this->db->get_where("Persoon",array("PersoonNaam" => $username));

        return $query->result();
    }
}