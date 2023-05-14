<?php
session_start();
$_SESSION['id_uzytkownik'] = 1;
$_SESSION['logged_in'] = false;
unset($_SESSION['login']);
unset($_SESSION['id_rola']);
header("Location:index.php");
?>