<?php
include "klasy.php";
session_start();
$_SESSION["currentUser"]->guest();
header("Location:index.php");
?>