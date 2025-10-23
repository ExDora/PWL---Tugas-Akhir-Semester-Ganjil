<?php
require_once '../../config/db-connection.php';

$query = "SELECT COUNT(*) as total FROM products";

$stmt = $connection->prepare($query);
$stmt->execute();

$result = $stmt->get_result()->fetch_assoc();
$totalProducts = $result['total'];


?>