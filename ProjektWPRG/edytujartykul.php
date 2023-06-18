<?php
session_start();
$artykulID = $_GET['artykulID'];
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edytuj artykuł</title>
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
<h2>Edytuj artykuł:</h2>
<form method="post">
<?php
$conn = mysqli_connect("localhost","root","","portal_info");
$zap1 = "SELECT tytul,uzytkownicy.login AS autor,tresc,data,obrazek,dzial FROM artykuly INNER JOIN uzytkownicy ON uzytkownicy_uzytkownikID = uzytkownicy.uzytkownikID WHERE artykulyID=$artykulID;";
$wyn = mysqli_query($conn,$zap1);
while ($row = mysqli_fetch_array($wyn)){
    echo "
    Tytuł: <input type='text' name='tytul' value='${row['tytul']}'><br/><br/>
    Treść: <textarea rows='10' cols='100' name='tresc'>${row['tresc']}</textarea><br/><br/>
    Autor: <input type='text' name='autor' value='${row['autor']}'><br/><br/>
    Data: <input type='date' name='data' value='${row['data']}'><br/><br/>
    Obrazek: <input type='text' name='obrazek' value='${row['obrazek']}'><br/><br/>
    Dział: <input type='text' name='dzial' value='${row['dzial']}'><br/><br/>
    ";
}
?>
    <input type="submit" value="Edytuj">
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['tytul']) || empty($_POST['tresc']) || empty($_POST['autor']) || empty($_POST['data']) || empty($_POST['dzial'])){
            echo "Pola tytuł, treść, autor, data oraz dział nie mogą być puste";
        }
        else{
            $zap2 = "SELECT uzytkownikID FROM uzytkownicy WHERE login='${_POST['autor']}'";
            $wyn2 = mysqli_query($conn,$zap2);
            if(mysqli_num_rows($wyn2) != 0){
                while ($row = mysqli_fetch_array($wyn2)){
                    $autorID = $row['uzytkownikID'];
                }
                $zap3 = "UPDATE artykuly SET tytul='${_POST['tytul']}',uzytkownicy_uzytkownikID=$autorID,tresc='${_POST['tresc']}',data='${_POST['data']}',obrazek='${_POST['obrazek']}',dzial='${_POST['dzial']}' WHERE artykulyID=$artykulID";
                if (!$wyn3 = mysqli_query($conn, $zap3)) {
                    echo 'Błąd, nie udało się zedytować artykułu';
                } else {
                    header("Location: panel.php");
                }
            }
            else{
                echo "Dany autor nie istnieje";
            }
        }
    }
    mysqli_close($conn);
?>
</body>
</html>
