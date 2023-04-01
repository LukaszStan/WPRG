<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad1</title>
</head>
<body>
    <h2>Wybierz plik</h2>
    <form method="post">
        <input type="file" name="file"><br><br>
        <input type="submit" value="ODWRÓĆ">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $file = file($_POST['file'], FILE_SKIP_EMPTY_LINES);
        for($i = count($file)-1;$i >= 0; $i--){
            echo ($file[$i]."<br>");
        }
    }
    ?>
</body>
</html>
