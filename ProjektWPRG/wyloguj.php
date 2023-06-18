<?php
session_start();
$_SESSION['logged_in'] = false;
unset($_SESSION['userID']);
unset($_SESSION['login']);
unset($_SESSION['rolaID']);
header("Location:index.php");
?>