<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Update_Model extends CI_Model
{
    function updateData($eventID, $persoonID, $startDatum, $eindDatum, $beschrijving)
    {
        $data = array(
            'EventID' => $eventID,
            'PersoonID' => $persoonID,
            'StartDatum' => $startDatum,
            'EindDatum' => $eindDatum,
            'beschrijving' => $beschrijving,
        );
        $this->db->where('EventID', $eventID);
        $this->db->update('Afspraak', $data);
    }

}