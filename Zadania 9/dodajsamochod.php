<?php
include "klasy.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodaj samochód</title>
</head>
<body>
<a href="wszystkiesamochody.php">Powrót</a>
<h2>Dodaj samochód</h2>
<form method="post">
    Marka: <input type="text" name="marka"><br><br>
    Model: <input type="text" name="model"><br><br>
    Cena:  <input type="number" name="cena" min="1"><br><br>
    Rok: <input type="number" name="rok" min="1886"><br><br>
    Opis: <input type="text" name="opis"><br><br>
    <input type="submit" value="Dodaj">
    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $marka = $_POST['marka'];
        $model = $_POST['model'];
        $cena = $_POST['cena'];
        $rok = $_POST['rok'];
        $opis = $_POST['opis'];
        $id_uzytkownika = $_SESSION['currentUser']->getId();

        $conn = mysqli_connect("localhost","root","","mojabaza");
        $zap1 = "INSERT INTO samochody(marka,model,cena,rok,opis,id_uzytkownik) VALUES ('${marka}','${model}','${cena}','${rok}','${opis}','${id_uzytkownika}')";
        if(!$wyn = mysqli_query($conn,$zap1)){
            echo 'Błąd, auto nie zostało dodane';
        }
        else{
            echo 'Auto zostało dodane do bazy';
        }
        mysqli_close($conn);
    }
    ?>
</form>
</body>
</html>
