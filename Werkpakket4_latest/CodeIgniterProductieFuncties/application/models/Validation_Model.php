<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Validation_Model extends CI_Model
{

    function checkValid($eventId, $persoonID, $startDatum, $eindDatum, $beschrijving)
    {
        $isValid = true;

        if (empty($eventId) || !is_numeric($eventId) || empty($persoonID) || !is_numeric($persoonID) || empty($startDatum) || empty($eindDatum) || empty($beschrijving)) {
            $isValid = false;
        }

        return $isValid;
    }

    function testInput($param)
    {
        $param = trim($param);
        $param = stripslashes($param);
        $param = htmlspecialchars($param);
        return $param;
    }
}