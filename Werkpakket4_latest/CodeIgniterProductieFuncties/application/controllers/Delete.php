<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller
{

    public function index()
    {
        error_reporting(0);
        $this->load->helper('html');
    }

    public function SaveUserInput()
    {
        $id = $_POST['id2post'];
        $this->load->model('Delete_Model');
        $data['result'] = $this->Delete_Model->deleteData($id);

        $this->config->set_item('base_url', 'http://192.168.2.129/~user/CodeIgniterProductieFuncties');
        $this->load->view('delete_result', $data);
    }
}
