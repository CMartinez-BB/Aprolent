<?php 
    session_start();
    session_unset($_SESSION['admin_name']);
    session_destroy();
    header('location: ../index.php')
?>