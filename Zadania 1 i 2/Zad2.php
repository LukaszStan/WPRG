<?php
function zad2_1($index){
    echo("Zad 2.1"."\r\n");
    $random_number_array = range(0, 100);
    shuffle($random_number_array );
    $random_number_array = array_slice($random_number_array ,0,10);
    print_r($random_number_array);
    print_r($random_number_array[$index]);
    echo("\r\n");
}
function zad2_2(){
    echo("Zad 2.2"."\r\n");
    echo("Podaj nazwe kraju: "."\r\n");
    $kraj = (string)readline();
    $narodowsc = array(
        'polska' => 'Polak',
        'niemcy' => 'Niemiec',
        'francja' => 'Francuz',
        'hiszpania' => 'Hiszpan',
        'włochy' => 'Włoch',
        'anglia' => 'Anglik',
        'usa' => 'Amerykanin',
        'kanada' => 'Kanadyjczyk',
        'japonia' => 'Japończyk',
        'korea południowa' => 'Koreańczyk');
    echo(strtr($kraj,$narodowsc)."\r\n");
}
zad2_1(2);
zad2_2();
?>