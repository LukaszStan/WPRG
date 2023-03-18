<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad5</title>
</head>
<body>
    <h3>Zaloguj się</h3>
    <form method="post">
        Login: <input type="text" name="user" required> <br><br>
        Hasło: <input type="password" name="pass" minlength="8" required> <br><br>
        <input type="submit" value="Prześlij">
    </form><br>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $login = $_POST['user'];
            $pass = $_POST['pass'];
            if($login=='admin' && $pass==='abcd123456'){
                echo("Zalogowany jako admin");
            }
            else if($login=='admin' && $pass!=='abcd123456'){
                echo("Niepoprawne hasło do konta admin");
            }
            else{
                echo("Taki użytkownik nie istnieje");
            }
        }
    ?>
</body>
</html>
