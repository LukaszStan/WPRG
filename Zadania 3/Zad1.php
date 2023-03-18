<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad1</title>
</head>
<body>
    <form method="post">
        <p>Formularz kontaktowy</p>
        <p>Imię i nazwisko * <input type="text" name="imie" placeholder="Twoje imię i nazwisko: "></p>
        <p>Adres e-mail * <input type="email" name="mail1" placeholder="Twój adre e-mail"></p>
        <p>Telefon kontaktowy <input type="number" name="tel1" placeholder="Dozwolone znaki: cyfry, spacja"></p>
        <p>Wybierz temat * <select name="temat">
                <option value="Strona">Wykonanie strony internetowej</option>
                <option value="Serwis">Serwis komputerowy</option>
                <option value="Logo">Wykonanie loga firmy</option>
            </select>
        </p>
        <p>Treść wiadomości * <textarea name="wiad" placeholder="Wpisz tutaj treść swojej wiadomości..." rows="5" cols="33"></textarea></p>
        <p>Preferowana forma kontaktu </p>
            <input type="checkbox" id="mail" name="mail2" value="E-mail">
            <label for="mail2">E-mail</label><br>
            <input type="checkbox" id="tel" name="tel2" value="Telefon">
            <label for="tel2">Telefon</label><br>
        <p>Posiadasz już stronę www ? </p>
            <input type="radio" id="tak" name="www" value="Tak">
            <label for="tak">Tak</label><br>
            <input type="radio" id="nie" name="www" value="Nie">
            <label for="nie">Nie</label><br>
        <p>Załączniki</p>
            <input type="file" id="myfile" name="myfile"><br><br>
        <input type="submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo($_POST["imie"] . "<br>");
        echo($_POST["mail1"] . "<br>");
        echo($_POST["tel1"] . "<br>");
        echo($_POST["temat"] . "<br>");
        echo($_POST["wiad"] . "<br>");
        if (isset($_POST["mail2"]) && isset($_POST["tel2"])){
            echo($_POST["mail2"] . "<br>");
            echo($_POST["tel2"] . "<br>");
        }
        else if(isset($_POST["mail2"])){
            echo($_POST["mail2"] . "<br>");
        }
        else if(isset($_POST["tel2"])){
            echo($_POST["tel2"] . "<br>");
        }
        else{
            echo("Brak preferowanej formy kontaktu"."<br>");
        }
        echo($_POST["www"] . "<br>");
        echo($_POST["myfile"] . "<br>");
    }
    ?>
</body>
</html>