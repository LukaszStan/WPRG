<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['card_number'] = $_POST['card_number'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['num_of_people'] = $_POST['num_of_people'];

    header('Location: strona2.php');
    exit();
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 1</title>
</head>
<body>
    <h1>Rezerwacja</h1>
    <form method="post">
         Podaj numer karty płatniczej: <input type="number" name="card_number" maxlength="11" min="0"><br><br>
         Imie i nazwisko zamawiającego: <input type="text" name="name"><br><br>
         Ilość osób: <input type="number" name="num_of_people" min="1"><br><br>
        <input type="submit" value="Dalej">
    </form>
</body>
</html>
