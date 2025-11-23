<?php
include 'koneksi.php';

$query = mysqli_query($conn, "
    SELECT borrowers.id, users.name AS user_name, books.title AS book_title,
           borrowers.tanggal_pinjam, borrowers.batas_waktu, borrowers.status
    FROM borrowers
    JOIN users ON borrowers.user_id = users.id
    JOIN books ON borrowers.book_id = books.id
");
?>

<h2>Daftar Booking / Peminjaman</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>User</th>
        <th>Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Batas Waktu</th>
        <th>Status</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['user_name']; ?></td>
            <td><?= $row['book_title']; ?></td>
            <td><?= $row['tanggal_pinjam']; ?></td>
            <td><?= $row['batas_waktu']; ?></td>
            <td><?= $row['status']; ?></td>
        </tr>
    <?php } ?>
</table>
