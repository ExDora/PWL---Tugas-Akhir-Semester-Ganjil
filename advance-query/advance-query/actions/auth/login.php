<?php
require_once '../../config/db-connection.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * from users where email = ?";

    $stmt = $connection->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();

    $user = $stmt->get_result()->fetch_assoc();

    if (isset($user)) {
        $isPasswordMatch = password_verify($password, $user['password']);

        if ($isPasswordMatch) {
            session_regenerate_id(true);
            $_SESSION['user'] = $user;
            header('Location: ../../pages/dashboard/index.php');
            exit;
        } else {
            echo "
                <script>
                    alert('Email or password wrong');
                    window.location.href = '../../pages/login/index.php';
                </script>
            ";
        }

    } else {
        echo "
            <script>
                alert('Email or password wrong');
                window.location.href = '../../pages/login/index.php';
            </script>
        ";
    }

}

?>