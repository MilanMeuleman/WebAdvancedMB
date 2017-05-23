<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>

<html >
<head>
    <meta charset="UTF-8">
    <title>Welkom op de login pagina!</title>

    <link rel="stylesheet" href="http://192.168.2.129/~user/CodeIgniterProductieFuncties/assets/css/style2.css"/>

    <script href="assets/js/login.js" rel="script" type="text/javascript"></script>
    <script type="text/javascript">


        function validateForm() {
             username = document.forms["loginForm"]["username"].value;
             password = document.forms["loginForm"]["password"].value;
             isValid = true;
            if (!username) {
                alert("Warning: username must be filled out!");
                isValid = false;
            }

            if (!password) {
                alert("Warning: password must be filled out!");
                isValid = false;
            }
            if (!isValid) {
                event.preventDefault();
            }
        }
    </script>

</head>

<body>

<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="index.php/Login/CheckLogin" onsubmit="validateForm()" method="POST" id="loginForm" name="loginForm">

                    <input name="username" type="text" placeholder="username" id="username" style="border-bottom: solid 2px lightgray"/>

                    <input type="password" placeholder="password" id="password" name="password">

                    <button class="btn btn-info btn-block login" type="submit"">Login</button>

                </form>
        </div>
    </div>

</div>
</body>
</html>
