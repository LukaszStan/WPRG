<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad2</title>
</head>
<body>
    <h2>Witaj na stronie !</h2>
    liczba odwiedzin strony:
    <?php
    error_reporting(E_ERROR | E_PARSE);
        if(!$fd = fopen('licznik.txt','r+')){
            $f = fopen('licznik.txt', 'wb');
            fwrite($f,'1');
            fclose($f);
            echo(1);
        }
        else{
            $counter =(int)fread($fd,20);
            fclose($fd);
            $counter++;
            echo($counter);
            $handle = fopen("licznik.txt", "w" );
            fwrite($handle,$counter);
            fclose ($handle);
        }
    ?>
</body>
</html>
