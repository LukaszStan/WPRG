<?php
    $komentarzID = $_GET['komentarzID'];
    $artykulID = $_GET['artykulID'];
    $conn = mysqli_connect("localhost","root","","portal_info");
    $zap = "DELETE FROM komentarze WHERE komentarzID=$komentarzID";
    if (!$wyn = mysqli_query($conn, $zap)) {
        echo 'Błąd, nie udało się usunąć komentarza';
        sleep(10);
        header("Location: edytujkomentarze.php?artykulID=$artykulID");
    } else {
        header("Location: edytujkomentarze.php?artykulID=$artykulID");
    }
mysqli_close($conn);
?>