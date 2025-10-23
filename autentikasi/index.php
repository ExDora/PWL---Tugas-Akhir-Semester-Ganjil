<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ./pages/login/index.php');
} else {
    header('Location: ./pages/dashboard/index.php');
}
?>