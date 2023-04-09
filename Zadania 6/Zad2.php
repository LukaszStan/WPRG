<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 2</title>
</head>
<body>
    <?php
    $cookie_name = "visits";
    $cookie_value = 1;
    $cookie_expire = time() + (86400 * 30);

    if(isset($_COOKIE[$cookie_name])) {
        $cookie_value = $_COOKIE[$cookie_name];
        $cookie_value++;
    }

    setcookie($cookie_name, $cookie_value, $cookie_expire);

    if($cookie_value > 1) {
        echo "Witaj ponownie! To twoja " . $cookie_value . " wizyta na naszej stronie!";
    } else {
        echo "Witaj po raz pierwszy na naszej stronie!";
    }
    ?>
</body>
</html>