<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edycja</title>
</head>
<body>
<a href="wszystkiesamochody.php">Powrót</a>
<h2>Edytuj samochód</h2>
<form method="post">
    <?php
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost","root","","mojabaza");
    $zap1 = "SELECT * FROM samochody WHERE id=$id";
    $wyn = mysqli_query($conn,$zap1);

    while($row = mysqli_fetch_array($wyn)){
        echo
        "
        Marka: <input type='text' name='marka' value='${row['marka']}'><br><br>
        Model: <input type='text' name='model' value='${row['model']}'><br><br>
        Cena:  <input type='number' name='cena' min='1' value='${row['cena']}'><br><br>
        Rok: <input type='number' name='rok' min='1886' value='${row['rok']}'><br><br>
        Opis: <input type='text' name='opis' value='${row['opis']}'><br><br>
        ";
    }
    ?>
    <input type="submit" value="Edytuj">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $marka = $_POST['marka'];
        $model = $_POST['model'];
        $cena = $_POST['cena'];
        $rok = $_POST['rok'];
        $opis = $_POST['opis'];

        $zap2 = "UPDATE samochody SET marka='$marka', model='$model', cena ='$cena', rok='$rok', opis='$opis' WHERE id = '$id' ";
        if(!$wyn = mysqli_query($conn,$zap2)){
            echo 'Błąd, auto nie zostało zedytowane';
        }
        else{
            echo 'Auto zostało zedytowane';
            header("Location: mojesamochody.php");
        }
        mysqli_close($conn);
    }
    ?>
</form>
</body>
</html>
