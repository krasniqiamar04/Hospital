<?php include_once 'inc/header.php';
    session_start();
    session_destroy();

    header("Location: index.php");
?>
