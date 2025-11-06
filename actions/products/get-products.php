<?php
require_once '../../config/db-connection.php';

function getUsersss($payload)
{
    global $connection;

    $usersss = [];

    $limit = 5;
    $currentPage = isset($payload['page']) ? (int) $payload['page'] : 1;
    $offset = ($currentPage - 1) * $limit;

    $keyword = isset($payload['keyword']) ? $payload['keyword'] : "";
    $search = "%$keyword%";

    $query = "SELECT phone, email FROM users WHERE email LIKE ? LIMIT $limit OFFSET $offset";

    $stmt = $connection->prepare($query);
    $stmt->bind_param('s', $search);
    $stmt->execute();

    $result = $stmt->get_result();

    while ($userss = $result->fetch_assoc()) {
        $usersss[] = $userss;
    }

    return $usersss;
}
?>