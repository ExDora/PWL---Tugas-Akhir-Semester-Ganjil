<?php
$host = "localhost";
$user = "root"; // default Laragon
$pass = "";     // kalau kamu kasih password di MySQL, isi di sini
$dbname = "library_db"; // pastikan database ini udah ada

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
