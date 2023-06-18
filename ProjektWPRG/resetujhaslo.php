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
    <title>Resetuj hasło</title>
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

<h2>Resetuj hasło</h2>
<form method="post">
    Stare hasło: <input type="password" name="oldpass"> <br/><br/>
    Nowe hasło: <input type="password" name="newpass">  <br/><br/>
    Powtórz nowe hasło: <input type="password" name="newpass2"> <br/><br/>
    <input type="submit" value="Resetuj"><br/><br/>
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $newpass2 = $_POST['newpass2'];
        if(empty($oldpass) || empty($newpass) || empty($newpass2)){
            echo "Jedno lub więcej z pól jest puste";
        }
        else{
            if($newpass==$newpass2){
                $conn = mysqli_connect("localhost","root","","portal_info");
                $zap = "UPDATE uzytkownicy SET haslo='$newpass' WHERE uzytkownikID=${_SESSION['userID']}";
                if (!$wyn = mysqli_query($conn, $zap)){
                    echo "Błąd, nie udało się zmienić hasła";
                }
                else{
                    echo "Hasło zostało zmienione poprawnie";
                }
            }
            else{
                echo "Nowe hasła nie są takie same, spróbuj ponownie";
            }
        }
    }
?>
</body>
</html>

