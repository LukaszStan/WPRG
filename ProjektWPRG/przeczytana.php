<?php
$read = $_GET['read'];
$messID = $_GET['messID'];
$conn = mysqli_connect("localhost","root","","portal_info");
if($read==1){
    $zap1 = "UPDATE wiadomosci SET przeczytany = 0 WHERE wiadomoscID = $messID;";
    if (!$wyn1 = mysqli_query($conn, $zap1)){
        echo "Nie udało się zmienić statusu wiadomości";
    }
    else{
        header("Location: twojewiadomosci.php");
    }
}
else{
    $zap2 = "UPDATE wiadomosci SET przeczytany = 1 WHERE wiadomoscID = $messID;";
    $wyn2 = mysqli_query($conn,$zap2);
    if (!$wyn2 = mysqli_query($conn, $zap2)){
        echo "Nie udało się zmienić statusu wiadomości";
    }
    else{
        header("Location: twojewiadomosci.php");
    }
}
mysqli_close($conn);
?>