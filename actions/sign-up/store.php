<?php
    require_once '../../config/db-connection.php';

    if (isset($_POST["store"])) {
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $password = $_POST['password'];
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO users (email, phone, password) VALUES (?, ?, ?)";
        $stmt = $connection->prepare($query);

        if (!$stmt) {
            die("❌ Gagal prepare statement: " . $connection->error);
        }

        $stmt->bind_param('sss', $email, $phone, $passwordHashed);

        if ($stmt->execute()) {
            header('Location: ../../index.php');
            exit();
        } else {
            echo "Error to store user: " . $stmt->error;
        }
    }
?>
