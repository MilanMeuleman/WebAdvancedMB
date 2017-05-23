<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Insert extends CI_Controller
{

    public function index()
    {
        $this->config->set_item('base_url', 'http://192.168.2.129/~user/CodeIgniterProductieFuncties');
        $this->load->view('insert_field_input_events');
    }

}