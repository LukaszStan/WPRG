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
    <title>Sport</title>
</head>
<body>
    <h1>Portal informacyjny</h1>
    <a href="index.php">Strona główna</a>
    <a href="sport.php">Sport</a>
    <a href="tech.php">Technologia</a>
    <a href="kuchnia.php">Kuchnia</a>
    <a href="turystyka.php">Turystyka</a>
    <a href="wiadomosc.php">Wyślij wiadomość</a>
    <?php
    if (!$_SESSION['logged_in']){
        echo "
            <a href='logowanie.php'>Zaloguj się</a>
            ";
    }
    else{
        echo "
            <a href='twojewiadomosci.php'>Twoje wiadomości</a>
            <a href='panel.php'>Panel administracyjny</a>
            <a href='wyloguj.php'>Wyloguj</a>
            ";
    }
    ?>
    <h2>Artykuły sportowe:</h2>
    <?php
    $conn = mysqli_connect("localhost","root","","portal_info");
    $zap1 = "SELECT artykulyID,tytul,uzytkownicy.login AS autor,tresc,data,obrazek,dzial FROM artykuly INNER JOIN uzytkownicy ON artykuly.uzytkownicy_uzytkownikID = uzytkownicy.uzytkownikID WHERE dzial = 'Sport' ORDER BY data;";
    $wyn = mysqli_query($conn,$zap1);

    while ($row = mysqli_fetch_array($wyn)){
        echo"
        <h4>${row['tytul']}</h4>
        <img src='${row['obrazek']}'><br/><br/>
        ";
        echo substr($row['tresc'],0,200)."...<br/><br/>";
        echo "
        <a href='dalej.php?id=${row['artykulyID']}'>Czytaj dalej</a><br/><br/>
        Autor: <a href='autor.php?autor=${row['autor']}'>${row['autor']}</a>, ${row['data']}<br/><br/>
        ";
    }
    mysqli_close($conn);
    ?>
</body>
</html>
