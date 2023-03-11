<?php
function zad1_1(){
    echo ("Zad 1.1"."\r\n");
    echo ("Rzut kostka: " . rand(1, 6) . "\r\n");
}
function zad1_2($r)
{
    echo("Zad 1.2" . "\r\n");
    $p = pi();
    $l = 2 * $p * $r;
    echo("Srednica kola wynosi: " . $l . "\r\n");
}
function zad1_3($zdanie)
{
    echo("Zad 1.3" . "\r\n");
    $censor = array('zle'=>'***','kupa'=>'****','kurde'=>'*****');
    echo(strtr($zdanie,$censor)."\r\n");
}
function zad1_4(){
    echo("Zad 1.4"."\r\n");
    echo("Podaj numer Pesel: "."\r\n");
    $pesel = (int)readline();
    echo(substr($pesel,4,2)."-".substr($pesel,2,2)."-".substr($pesel,0,2)."\r\n");
}
function zad1_5(){
    echo("Zad 1.5"."\r\n");
    echo("Wpisz figure ktorej pole chcesz obliczyc: "."\r\n");
    $figura = (string)readline();
    switch ($figura){
        case "trojkat":
            echo("Podaj bok trojkata: "."\r\n");
            $a = (int)readline();
            echo("Podaj wysokosc trojakata: "."\r\n");
            $h = (int)readline();
            $p = ($a*$h)/2;
            echo("Pole powierzchni trojkata wynosi: ".$p."\r\n");
            break;
        case "prostokat":
            echo("Podaj bok prostokat: "."\r\n");
            $a = (int)readline();
            echo("Podaj drugi bok prostokat: "."\r\n");
            $b = (int)readline();
            $p = $a*$b;
            echo("Pole powierzchni prostokata wynosi: ".$p."\r\n");
            break;
        case "trapez":
            echo("Podaj bok trapezu: "."\r\n");
            $a = (int)readline();
            echo("Podaj drugi bok trapezu: "."\r\n");
            $b = (int)readline();
            echo("Podaj wysokosc trapezu: "."\r\n");
            $h = (int)readline();
            $p = (($a+$b)*$h)/2;
            echo("Pole powierzchni trapezu wynosi: ".$p."\r\n");
            break;
        default:
            echo("Musisz wybrac trojkat, trapez albo prostokat"."\r\n");
            break;
    }
}
zad1_1();
zad1_2(4);
zad1_3("Ale kurde kupa");
zad1_4();
zad1_5();
?>