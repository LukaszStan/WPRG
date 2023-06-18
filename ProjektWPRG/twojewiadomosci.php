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
    <title>Twoje wiadomości</title>
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

<h2>Twoje wiadomości:</h2>
<table>
    <tr>
        <td>Nadawca</td>
        <td>Tresc</td>
        <td>Data wysłania</td>
        <td>Przeczytana</td>
    </tr>
<?php
    $conn = mysqli_connect("localhost","root","","portal_info");
    $zap1 = "SELECT * FROM wiadomosci WHERE uzytkownicy_uzytkownikID=${_SESSION['userID']};";
    $wyn = mysqli_query($conn,$zap1);

    while($row = mysqli_fetch_array($wyn)){
        echo "
            <tr>
                <td>${row['mail']}</td>
                <td>${row['tresc']}</td>
                <td>${row['data']}</td>
                <td><a href='przeczytana.php?read=${row['przeczytany']}&messID=${row['wiadomoscID']}'>";
                if($row['przeczytany']==1){
                    echo "
                            Tak</a></td>
                            </tr>
                    ";
                }
                else{
                    echo "
                        Nie</a></td>
                        </tr>
                    ";
                }
    }
mysqli_close($conn);
?>
</table>
</body>
</html>

