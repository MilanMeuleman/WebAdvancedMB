<?php

class Insert extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('insert_model');
    }

    function index()
    {
        //Including validation library
        $this->load->library('form_validation');

        //$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('dname', 'Name', 'required|xss_clean|min_length[5]|max_length[15]'); //regels waar aan voldaan moet zijn

        //Validating FirstName Field
        $this->form_validation->set_rules('dfname', 'FirstName', 'required|xss_clean'); //regels waar aan voldaan moet zijn

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('insert_view'); //als form fout is, load de foutmeldingen
        } else {
            //Zet de waarden voor de juiste tabel kolommen
            $data = array(
                'Name' => $this->input->post('dname'),
                'FirstName' => $this->input->post('dfname')
            );
            //Zend de data naar de Model
            $this->insert_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View
            $this->load->view('insert_view', $data);
        }
    }

}

?>