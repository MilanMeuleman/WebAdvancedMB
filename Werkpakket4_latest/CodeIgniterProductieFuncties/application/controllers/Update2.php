<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update2 extends CI_Controller
{

    public function index()
    {
        error_reporting(0);
        $this->load->helper('html');
    }

    public function SaveUserUpdate()
    {
        $this->load->model('Validation_Model');

        $eventID = $_POST['eventID'];
        $persoonID = $_POST['persoonID'];
        $startDatum = $_POST['startDatum'];
        $eindDatum = $_POST['eindDatum'];
        $beschrijving = $_POST['beschrijving'];

        $isValid = $this->Validation_Model->checkValid($eventID, $persoonID, $startDatum, $eindDatum, $beschrijving);

        if ($isValid == true) {
            $eventID = $this->Validation_Model->testInput($eventID);
            $persoonID = $this->Validation_Model->testInput($persoonID);
            $startDatum = $this->Validation_Model->testInput($startDatum);
            $eindDatum = $this->Validation_Model->testInput($eindDatum);
            $beschrijving = $this->Validation_Model->testInput($beschrijving);

            if ($eventID != null && $persoonID != null && $startDatum != null && $eindDatum != null && $beschrijving != null) {

                $this->load->model('Update_Model');
                $data["results"] = $this->Update_Model->updateData($eventID, $persoonID, $startDatum, $eindDatum, $beschrijving);

                $this->load->view('update_result', $data);
            }
        } else {
            $data["results"] = false;
            $this->load->view('update_result', $data);
        }

    }
}
