<?php
$host = "localhost";
$user = "root"; // default Laragon
$pass = "";     // kalau kamu kasih password di MySQL, isi di sini
$dbname = "library_db"; // pastikan database ini udah ada

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
