<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MojeSamochody</title>
</head>
<body>
<a href="index.php">Powrót</a>
<table>
    <tr>
        <td>id</td>
        <td>marka</td>
        <td>model</td>
        <td>cena</td>
        <td>rok</td>
        <td>opis</td>
    </tr>
<?php
session_start();
$id_uzytkownika = $_SESSION['id_uzytkownik'];
$conn = mysqli_connect("localhost","root","","mojabaza");
if ($_SESSION['id_rola'] == 1) {
    $zap1 = "SELECT * FROM samochody WHERE id_uzytkownik=$id_uzytkownika";
    $wyn = mysqli_query($conn,$zap1);

    while($row = mysqli_fetch_array($wyn)){
        echo
        "
        <tr>
        <td>${row['id']}</td>
        <td>${row['marka']}</td>
        <td>${row['model']}</td>
        <td>${row['cena']}</td>
        <td>${row['rok']}</td>
        <td>${row['opis']}</td>
        <td><a href='edycja.php?id=${row['id']}'>edytuj</a></td>
        </tr>
        ";
    }
    mysqli_close($conn);
} else {
    $zap2 = "SELECT * FROM samochody";
    $wyn = mysqli_query($conn,$zap2);

    while($row = mysqli_fetch_array($wyn)){
        echo
        "
        <tr>
        <td>${row['id']}</td>
        <td>${row['marka']}</td>
        <td>${row['model']}</td>
        <td>${row['cena']}</td>
        <td>${row['rok']}</td>
        <td>${row['opis']}</td>
        <td><a href='edycja.php?id=${row['id']}'>edytuj</a></td>
        </tr>
        ";
    }
    mysqli_close($conn);
}
?>
</table>
</body>
</html>
