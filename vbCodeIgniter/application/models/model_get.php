<?php

/**
 * Created by PhpStorm.
 * User: 11400231
 * Date: 12/04/2017
 * Time: 19:55
 */
class Model_get extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    //DEZE FUNCTIE ZAL DATA UIT DE DATABASE OP PHPMYADMIN HALEN
    function getData($page){
        $query = $this->db->get_where("pageData", array("page" => $page)); //page is een kolom in phpmyadmin
        return $query->result();
    }

}