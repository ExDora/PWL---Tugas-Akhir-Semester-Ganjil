<?php
require_once '../../config/db-connection.php';

function getProducts($payload)
{
    global $connection;

    $products = [];

    $limit = 5;
    $currentPage = isset($payload['page']) ? (int)$payload['page'] : 1;
    $offset = ($currentPage -1)*$limit;

    $keyword = isset($payload['keyword']) ? $payload['keyword'] : "";
    $search = "%$keyword%";

    $query = "SELECT name, category, stock FROM products WHERE name LIKE ? LIMIT ? OFFSET ?";

    $stmt = $connection->prepare($query);
    $stmt->bind_param("sii", $search, $limit, $offset);
    $stmt->execute();

    $result = $stmt->get_result();

    while ($product = $result->fetch_assoc()) {
        $products[] = $product;
    }

    return $products;
}
?>