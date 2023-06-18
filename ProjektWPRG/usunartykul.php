<?php
    $artykulID = $_GET['artykulID'];
    $conn = mysqli_connect("localhost","root","","portal_info");
    $zap1 = "SELECT * FROM komentarze WHERE artykuly_artykulyID=$artykulID";
    $wyn1 = mysqli_query($conn,$zap1);
    if(mysqli_num_rows($wyn1) != 0){
        $zap2="DELETE FROM komentarze WHERE artykuly_artykulyID=$artykulID";
        if (!$wyn2 = mysqli_query($conn, $zap2)){
            echo "Błąd, nie udało się usunąć komentarzy związanych z artykułem, spróbuj ponownie";
            sleep(10);
            header("Location: panel.php");
        }
        else{
            $zap3="DELETE FROM artykuly WHERE artykulyID=$artykulID";
            if (!$wyn3 = mysqli_query($conn, $zap3)) {
                echo 'Błąd, nie udało się usunąć artykułu';
                sleep(10);
                header("Location: panel.php");
            } else {
                header("Location: panel.php");
            }
        }
    }
    else {
        $zap4 = "DELETE FROM artykuly WHERE artykulyID=$artykulID";
        if (!$wyn4 = mysqli_query($conn, $zap4)) {
            echo 'Błąd, nie udało się usunąć artykułu';
            sleep(10);
            header("Location: panel.php");
        } else {
            header("Location: panel.php");
        }
    }
mysqli_close($conn);
?>