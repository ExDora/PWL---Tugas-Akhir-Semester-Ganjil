<?php
session_start();

// Include koneksi database
require_once(__DIR__ . '/../../config/db-connection.php');

// Cek apakah form disubmit dengan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil input
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;

    // Validasi input tidak kosong
    if (empty($email) || empty($password)) {
        header("Location: ../../Halaman Lain/sign-in/index.php?error=1");
        exit();
    }

    // Query untuk cari user berdasarkan email atau nomor telepon
    $query = "SELECT * FROM users WHERE email = ? OR phone = ? LIMIT 1";
    $stmt = $connection->prepare($query);
    $stmt->execute([$email, $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Cek apakah user ditemukan
    if ($user) {

        // Verifikasi password dengan password_verify karena di DB sudah di-hash
        if (password_verify($password, $user['password'])) {
            // Login berhasil

            // Set session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['name']; // sesuaikan dengan kolom nama di database
            $_SESSION['logged_in'] = true;

            // Jika checkbox "Remember me" dicentang
            if ($remember) {
                // Set cookie untuk 30 hari
                $token = bin2hex(random_bytes(32));
                setcookie('remember_token', $token, time() + (86400 * 30), "/");

                // Simpan token ke database (opsional, untuk keamanan lebih baik)
                $update_query = "UPDATE users SET remember_token = ? WHERE id = ?";
                $stmt_update = $connection->prepare($update_query);
                $stmt_update->execute([$token, $user['id']]);
            }

            // Redirect ke halaman dashboard/home
            header("Location: ../../index.php");
            exit();

        } else {
            // Password salah
            header("Location: ../../Halaman Lain/sign-in/index.php?error=1");
            exit();
        }
    } else {
        // User tidak ditemukan
        header("Location: ../../Halaman Lain/sign-in/index.php?error=1");
        exit();
    }

} else {
    // Jika bukan POST request, redirect ke halaman login
    header("Location: ../../Halaman Lain/sign-in/index.php");
    exit();
}
?>
