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
    <title>Logowanie</title>
</head>
<body>
<h1>Portal informacyjny</h1>
<a href="index.php">Strona główna</a>
<a href="sport.php">Sport</a>
<a href="tech.php">Technologia</a>
<a href="kuchnia.php">Kuchnia</a>
<a href="turystyka.php">Turystyka</a>
<a href="wiadomosc.php">Wyślij wiadomość</a>
<a href="logowanie.php">Zaloguj się</a>
<h2>Zaloguj się</h2>
<form method="post">
    Login: <input type="text" name="login"><br/><br/>
    Hasło: <input type="password" name="haslo"><br/><br/>
    <input type="submit" value="Zaloguj"><br/><br/>
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['login']) || empty($_POST['haslo'])){
            echo "Pole loginu lub hasła jest puste";
        }
        else{
            $login = $_POST['login'];
            $pass = $_POST['haslo'];
            $conn = mysqli_connect("localhost", "root", "", "portal_info");
            $zap1 = "SELECT * FROM uzytkownicy WHERE login = '$login' AND haslo='$pass'";
            $wyn = mysqli_query($conn,$zap1);
            if(mysqli_num_rows($wyn) != 0){
                $_SESSION['logged_in'] = true;
                while ($row = mysqli_fetch_array($wyn)){
                    $_SESSION['userID'] = $row['uzytkownikID'];
                    $_SESSION['login'] = $row['login'];
                    $_SESSION['rolaID'] = $row['rola_rolaID'];
                }
                header("Location: index.php");
            }
            else{
                echo "Login, bądź hasło nie są poprawne spróbuj ponownie";
            }
        }
    }
?>
</body>
</html>

