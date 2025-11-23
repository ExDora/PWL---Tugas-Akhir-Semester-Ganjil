<?php
include 'koneksi.php';

// Ambil user
$users = mysqli_query($conn, "SELECT id, name FROM users");

// Ambil buku
$books = mysqli_query($conn, "SELECT id, title FROM books");
?>

<h2>Form Peminjaman Buku</h2>

<form action="pinjam_proses.php" method="POST">
    <label>Pilih User:</label>
    <select name="user_id" required>
        <option value="">-- Pilih User --</option>
        <?php while ($u = mysqli_fetch_assoc($users)) { ?>
            <option value="<?= $u['id']; ?>"><?= $u['name']; ?></option>
        <?php } ?>
    </select>
    <br><br>

    <label>Pilih Buku:</label>
    <select name="book_id" required>
        <option value="">-- Pilih Buku --</option>
        <?php while ($b = mysqli_fetch_assoc($books)) { ?>
            <option value="<?= $b['id']; ?>"><?= $b['title']; ?></option>
        <?php } ?>
    </select>
    <br><br>

    <button type="submit">Pinjam Buku</button>
</form>
