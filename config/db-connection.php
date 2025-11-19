<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "library_db";

    try {
        $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die('Error Connection to database: ' . $e->getMessage());
    }
?>
