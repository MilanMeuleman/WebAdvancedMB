<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome op de beheer pagina!</title>
    <link rel="stylesheet" href="http://192.168.2.129/~user/CodeIgniterProductieFuncties/assets/css/style2.css"/>
    <script type="text/javascript">


        function validateDelete() {
            id = document.forms["viewDelete"]["id2post"].value;
            isValid = true;

            if (!id) {
                alert("Warning: id from the record must be filled out!");
                isValid = false;
            }
            if (!isValid) {
                event.preventDefault();
            }
        }

        function validateUpdate() {
            id = document.forms["viewUpdate"]["id2post"].value;
            isValid = true;

            if (!id) {
                alert("Warning: id from the record must be filled out!");
                isValid = false;
            }
            if (!isValid) {
                event.preventDefault();
            }
        }
    </script>


</head>
<body>

<h1 align="center">Welkom op de beheerders pagina!</h1></header>
<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">

            <form action="../../index.php/Insert" method="post">
                <fieldset>
                    <legend style="text-align: left">Wilt u een event toevoegen?</legend>
                    <button type="submit">Yes</button>
                </fieldset>
            </form>
            <br>

            <form action="../Delete/SaveUserInput" method="post" onsubmit="validateDelete()" id="viewDelete"
                  name="viewDelete">
                <fieldset>
                    <legend style="text-align: left">Wilt u een evenement verwijderen?</legend>

                    <p>Geef de te verwijderen ID op</p>
                    <input type="text" id="id2post" name="id2post" placeholder="id"/>
                    <br><br>
                    <button type="submit">Delete record</button>
                </fieldset>

            </form>
        </br>
            <form action="../../index.php/Update" method="post" onsubmit="validateUpdate()" id="viewUpdate"
                  name="viewDelete">
                <fieldset>
                    <legend style="text-align: left">Wilt u een evenement updaten?</legend>
                    <button type="submit">Update record</button>
                </fieldset>

            </form>

        </div>
    </div>

</body>
</html>