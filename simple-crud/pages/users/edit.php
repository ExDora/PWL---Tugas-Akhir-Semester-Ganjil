<?php
$userId = $_GET['idd'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="../../styles/users/edit.css">
</head>

<body>
    <h1>Edit User</h1>

    <div class="form-container">
        <form class="form">
            <div>
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama" required>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>


</html>