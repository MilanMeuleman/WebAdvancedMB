<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home page</title>

    <style>

        body, html{ margin:0; padding: 0;}

        body{
            background-color: #EEE;
        }

        h1, h2, h3, h4, p, a, li, ul{
            font-family: arial, sans-serif;
            color: black;
            text-decoration: none;
        }

        #nav{
            margin: 50px auto 0 auto;
            width: 1000px;
            background: #888;
            height: 15px;
            padding: 20px;
        }

        #nav a:hover{
            color: red;
        }

        #nav ul{
            list-style-type: none;
            float: left;
            margin: 0 50px;

        }

        #nav ul li{
            display: inline;

        }

        #content{
            width: 1000px;
            min-height: 100%;
            margin: 0 auto;
            padding: 20px
        }

        #footer{
            width: 500px;
            height: 15px;
            margin: 0 auto;
            padding: 20px;
        }

        #footer p{
            color: #777;
        }
    </style>


</head>
<body>

<div id="container">

    <div id ="nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <div id="content">
        <h1>Home Page</h1>
        <p>Welcome</p>
        <p>Lorem ipsum dolor sit amet, sit phasellus eros fermentum lobortis etiam, mattis dapibus odio porta gravida libero, ut cursus nemo nam, quo ipsum eleifend fermentum.
            Libero ornare in velit cras, quam auctor, ligula volutpat. Lacus cras urna potenti, vestibulum nisl lacus, aliquam at turpis, arcu sem omnis lobortis luctus, cursus at.
            Fusce amet eros urna erat aliquam mauris, nec enim nunc massa tincidunt sollicitudin varius, nulla curabitur praesent mauris, nisl duis condimentum felis, volutpat aenean ut.
            Ipsum rutrum a praesent, non nisl tortor lacinia. Nunc pellentesque luctus nunc aenean, iaculis nulla mauris, vitae tincidunt dictum, in ut et non, et maecenas facilisi turpis.
            Non non libero pretium ligula morbi, litora sed, luctus nibh est at morbi id.
            Turpis blandit sit, sed semper. Et lobortis arcu quisque, fermentum phasellus volutpat lectus donec duis, eleifend ultricies, tempor cras odio ultricies ipsum pellentesque.</p>
    </div>

    <div id="footer">
        <p>Copyright (c) 2017 vbCodeIgniter.com. All rights reserved.</p>
    </div>
</div>

</body>
</html>