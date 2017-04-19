<?php

/**
 * Created by PhpStorm.
 * User: 11400231
 * Date: 11/04/2017
 * Time: 13:37
 */
class Site extends CI_Controller
{

    public function index(){
        $this->home();
    }

    public function home(){
        $this->load->model("model_get"); //roept de klasse model_get op
        $data["results"] = $this->model_get->getData("home"); //haalt via de getData functie data uit de database op phpmyadmin en stopt deze in een array

        //hier wordt de webpagina gevormd mbv verschillende files
        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_home", $data);
        $this->load->view("site_footer");
    }

    public function about(){
        $this->load->model("model_get");
        $data["results"] = $this->model_get->getData("about");

        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_about", $data);
        $this->load->view("site_footer");
    }

    public function contact(){
        $data["message"] = "";

        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_contact", $data);
        $this->load->view("site_footer");
    }

    public function send_email(){
        $this->load->library("form_validation"); //dit opent een soort van form layout

        $this->form_validation->set_rules("fullName", "Full Name", "required|alpha|xss_clean"); //ALPA: kan enkel hoofd en kleine letters bevatten
        $this->form_validation->set_rules("email", "Email Address", "required|valid_email|xss_clean"); //VALID_EMAIL: email moet correct zijn met bv naam@iets.be
        $this->form_validation->set_rules("message", "Message", "required|xss_clean"); //xss prevents from crosssite scripting

        if ($this->form_validation->run() == FALSE){ //als het misloopt, de normale view terug laden
            $data["message"] = "";

            $this->load->view("site_header");
            $this->load->view("site_nav");
            $this->load->view("content_contact", $data);
            $this->load->view("site_footer");
        } else {
            $data["message"] = "The email has successfully been sent!";

            $this->load->library("email");

            $this->email->from(set_value("email"), set_value("fullName")); //geeft de verzender en zijn naam door
            $this->email->to("epicmager@hotmail.com"); //naar wie de email verzonden wordt
            $this->email->subject("Message from our form."); //onderwerp
            $this->email->message(set_value("message")); //bericht

            $this->email->send();

            //volgende lijn zal een overzicht van metadata tonen als de mail verstuurd is
            //echo $this->email->print_debugger();

            $this->load->view("site_header");
            $this->load->view("site_nav");
            $this->load->view("content_contact", $data);
            $this->load->view("site_footer");
        }
    }
}