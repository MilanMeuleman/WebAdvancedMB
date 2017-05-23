<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Insert_model extends CI_Model
{

    /*function insertDataKlant($naam, $id, $wachtwoord)
    {
        $data = array(
            'PersoonNaam' => $naam,
            'PersoonID' => $id,
            'user_passwoord' => $wachtwoord
        );
        $query = $this->db->insert("Persoon", $data);
        return $query;
    }*/

    function insertDataEvent($eventID, $persoonID, $startDatum, $eindDatum, $beschrijving)
    {
        $data = array(
            'EventID' => $eventID,
            'PersoonID' => $persoonID,
            'StartDatum' => $startDatum,
            'EindDatum' => $eindDatum,
            'beschrijving' => $beschrijving,
        );
        $query = $this->db->insert("Afspraak", $data);
        return $query;
    }
}