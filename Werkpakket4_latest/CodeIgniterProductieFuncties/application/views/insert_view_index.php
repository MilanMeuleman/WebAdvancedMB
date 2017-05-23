<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome op de insert pagina!</title>
    <link rel="stylesheet" href="http://192.168.2.129/~user/CodeIgniterProductieFuncties/assets/css/style2.css"/>
   <script type="text/javascript">
       function validateIndex(){
           database = document.forms["indexForm"]["dbpost"].value;
           isValid = true;
           if (!database) {
               alert("Warning: databasename must be filled out!");
               isValid = false;
           }
           if (!isValid){
               event.preventDefault();
           }
       }
   </script>

</head>
<body>
<header></header><h1 align="center">Aan welke database toevoegen?</h1></header>

<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="../index.php/Insert2/SaveUserInputDatabase" method="post" id="indexForm" name="indexForm" onsubmit="validateIndex()">
                <h2>Welke database?</h2>
                <input type="text" name="dbpost" id="dbpost"/>
                <button type="submit">Next</button>
            </form>
        </div>
    </div>

</div>


</body>
</html>