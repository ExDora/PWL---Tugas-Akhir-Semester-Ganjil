<?php
require_once '../../config/db_connect.php';

$query = "SELECT COUNT(*) as total FROM users";

$stmt = $connection->prepare($query);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
$totalUsersss = $result['total'];
?>
