<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 3</title>
</head>
<body>
    <?php
    $cookie_expire = time() + (86400 * 30);

    if (isset($_COOKIE['odwiedziny'])) {
        $cookie_value = $_COOKIE['odwiedziny'];
    } else {
        $cookie_value = 0;
    }

    if (!isset($_COOKIE['odwiedziny_licznik'])) {
        $cookie_value++;
        setcookie('odwiedziny', $cookie_value, $cookie_expire);
        setcookie('odwiedziny_licznik', true, $cookie_expire);
    }

    echo "Witaj! To twoja " . $cookie_value . " wizyta na naszej stronie!";
    ?>
</body>
</html>
