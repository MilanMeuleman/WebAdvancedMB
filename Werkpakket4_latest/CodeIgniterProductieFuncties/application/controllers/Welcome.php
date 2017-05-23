<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {




	public function index()
	{
	    error_reporting(0);
        $this->load->helper('html');
	    $this->load->view('login_view');
	}
	public function SaveUserInput(){
        $db = $_POST['dbpost'];
        $id = $_POST['idpost'];
        $this->load->model('Get_Model');
        $data["results"] = $this->Get_Model->getData($db, $id);
        $this->config->set_item('base_url','http://192.168.2.129/~user/CodeIgniterProductieFuncties') ;
        $this->load->view('result', $data);
    }
}
