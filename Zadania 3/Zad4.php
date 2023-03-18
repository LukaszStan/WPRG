<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad4</title>
</head>
<body>
    <h3>Podaj pesel</h3>
    pesel:<br><br>
    <form method="post">
        <input type="number" name="pesel"> <br><br>
        <input type="submit" value="przeslij">
    </form><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pesel = $_POST['pesel'];
        echo("Urodziłeś się: ".substr($pesel,4,2)."-".substr($pesel,2,2)."-".substr($pesel,0,2)."<br>");
        if(substr($pesel,-2,1) % 2 == 0){
            echo("Jesteś kobietą");
        }
        else{
            echo("Jesteś mężczyzną");
        }
    }
    ?>
</body>
</html>
