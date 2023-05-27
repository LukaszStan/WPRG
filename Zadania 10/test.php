<?php
include "klasy.php";
$noweAuto = new NoweAuto('Model auta', 10000, 4.5);
$cenaPLN = $noweAuto->ObliczCene();
echo "Cena auta w PLN: $cenaPLN"."\r\n";

$autoZDodatkami = new AutoZDodatkami('Model auta', 10000, 4.5, 500, 200, 1000);
$cenaPLN = $autoZDodatkami->ObliczCene();
echo "Cena auta z dodatkami w PLN: $cenaPLN"."\r\n";

$ubezpieczenie = new Ubezpieczenie('Model auta', 10000, 4.5, 500, 200, 1000, 0.05, 2);
$cenaUbezpieczenia = $ubezpieczenie->ObliczCene();
echo "Cena ubezpieczenia samochodu w PLN: $cenaUbezpieczenia"."\r\n";
?>