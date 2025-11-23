<?php
require_once '../../config/db_connect.php';

function getUsersss($payload)
{
    global $connection;

    $usersss = [];

    $limit = 5;
    $currentPage = isset($payload['page']) ? (int) $payload['page'] : 1;
    $offset = ($currentPage - 1) * $limit;

    $keyword = isset($payload['keyword']) ? $payload['keyword'] : "";
    $search = "%$keyword%";

    $query = "SELECT phone, email FROM users WHERE email LIKE :search LIMIT $limit OFFSET $offset";

    $stmt = $connection->prepare($query);
    $stmt->bindValue(':search', $search, PDO::PARAM_STR);
    $stmt->execute();

    $usersss = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $usersss;
}
?>
