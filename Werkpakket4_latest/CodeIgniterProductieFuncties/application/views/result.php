<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Record Result</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/result.css' ?>">
</head>
<body>
<h1 align="center">Data you asked for:</h1>
<div class="container">
    <div class="result-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="" method="">
                <?php
                $table = "<table>";

                foreach($results as $row) {
                    $table = $table ."<tr>";
                    foreach ($row as $key => $value) {
                        $table = $table . "<td>$key</td>";
                    }
                    $table = $table ."</tr>";
                }
                foreach($results as $row) {
                    $table = $table ."<tr>";
                    foreach($row as $field){
                        $table = $table ."<td>". $field ."</td>";
                    }
                    $table = $table ."</tr>";
                }
                $table = $table . "</table>";
                echo $table;
                ?>
            </form>
        </div>
    </div>

</div>

</body>
</html>