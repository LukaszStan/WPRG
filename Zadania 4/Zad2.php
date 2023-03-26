<?php
function factorial_recursive($number) {
    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial_recursive($number-1));
    }
}
function factorial_non_recursive($number){
    $factorial = 1;
    for ($x=$number; $x>=1; $x--)
    {
        $factorial = $factorial * $x;
    }
//    echo ($factorial."\r\n");
}
$time_start1 = microtime(true);
factorial_recursive(100);
$time_end1 = microtime(true);
$time1 = round($time_end1 - $time_start1,6);
echo ("Funkcja rekurencyjna wykonała się w czasie: ".$time1." sekund. \r\n");
$time_start2 = microtime(true);
factorial_non_recursive(100);
$time_end2 = microtime(true);
$time2 = round($time_end2 - $time_start2,6);
echo ("Funkcja nierekurencyjna wykonała się w czasie ".$time2." sekund \r\n");
if($time1>$time2){
    echo ("Funkcja nierekuerncyjna wykonała się szybciej o: ".$time1-$time2." sekund.");
}
else if($time2>$time1){
    echo ("Funkcja rekuerncyjna wykonała się szybciej o: ".$time2-$time1." sekund.");
}
else{
    echo ("Funkcje wykonały się w tym samym czasie: ".$time1." sekund");
}
?>