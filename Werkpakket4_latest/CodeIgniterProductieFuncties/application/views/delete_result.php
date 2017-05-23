<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Welkom op de delete pagina!</title>
    <link rel="stylesheet" href="http://192.168.2.129/~user/CodeIgniterProductieFuncties/assets/css/delete.css"/>
</head>

<body>

<div class="container">
    <div class="delete-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="" method="">
                <?php if ($result == true) {
                    echo "<h1>Delete Succes!</h1>";
                } else {
                    echo "<h1>No rows were affected!</h1>";
                }
                ?>
                <a class="btn" href="http://192.168.2.129/~user/CodeIgniterProductieFuncties/">Homepage</a>
            </form>
        </div>
    </div>

</div>


</body>
</html>
