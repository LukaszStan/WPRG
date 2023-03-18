<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad2</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <h2>Prosty</h2>
    <form method="post">
        <input type="number" name="liczba1" step="0.01">
        <select name="operacja1">
            <option value="dodawanie">Dodawanie</option>
            <option value="odejmowanie">Odejmowanie</option>
            <option value="mnozenie">Mnożenie</option>
            <option value="dzielenie">Dzielenie</option>
        </select>
        <input type="number" name="liczba2" step="0.01"> <br><br>
        <input type="submit" name="prosty" value="oblicz">
    </form><br>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['prosty'])){
            switch ($_POST['operacja1']){
                case 'dodawanie';
                    $wynik = $_POST['liczba1'] + $_POST['liczba2'];
                    echo ("Wynik: ".$wynik);
                    break;
                case 'odejmowanie';
                    $wynik = $_POST['liczba1'] - $_POST['liczba2'];
                    echo ("Wynik: ".$wynik);
                    break;
                case 'mnozenie';
                    $wynik = $_POST['liczba1'] * $_POST['liczba2'];
                    echo ("Wynik: ".$wynik);
                    break;
                case 'dzielenie';
                    $wynik = $_POST['liczba1'] / $_POST['liczba2'];
                    echo ("Wynik: ".$wynik);
                    break;
                default;
                    echo("Nie wybrano działania");
            }
        }
    ?>
    <h2>Zaawansowany</h2>
    <form method="post">
        <input type="text" name="liczba3">
        <select name="operacja2">
            <option value="cos">Cosinus</option>
            <option value="sin">Sinus</option>
            <option value="tan">Tangens</option>
            <option value="bintodzie">Binarne na dziesiętne</option>
            <option value="dzietobin">Dziesiętne na binarne</option>
            <option value="dzietosze">Dziesiętne na szesnastkowe</option>
            <option value="szetodzie">Szesnastkowe na dziesiętne</option>
            <option value="stoptorad">Stopnie na radiany</option>
            <option value="radtostop">Radiany na stopnie</option>
        </select> <br><br>
        <input type="submit" name="zaw" value="oblicz">
    </form><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['zaw'])){
        switch ($_POST['operacja2']){
            case 'cos';
                echo ("Wynik: ".cos($_POST['liczba3']));
                break;
            case 'sin';
                echo ("Wynik: ".sin($_POST['liczba3']));
                break;
            case 'tan';
                echo ("Wynik: ".tan($_POST['liczba3']));
                break;
            case 'bintodzie';
                echo ("Wynik: ".bindec($_POST['liczba3']));
                break;
            case 'dzietobin';
                echo ("Wynik: ".decbin($_POST['liczba3']));
                break;
            case 'dzietosze';
                echo ("Wynik: ".dechex($_POST['liczba3']));
                break;
            case 'szetodzie';
                echo ("Wynik: ".hexdec($_POST['liczba3']));
                break;
            case 'stoptorad';
                echo ("Wynik: ".deg2rad($_POST['liczba3']));
                break;
            case 'radtostop';
                echo ("Wynik: ".rad2deg($_POST['liczba3']));
                break;
            default;
                echo("Nie wybrano działania");
        }
    }
    ?>
</body>
</html>