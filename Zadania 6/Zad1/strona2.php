<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= $_SESSION['num_of_people']; $i++) {
        $_SESSION["person_{$i}_name"] = $_POST["person_{$i}_name"];
        $_SESSION["person_{$i}_age"] = $_POST["person_{$i}_age"];
    }

    if (isset($_POST['save_data'])) {
        header('Location: strona3.php');
        exit();
    }
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 1</title>
</head>
<body>
    <h1>Dane osób rezerwacji</h1>
    <form method="POST">
        <?php for ($i = 1; $i <= $_SESSION['num_of_people']; $i++): ?>
            <h2>Osoba <?php echo $i; ?></h2>
            Imię i nazwisko: <input type="text" name="person_<?php echo $i; ?>_name"><br><br>
            Wiek: <input type="number" name="person_<?php echo $i; ?>_age"><br><br>
        <?php endfor; ?>
        <input type="submit" name="save_data" value="Zapisz dane">
    </form>
</body>
</html>

