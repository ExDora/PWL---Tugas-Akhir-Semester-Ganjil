<?php
session_start();

// Include koneksi database
require_once(__DIR__ . '/../../config/db_connect.php');

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

    try {
        // Query untuk cari user berdasarkan email atau nomor telepon menggunakan prepared statement
        $query = "SELECT * FROM users WHERE email = :email OR phone = :phone LIMIT 1";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $email);
        $stmt->execute();

        // Cek apakah user ditemukan
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verifikasi password dengan password_verify karena di DB sudah di-hash
            if (password_verify($password, $user['password'])) {

                // Login berhasil
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_name'] = $user['name']; 
                $_SESSION['logged_in'] = true;

                /*
                ===========================================================
                ==========   TAMBAHAN KHUSUS CEK ADMIN DISINI   ===========
                ===========================================================
                */

                if ($user['email'] === "admin@library.com") {
                    $_SESSION['role'] = "admin";
                    header("Location: ../../Halaman Lain/dashboard/main.php");
                    exit();
                }

                // Jika bukan admin → role user biasa
                $_SESSION['role'] = "user";

                /*
                =======================  END TAMBAHAN  =====================
                */

                // Jika checkbox "Remember me" dicentang
                if ($remember) {
                    // Set cookie untuk 30 hari
                    $token = bin2hex(random_bytes(32));
                    setcookie('remember_token', $token, time() + (86400 * 30), "/");

                    // Simpan token ke database (opsional, untuk keamanan lebih baik)
                    $update_query = "UPDATE users SET remember_token = :token WHERE id = :user_id";
                    $update_stmt = $connection->prepare($update_query);
                    $update_stmt->bindParam(':token', $token);
                    $update_stmt->bindParam(':user_id', $user['id']);
                    $update_stmt->execute();
                }

                // Redirect ke halaman home user
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
    } catch (PDOException $e) {
        // Error database
        header("Location: ../../Halaman Lain/sign-in/index.php?error=2");
        exit();
    }

} else {
    // Jika bukan POST request, redirect ke halaman login
    header("Location: ../../Halaman Lain/sign-in/index.php");
    exit();
}

?>
