<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome op de Update pagina!</title>
    <link rel="stylesheet" href="http://192.168.2.129/~user/CodeIgniterProductieFuncties/assets/css/insert_result.css"/>

</head>
<body>
<div class="container">
    <div class="insert-result-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="" method="">
                <?php if($results = true){
                    echo "<h1>Update success!</h1>";
                    echo "Click on the homepage button to log out.";

                } else {
                    echo "<h1>Update failed!</h1>";
                    echo "Click on the homepage button to log out.";
                }?>
                <a class="btn" href="http://192.168.2.129/~user/CodeIgniterProductieFuncties/">Homepage</a>
            </form>
        </div>
    </div>

</div>



</body>
</html>