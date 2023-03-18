<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad3</title>
</head>
<body>
<h3>OBLICZANIE DATY WIELKANOCY</h3>
PODAJ ROK <br><br>
<form method="post">
    <input type="number" name="rok">
    <input type="submit" value="OBLICZ">
</form> <br>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        function wielkanoc($x,$y){
            $a = $_POST['rok'] % 19;
            $b = $_POST['rok'] % 4;
            $c = $_POST['rok'] % 7;
            $d = ((19 * $a) + $x) % 30;
            $f = ((2 * $b) + (4 * $c) + (6 * $d) + $y) % 7;
            if( $f == 6 && $d == 29){
                echo("Wielkanoc jest 26 kwietnia");
            }
            else if($f == 6 && $d == 28 && (((11 * $x) + 11) % 30 < 19)){
                echo("Wielkanoc jest 18 kwietnia");
            }
            else if( ($d + $f) < 10 ){
                echo("Wielkanoc jest ". (22 + $d + $f)." marca");
            }
            else if( ($d + $f) > 9 ){
                echo("Wielkanoc jest ".($d + $f - 9)." kwietnia");
            }
        };
        if($_POST['rok'] >= 1 && $_POST['rok'] <= 1582){
            $x=15; $y=6;
            wielkanoc($x,$y);
        }
        else if ($_POST['rok'] >= 1583 && $_POST['rok'] <= 1699){
            $x=22; $y=2;
            wielkanoc($x,$y);
        }
        else if ($_POST['rok'] >= 1700 && $_POST['rok'] <= 1799){
            $x=23; $y=3;
            wielkanoc($x,$y);
        }
        else if ($_POST['rok'] >= 1800 && $_POST['rok'] <= 1899){
            $x=23; $y=4;
            wielkanoc($x,$y);
        }
        else if ($_POST['rok'] >= 1900 && $_POST['rok'] <= 2099){
            $x=24; $y=5;
            wielkanoc($x,$y);
        }
        else if ($_POST['rok'] >= 2100 && $_POST['rok'] <= 2199){
            $x=24; $y=6;
            wielkanoc($x,$y);
        }
        else{
            echo('Nieprawidłowy rok');
        }
    }
?>
</body>
</html>
