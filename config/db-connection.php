<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "exdora";

    $connection = mysqli_connect($host, $username, $password, $database);

    if(!$connection) {
        die('Error Connection to database: ' . mysqli_connect_error());
    }
?>