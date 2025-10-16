<?php
    require_once '../../config/db-connection.php';

    function getUser($userId)
    {
        global $connection;

        $query = "SELECT * from users where id = ?";

        $stmt = $connection->prepare($query);
        $stmt->bind_param('i', $userId);
        $stmt->execute();

        $user = $stmt->get_result()->fetch_assoc();

        return $user;
    }
?>