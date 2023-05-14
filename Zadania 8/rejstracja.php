<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rejstracja</title>
</head>
<body>
<a href="index.php">Powrót</a>
<h2>Rejstracja</h2>
<form method="post">
    Login: <input type="text" name="login"><br><br>
    Hasło: <input type="password" name="pass"><br><br>
    <input type="submit" value="Zarejstruj się">
</form>
<?php
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
                echo 'Błąd, osoba o podanym loginie istnieje';
                exit();

            } else {
                $zap2 = "INSERT INTO uzytkownik(login,haslo,id_rola) VALUES('$login','$haslo','1')";
                if (!$wyn2 = mysqli_query($conn, $zap2)) {
                    echo 'Błąd, logowanie nie powiodło się';
                } else {
                    echo 'Rejstracja powiodła się';
                }
            }
            mysqli_close($conn);
        }
    }
}
?>
</body>
</html>
