<?php
    require_once '../../config/db_connect.php';

    if (isset($_POST['store'])) {

        $userId = $_POST['user_id'];
        $bookId = $_POST['book_id'];

        $query = "INSERT INTO borrowers (user_id, book_id, batas_waktu) VALUES (?, ?, NOW())";

        $stmt = $connection->prepare($query);
        $stmt->execute([$userId, $bookId]);

        if ($stmt->rowCount() > 0) {
            echo "Berhasil booking buku";
        }
    }
?>
