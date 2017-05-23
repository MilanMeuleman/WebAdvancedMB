<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Update extends CI_Controller
{

    public function index()
    {
        $this->config->set_item('base_url', 'http://192.168.2.129/~user/CodeIgniterProductieFuncties');
        $this->load->view('update_field_input_events');
    }

}