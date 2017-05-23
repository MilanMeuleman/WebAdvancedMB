<?php

class insert_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function form_insert($data)
    {

// Insert in tabel(students) van de Database(ci_site)
        $this->db->insert('students', $data);
    }
}
?>