<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strona główna</title>
</head>
<body>
<table>
    <tr>
        <td><a href="index.php">Strona główna</a> </td>
        <td><a href="wszystkiesamochody.php">Wszystkie samochody</a> </td>
        <td><a href="dodajsamochod.php">Dodaj samochód</a> </td>
    </tr>
</table> <br>

<table>
    <tr>
        <td>id</td>
        <td>marka</td>
        <td>model</td>
        <td>cena</td>
    </tr>
    <?php
    $conn = mysqli_connect("localhost","root","","mojabaza");
    $zap1 = "SELECT * FROM samochody ORDER BY cena LIMIT 5";
    $wyn = mysqli_query($conn,$zap1);

    while($row = mysqli_fetch_array($wyn)){
        echo
        "
        <tr>
        <td><a href='szczegoly.php?id=${row['id']}'>${row['id']}</a></td>
        <td>${row['marka']}</td>
        <td>${row['model']}</td>
        <td>${row['cena']}</td>
        </tr>
        ";
    }
    mysqli_close($conn);
    ?>
</table>
</body>
</html>
