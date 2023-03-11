<?php
function zad3_1(){
    echo("Zad 3.1"."\r\n");
    $random_number_array = range(0, 100);
    shuffle($random_number_array );
    $random_number_array = array_slice($random_number_array ,0,10);
    print_r($random_number_array);
    $res = 0;
    echo("Pętla for"."\r\n");
    for($i = 0; $i < 10; $i++) {
        if($res < $random_number_array[$i])
            $res = $random_number_array[$i];
    }
    echo("Maksymalny element tablicy: ".$res."\r\n");
    echo("Pętla while"."\r\n");
    $i=0;
    $res = 0;
    while ($i < 10){
        if ($res < $random_number_array[$i]){
            $res = $random_number_array[$i];
            $i++;
        }
        else{
            $i++;
        }
    }
    echo("Maksymalny element tablicy: ".$res."\r\n");
    echo("Pętla do while"."\r\n");
    $i=0;
    $res = 0;
    do {
        if ($res < $random_number_array[$i]){
            $res = $random_number_array[$i];
            $i++;
        }
        else{
            $i++;
        }
    }while ($i < 10);
    echo("Maksymalny element tablicy: ".$res."\r\n");
    echo("Pętla foreach"."\r\n");
    $res = 0;
    foreach($random_number_array as $v) {
        if($res < $v)
            $res = $v;
    }
    echo("Maksymalny element tablicy: ".$res."\r\n");
}
function zad3_2($rzut){
    echo("Zad 3.2"."\r\n");
    for($i=0;$i<$rzut;$i++){
        echo("Rzut ".($i+1)." : ".rand(1, 6)."\r\n");
    }
}
function zad3_3($size){
    echo("Zad 3.3"."\r\n");
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            echo str_pad($i * $j, 4, " ", STR_PAD_LEFT);
        }
        echo "\r\n";
    }
}
function zad3_4prime(){
    $num = (int)readline();
    if ($num == 1)
        return 0;

    for ($i = 2; $i <= sqrt($num); $i++){
        if ($num % $i == 0)
            return 0;
    }
    return 1;
}
function zad3_4(){
    echo("Zad 3.4"."\r\n");
    echo("Podaj liczbe: "."\r\n");
    $flag = zad3_4prime();
    if ($flag == 1)
        echo ("Wprowadzona liczba jest liczba pierwsza"."\r\n");
    else
        echo ("Wprowadzona liczba nie jest liczba pierwsza"."\r\n");
}
zad3_1();
zad3_2(6);
zad3_3(4);
zad3_4();
?>
