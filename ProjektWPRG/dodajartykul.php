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
    <title>Dodaj artykuł</title>
</head>
<body>
<h1>Portal informacyjny</h1>
<a href="index.php">Strona główna</a>
<a href="sport.php">Sport</a>
<a href="tech.php">Technologia</a>
<a href="kuchnia.php">Kuchnia</a>
<a href="turystyka.php">Turystyka</a>
<a href="wiadomosc.php">Wyślij wiadomość</a>
<a href='twojewiadomosci.php'>Twoje wiadomości</a>
<a href='panel.php'>Panel administracyjny</a>
<a href='wyloguj.php'>Wyloguj</a>

<h2>Dodaj nowy artykuł</h2>
<form method="post">
    Tytuł: <input type="text" name="tytul"><br/><br/>
    Tresc: <textarea rows='10' cols='100' name='tresc'></textarea><br/><br/>
    Obrazek: <input type="text" name="obrazek"><br/><br/>
    Dział: <input type="text" name="dzial"><br/><br/>
    <input type="submit" value="Dodaj">
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $tytul = $_POST['tytul'];
        $autor = $_SESSION['userID'];
        $tresc = $_POST['tresc'];
        $data = date('Y-m-d');
        $obrazek = $_POST['obrazek'];
        $dzial = $_POST['dzial'];
        if(empty($tytul) || empty($tresc) || empty($dzial)){
            echo "Pola tytuł, treść i dział nie mogą być puste";
        }
        else{
            $conn = mysqli_connect("localhost","root","","portal_info");
            $zap = "INSERT INTO artykuly(tytul,uzytkownicy_uzytkownikID,tresc,data,obrazek,dzial) VALUES ('$tytul',$autor,'$tresc','$data','$obrazek','$dzial')";
            if (!$wyn = mysqli_query($conn, $zap)){
                echo "Błąd, nie udało się dodać artykułu";
            }
            else{
                echo "Artykuł został dodany pomyślnie";
            }
        }
    }
?>
</body>
</html>

