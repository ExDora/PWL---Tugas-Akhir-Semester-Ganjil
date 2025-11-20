<?php
include 'koneksi.php';

$user_id = $_POST['user_id'];
$book_id = $_POST['book_id'];

// tanggal pinjam otomatis saat ini
$tanggal_pinjam = date('Y-m-d H:i:s');

// batas waktu otomatis 7 hari
$batas_waktu = date('Y-m-d H:i:s', strtotime('+7 days'));

// status default Dipinjam
$status = 'Dipinjam';

$query = "INSERT INTO borrowers (user_id, book_id, tanggal_pinjam, batas_waktu, status)
          VALUES ('$user_id', '$book_id', '$tanggal_pinjam', '$batas_waktu', '$status')";

if (mysqli_query($conn, $query)) {
    echo "Peminjaman berhasil!";
    header("Location: list_booking.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
