<?php
session_start();
session_destroy();

header('location: ../../pages/login/index.php');
exit;
?>