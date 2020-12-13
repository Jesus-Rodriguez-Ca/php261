<?php
// In order to view this page, a user must have registered and logged in,
// otherwise, he/she must be directed to do so!!!
session_start();
if(!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

include('includes/header.php');
?>