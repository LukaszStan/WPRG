<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad4</title>
</head>
<body>
<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$allowed_ips_file = 'ips.txt';
$allowed_ips = file($allowed_ips_file, FILE_IGNORE_NEW_LINES);
if (in_array($user_ip, $allowed_ips)) {
    include('Zad3.php');
} else {
    include('Zad2.php');
}
?>
</body>
</html>