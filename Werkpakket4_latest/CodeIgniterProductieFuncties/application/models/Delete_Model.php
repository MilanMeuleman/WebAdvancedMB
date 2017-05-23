<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Delete_Model extends CI_Model
{
    function deleteData($id)
    {
        $this->db->delete('Afspraak', array('EventID' => $id));
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /*function deleteData($table, $id)
    {
        $this->db->delete($table, array('id' => $id));
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }*/

}