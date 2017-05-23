<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome!</title>
    <link rel="stylesheet" href="http://192.168.2.129/~user/CodeIgniterProductieFuncties/assets/css/style2.css"/>

    <script href="assets/js/login.js" rel="script" type="text/javascript"></script>
    <script type="text/javascript">
        function validateForm() {
            eventid = document.forms["updateForm"]["eventID"].value;
            persoonid = document.forms["updateForm"]["persoonID"].value;
            startdatum = document.forms["updateForm"]["startDatum"].value;
            einddatum = document.forms["updateForm"]["eindDatum"].value;
            beschrijving = document.forms["updateForm"]["beschrijving"].value;

            isValid = true;
            if (!eventid) {
                alert("Warning: EventID must be filled out!");
                isValid = false;
            }
            if (!persoonid) {
                alert("Warning: PersoonID must be filled out!");
                isValid = false;
            }
            if (!startdatum) {
                alert("Warning: StartDatum must be filled out!");
                isValid = false;
            }
            if (!einddatum) {
                alert("Warning: EindDatum must be filled out!");
                isValid = false;
            }
            if (!beschrijving) {
                alert("Warning: Beschrijving must be filled out!");
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault();
            }
        }
    </script>

</head>
<body>
<header>
    <h1 align="center">Geef data in!</h1><!--komt er nergens? -->
</header>

<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="../index.php/Update2/SaveUserUpdate" method="post" onsubmit="validateForm()" id="updateForm" name="updateForm">

                <p>Event ID: </p>
                <input type="text" id="eventID" name="eventID"/>
                <p>Persoon ID:</p>
                <input type="text" id="persoonID" name="persoonID"/>
                <p>StartDatum: </p>
                <input type="text" id="startDatum" name="startDatum"/>
                <p>EindDatum:</p>
                <input type="text" id="eindDatum" name="eindDatum"/>
                <p>Beschrijving: </p>
                <input type="text" id="beschrijving" name="beschrijving"/
                </br></br>
                </br>
                <button type="submit">Update into database</button>
            </form>
        </div>
    </div>

</div>
</body>
</html>