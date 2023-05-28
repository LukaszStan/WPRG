<?php
include "klasy.php";
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
<a href="index.php">Powrót</a>
<h2>Logowanie</h2>
<form method="post">
    Login: <input type="text" name="login"><br><br>
    Hasło: <input type="password" name="pass"><br><br>
    <input type="submit" value="Zaloguj się">
</form>
<?php
session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'];
        $haslo = $_POST['pass'];
        if (empty($login) || empty($haslo)) {
            echo "Login oraz hasło nie mogą być puste";
            exit();
        } else {
            $conn = mysqli_connect("localhost", "root", "", "mojabaza");
            $zap1 = "SELECT COUNT(login) FROM uzytkownik WHERE login = '$login'";
            $wyn = mysqli_query($conn, $zap1);
            while ($row = mysqli_fetch_assoc($wyn)) {
                if ($row['COUNT(login)'] == 1) {
                   $_SESSION['logged_in'] = true;
                   $zap2 = "SELECT id,login,id_rola FROM uzytkownik WHERE login = '$login'";
                   $wyn2 = mysqli_query($conn, $zap2);
                   while ($row = mysqli_fetch_assoc($wyn2)){
                       $_SESSION['currentUser']->setId($row['id']);
                       $_SESSION['currentUser']->setLogged_In(true);
                       $_SESSION['currentUser']->setLogin($row['login']);
                       $_SESSION['currentUser']->setIdRola($row['id_rola']);
                   }
                   header("Location:index.php");
                }
                else{
                    echo 'Błąd, osoba o podanym loginie nie istnieje';
                    exit();
                }
            }
        }
    }
?>
</body>
</html>
