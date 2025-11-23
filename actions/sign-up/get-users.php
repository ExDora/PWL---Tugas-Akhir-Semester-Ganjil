<?php
    require_once '../../config/db_connect.php';

function getUsers($payload = [])
{
    global $connection;
    $users = [];
    $limit = 5;
    $currentPage = isset($payload['page']) ? (int) $payload['page'] : 1;
    $offset = ($currentPage - 1) * $limit;
    $keyword = isset($payload['keyword']) ? $payload['keyword'] : "";
    $search = "%$keyword%";
    $query = "SELECT * FROM users WHERE email LIKE :search LIMIT :limit OFFSET :offset";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':search', $search, PDO::PARAM_STR);
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>
