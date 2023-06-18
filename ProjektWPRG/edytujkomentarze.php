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
    <title>Edytuj komentarze</title>
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

<h2>Edytuj komentazre</h2>
<table>
    <tr>
        <td>ID</td>
        <td>Nick</td>
        <td>Treść</td>
        <td>Data</td>
    </tr>
<?php
    $conn = mysqli_connect("localhost","root","","portal_info");
    $zap = "SELECT * FROM komentarze WHERE artykuly_artykulyID=$artykulID;";
    $wyn = mysqli_query($conn, $zap);
    while ($row = mysqli_fetch_array($wyn)){
        echo "
            <tr>
                <td>${row['komentarzID']}</td>
                <td>${row['nick']}</td>
                <td>${row['tresc']}</td>
                <td>${row['data']}</td>
                <td><a href='usunkomentarz.php?komentarzID=${row['komentarzID']}&artykulID=$artykulID'>Usuń</a></td>
            </tr>
        ";
    }
    mysqli_close($conn);
?>
</table>
</body>
</html>

