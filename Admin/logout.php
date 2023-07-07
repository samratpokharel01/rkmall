<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header('location:../login.php');

}
session_destroy();
header('location:../login.php');
die();
?>