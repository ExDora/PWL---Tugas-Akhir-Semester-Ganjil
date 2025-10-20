<?php
    require_once '../../config/db-connection.php';

    if(isset($_POST["store"])) {
        $phone = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']); 
        $password = ($_POST['password']);
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

        $stmt = $connection->prepare($query);
        $stmt->bind_param('sss', $phone, $email, $passwordHashed);
        $stmt-> execute();

        if($stmt->affected_rows > 0) {
            header('Location: ../../index.php');
            exit();
        } else {
            echo 'Error to store user: ' . $stmt->error;
        }
    }
?>