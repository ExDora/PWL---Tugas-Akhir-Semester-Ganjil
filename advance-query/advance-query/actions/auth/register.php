<?php
require_once '../../config/db-connection.php';

if (isset($_POST['register'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['confirm'];

    if ($password != $passwordConfirmation) {
        echo "
            <script>
                alert('Password and Password Confirmation are not match');
                window.location.href = '../../pages/register/index.php';
            </script>
        ";
    } else {
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

        $stmt = $connection->prepare($query);
        $stmt->bind_param('sss', $name, $email, $passwordHashed);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: ../../pages/login/index.php');
            exit;
        } else {
            echo "
                <script>
                    alert('Error to register new user');
                </script>
            ";

            header('Location: ../../pages/register/index.php');
            exit;
        }
    }

}
?>