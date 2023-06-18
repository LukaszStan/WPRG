<?php
session_start();
date_default_timezone_set('Europe/Warsaw');
$data = date('Y-m-d');
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wyślij Wiadomość</title>
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
    <h2>Wyślij wiadomość</h2>
    <form method="post">
        Odbiorca: <input type="text" name="odbiorca"></textarea><br/><br/>
        Mail nadawcy: <input type="text" name="mail"><br/><br/>
        Treść: <textarea rows="10" cols="100" name="tresc"></textarea><br/><br/>
        <input type="submit" value="Wyślij">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['odbiorca']) || empty($_POST['tresc']) || empty($_POST['mail'])){
            echo "Pole z odbiorcą,mailem nadawcy lub treśćią jest puste";
        }
        else{
            $odbiorca = $_POST['odbiorca'];
            $tresc = $_POST['tresc'];
            $mail = $_POST['mail'];
            $conn = mysqli_connect("localhost", "root", "", "portal_info");
            $zap1 = "SELECT login FROM uzytkownicy WHERE login = '$odbiorca';";
            $wyn = mysqli_query($conn,$zap1);
            if(mysqli_num_rows($wyn) != 0) {
                $zap2 = "SELECT uzytkownikID FROM uzytkownicy WHERE login = '$odbiorca'";
                $wyn2 = mysqli_query($conn, $zap2);
                while ($row = mysqli_fetch_array($wyn2)){
                    $id = $row['uzytkownikID'];
                }
                $zap3 = "INSERT INTO wiadomosci(uzytkownicy_uzytkownikID,mail,tresc,data,przeczytany) VALUES ($id,'$mail','$tresc','$data',0)";
                if (!$wyn3 = mysqli_query($conn, $zap3)){
                    echo "Nie udało się wysłać wiadomości";
                }
                else{
                    echo "Wiadomość została wysłana";
                }
            }
            else{
                echo "Dany użytkownik nie istnieje";
            }
        }
    }
    ?>
</body>
</html>
