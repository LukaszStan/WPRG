<?php
session_start();
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 1</title>
</head>
<body>
    <h1>Rezerwacja dla <?php echo($_SESSION['name']); ?></h1>
    <?php
    echo("Numer karty płatniczej: ".$_SESSION['card_number']."<br>");
    echo("Ilosc osob: ".$_SESSION['num_of_people']);
    for ($i = 1; $i <= $_SESSION['num_of_people']; $i++):
    ?>
    <h2>Osoba <?php echo $i; ?></h2>
        Imię i nazwisko: <?php echo ($_SESSION['person_'.$i.'_name']); ?><br><br>
        Wiek: <?php echo ($_SESSION['person_'.$i.'_age']); ?><br>
    <?php
    endfor;
    session_destroy();
    ?>
</body>
</html>
