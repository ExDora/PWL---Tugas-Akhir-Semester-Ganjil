<?php
session_start();

// 🔹 panggil koneksi database dari file db-connection.php
require_once '../../config/koneksi.php'; // pastikan path-nya bener

if (isset($_POST['store'])) {
    $name = htmlspecialchars($_POST['name']);

    $query = "INSERT INTO book_categories (categories) values (?)";
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("s", $name);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // SUCCESS HANDLE
        header("Location: kategori-buku.php");
        exit();
    } else {
        // ERROR HANDLE
        echo "Error: " . $stmt->error;
    }
}

?>
