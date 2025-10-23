<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "advance_query";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die('Error to connect database: ' . mysqli_connect_error());
}
?>