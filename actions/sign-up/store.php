<?php
    require_once '../../config/db-connection.php';

    if (isset($_POST["store"])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $password = $_POST['password'];
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

        // Check if email already exists
        $checkQuery = "SELECT COUNT(*) FROM users WHERE email = ?";
        $checkStmt = $connection->prepare($checkQuery);
        $checkStmt->execute([$email]);
        $emailExists = $checkStmt->fetchColumn();

        if ($emailExists > 0) {
            echo "Email already exists. Please use a different email.";
            exit();
        }

        $query = "INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)";
        $stmt = $connection->prepare($query);

        if (!$stmt) {
            die("❌ Gagal prepare statement: " . $connection->error);
        }

        if ($stmt->execute([$name, $email, $phone, $passwordHashed])) {
            header('Location: ../../index.php');
            exit();
        } else {
            echo "Error to store user: " . $stmt->error;
        }
    }
?>
