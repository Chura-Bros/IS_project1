<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "churabros";
    
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($mysqli));


