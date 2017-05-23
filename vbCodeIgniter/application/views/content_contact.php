<div id="contact">

    <?php

    $this->load->helper("form");

    echo $message; //zorgt voor succesvolle output

    echo validation_errors(); //zorggt voor foutmeldingen

    echo form_open("site/send_email"); //url na klikken op knop Send

    echo form_label("Name: ", "fullName");
    $data = array(

        "name" => "fullName",
        "id" => "fullName",
        "value" => set_value("fullName")

    );
    echo form_input($data);

    echo form_label("Email: ", "email");
    $data = array(

        "name" => "email",
        "id" => "email",
        "value" => set_value("email")

    );
    echo form_input($data);

    echo form_label("Message: ", "message");
    $data = array(

        "name" => "message",
        "id" => "message",
        "value" => set_value("message")

    );
    echo form_textarea($data);

    echo form_submit("contactSubmit", "Send!");

    echo form_close();

    ?>

</div>