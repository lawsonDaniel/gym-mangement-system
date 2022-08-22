<?php 
    session_start();
    if(!isset($_SESSION['is_logged_in'])){
        header("location: ./login.php");
        exit();
    }
?>