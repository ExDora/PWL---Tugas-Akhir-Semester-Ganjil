<?php
require_once '../../config/db-connection.php';
session_start();

if (isset($_POST['login'])){
    //AMBIL IMPUTAN USER
    $email = $_POST['email'];
    $password = $_POST['password'];

    //panggil perintah sql
    $query = "SELECT * FROM users where email = ?";
    //Panggil Prepare Statement
    $stmt = $connection->prepare($query); //Inisisasi Prepare Statement
    $stmt->bind_param('s',$email); //Binding nilai dengan placeholder
    $stmt->execute(); //Jalankan Query MySQL


    //Dapatkan data pengguna
    $user = $stmt->get_result()->fetch_assoc();

    // Cek Apakah data pengguna ada
    if(isset($user)) {
        // Handle jika data pengguna ada
        $isPasswordMatch = password_verify($password, $user['password']);

        if($isPasswordMatch) {
            session_regenerate_id(delete_old_session:true);
            $_SESSION['user'] = $user;

            header(header: 'Location: ../../pages/dashboard/index.php');
            exit;
        } else{
            echo "
                <script>
                    alert('Email or password wrong');
                    window.location.href = '../../pages/login/index.php';
                </script>
            ";
        }
    } else   
        echo "
                <script>
                    alert('Email or password wrong');
                    window.location.href = '../../pages/login/index.php';
                </script>
            ";
}

?>