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
    <title>Panel administracyjny</title>
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

<h2>Panel administracyjny</h2>
<a href='dodajartykul.php'>Dodaj artykuł</a>
<?php
if(!($_SESSION['rolaID']==1)){
    echo "
    <a href='resetujhaslo.php'>Resetuj hasło</a>
    ";
}
?>
<h3>Artykuly</h3>
<table>
    <tr>
        <td>ID</td>
        <td>Tytul</td>
        <td>Autor</td>
        <td>Data</td>
        <td>Dział</td>
    </tr>
    <?php
    $conn = mysqli_connect("localhost","root","","portal_info");
    if(!($_SESSION['rolaID']==1)) {
        $zap2 = "SELECT artykulyID,tytul,uzytkownicy.login AS autor, data, dzial FROM artykuly INNER JOIN uzytkownicy ON uzytkownicy_uzytkownikID =uzytkownicy.uzytkownikID  WHERE uzytkownicy_uzytkownikID = '${_SESSION['userID']}'";
        $wyn2 = mysqli_query($conn, $zap2);
        while ($row = mysqli_fetch_array($wyn2)) {
            echo "
        <tr>
        <td>${row['artykulyID']}</td>
        <td>${row['tytul']}</td>
        <td>${row['autor']}</td>
        <td>${row['data']}</td>
        <td>${row['dzial']}</td>
        <td><a href='usunartykul.php?artykulID=${row['artykulyID']}'>Usuń</a> </td>
        <td><a href='edytujartykul.php?artykulID=${row['artykulyID']}'>Edytuj</a> </td>
        </tr>
        ";
        }
    }
    else{
        $zap3 = "SELECT artykulyID,tytul,uzytkownicy.login AS autor, data, dzial FROM artykuly INNER JOIN uzytkownicy ON uzytkownicy_uzytkownikID =uzytkownicy.uzytkownikID";
        $wyn3 = mysqli_query($conn, $zap3);
        while ($row = mysqli_fetch_array($wyn3)){
            echo "
            <tr>
            <td>${row['artykulyID']}</td>
            <td>${row['tytul']}</td>
            <td>${row['autor']}</td>
            <td>${row['data']}</td>
            <td>${row['dzial']}</td>
            <td><a href='usunartykul.php?artykulID=${row['artykulyID']}'>Usuń</a> </td>
            <td><a href='edytujartykul.php?artykulID=${row['artykulyID']}'>Edytuj</a> </td>
            <td><a href='edytujkomentarze.php?artykulID=${row['artykulyID']}'>Komentarze</a></td>
            </tr>
            ";
        }
    }
    mysqli_close($conn);
    ?>
</table>
</body>
</html>
