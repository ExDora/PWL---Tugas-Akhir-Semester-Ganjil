<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "simple_crud_11_tkj_3";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die('Error to connect database: ' . mysqli_connect_error());
}
?>