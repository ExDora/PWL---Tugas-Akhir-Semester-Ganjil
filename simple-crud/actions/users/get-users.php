<?php
require_once '../../config/db-connection.php';

$users =[];

$query = "SELECT * from users";

$stmt = $connection->prepare($query);
$stmt->execute();

$result= $stmt->get_result();

while($user = $result->fetch_assoc()) {
    $users[] = $user;
}

?>