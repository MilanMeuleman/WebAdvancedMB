<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {




    public function index()
    {
        error_reporting(0);
        $this->load->helper('html');
        $this->load->view('login_view');
    }
    public function CheckLogin(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $this->load->model('Login_Model');
        $data["results"] = $this->Login_Model->CheckData($username, $password);
        $result = false;
        foreach($data as $row) {
           foreach($row as $field) {
               if ($field->user_passwoord == $password) {
                   $result = true;
               } else {
                   $result = false;
               }
           }
        }
        if($result){
            $this->config->set_item('base_url','http://192.168.2.129/~user/CodeIgniterProductieFuncties/') ;
            $this->load->view('welcome_message');
        } else {
            $message = "wrong login!";
            $this->load->view('login_incorrect_view');
        }
    }
}
