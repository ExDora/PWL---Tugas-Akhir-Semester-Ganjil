<?php
    require_once '../../config/db_connect.php';


    if (isset($_POST['store'])) {

        $userId = $_POST['user_id'];
        $bookId = $_POST['book_id'];

        $query = "insert into borrowers (user_id, book_id, batas_waktu) values (?,?,NOW())";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('ii',  $userId, $bookId);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Berhasil booking buku";
        }
    }

?>