<?php
function day(){
    setlocale(LC_ALL, "pl");
    $birth_date = strtotime($_GET['data']);
    echo("Urodziłeś się w ".strftime("%A",$birth_date)."<br>");
}
function yr(){
    $dateyr = date('Ymd', strtotime($_GET['data']));
    $diff = date('Ymd') - $dateyr;
    echo("Ukończyłeś: ".substr($diff, 0, -4)." lat <br>");
}
function birthday(){
    $birth_date = date("Y-m-d",strtotime($_GET['data']));
    $current_date = new DateTime(date("Y-m-d"));
    $birthdate_obj = new DateTime($birth_date);
    $birthdate_obj->modify(date('Y') . '-' . $birthdate_obj->format('m-d'));
    if ($birthdate_obj < $current_date) {
        $birthdate_obj->modify('+1 year');
    }
    $age = $current_date->diff($birthdate_obj);
    echo "Następne urodziny masz: " . $birthdate_obj->format('Y-m-d') . ", czyli za " . $age->days . " dni.";
}
day();
yr();
birthday();
?>