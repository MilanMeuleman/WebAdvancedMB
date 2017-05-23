<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Insert2 extends CI_Controller
{

    public function index()
    {
        $this->load->view('insert_view_second_page');
    }

    /*public function SaveUserInputDatabase(){
        $db = $_POST['dbpost']; //table
        //server-side validation
        if($db != null && $db != ' '){
            switch($db){
                case "Afspraak":
                    $this->config->set_item('base_url','http://192.168.109.131/~user/CodeIgniterProductieFuncties/') ;
                    $this->load->view('insert_field_input_events', $db);
                    break;
                case "Persoon":
                    $this->config->set_item('base_url','http://192.168.109.131/~user/CodeIgniterProductieFuncties/') ;
                    $this->load->view('insert_field_input_klanten', $db);
                    break;
                default: $this->load->view('db_not_found');
            }
        }
    }*/

    public function SaveUserInputFieldsAfspraak()
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

                $this->load->model('Insert_Model');
                $data["results"] = $this->Insert_Model->insertDataEvent($eventID, $persoonID, $startDatum, $eindDatum, $beschrijving);

                $this->load->view('insert_result', $data);
            }
        } else {
            $data["results"] = false;
            $this->load->view('insert_result', $data);
        }

    }
    /*public function SaveUserInputFieldsPersoon(){
        $naam = $_POST['naam'];
        $id = $_POST['id'];
        $wachtwoord = $_POST['wachtwoord'];


        if($naam != null && $id != null && $wachtwoord != null){
            $this->load->model('Insert_Model');
            $data["results"] = $this->Insert_Model->insertDataKlant($naam,$id,$wachtwoord);
            $this->config->set_item('base_url','http://192.168.164.144/~user/AlgemeneOefeningen/CodeIgniterTestingBackup/') ;
            $this->load->view('insert_result', $data);
        }
        }
*/

}