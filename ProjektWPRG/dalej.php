<?php
session_start();
date_default_timezone_set('Europe/Warsaw');
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Czytaj dalej</title>
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
    <?php
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","portal_info");
        $zap1 = "SELECT artykulyID,tytul,uzytkownicy.login AS autor,tresc,data,obrazek,dzial FROM artykuly INNER JOIN uzytkownicy ON artykuly.uzytkownicy_uzytkownikID = uzytkownicy.uzytkownikID WHERE artykulyID = $id ORDER BY data DESC;";
        $wyn = mysqli_query($conn,$zap1);

        while ($row = mysqli_fetch_array($wyn)){
            echo "
                <h4>${row['tytul']}</h4>
                <img src='${row['obrazek']}'><br/><br/>
                ${row['tresc']}<br/><br/>
                Autor: <a href='autor.php?autor=${row['autor']}'>${row['autor']}</a>, ${row['data']}<br/><br/>
            ";
        }
    ?>
    <h5>Dodaj komentarz:</h5>
    <form method="post">
        Nick: <input type="text" name="nick" maxlength="25"><br/><br/>
        Tresc: <textarea rows="4" cols="40" name="tresc"></textarea><br/><br/>
        <input type="submit" value="Dodaj">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(empty($_POST['nick']) || empty($_POST['tresc'])) {
                echo "Pole z nickiem lub treścią jest puste";
            }
            else{
                $nick = $_POST['nick'];
                $tresc = $_POST['tresc'];
                $data = date('Y-m-d');

                $zap3 = "INSERT INTO komentarze(nick,tresc,data,artykuly_artykulyID) VALUES ('${nick}','${tresc}','${data}',${id})";
                if (!$wyn3 = mysqli_query($conn, $zap3)) {
                    echo 'Błąd, nie udało się dodać komentarza';
                } else {
                    header("Location: dalej.php?id=$id");
                }
            }
        }
    ?>
    <h5>Komentarze</h5>
    <?php
        $zap2 = "SELECT * FROM komentarze WHERE artykuly_artykulyID = $id ORDER BY data DESC";
        $wyn2 = mysqli_query($conn,$zap2);
        while ($row = mysqli_fetch_array($wyn2)){
            echo"
                ${row['nick']} <br/>
                W dniu ${row['data']} napisał: <br/>
                ${row['tresc']} <br/><br/>
            ";
        }
        mysqli_close($conn);
    ?>
</body>
</html>
