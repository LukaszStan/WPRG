<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zad3</title>
</head>
<body>
<h3>Struktura plików</h3>
    <form method="post">
        Podaj scięzkę: <input type="text" name="path" placeholder="np. ./php/images/network"> <br><br>
        Podaj nazwę katalogu: <input type="text" name="dir"> <br><br>
        Jaka operacje chcesz wykonać: <select name="op">
            <option value="read">Read</option>
            <option value="delete">Delete</option>
            <option value="create">Create</option>
        </select> <br><br>
        <input type="submit" value="Wykonaj">
    </form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $path = $_POST['path'];
        $dir = $path . $_POST['dir'];
        $op = $_POST['op'];
        if (substr($path,-1) == chr(92)) {
            if ($op == 'read') {
                if (!($fd = opendir($dir))) {
                    exit("Podany katalog nie istnieje albo nie udało się go otworzyć !");
                }
                while (($file = readdir($fd)) !== false) {
                    echo($file . "<br>");
                }
                closedir($fd);
            } else if ($op == 'delete') {
                if(is_dir($dir)){
                    function is_dir_empty($dir) {
                        if (!is_readable($dir)) return null;
                        return (count(scandir($dir)) == 2);
                    }
                    if (is_dir_empty($dir)) {
                        rmdir($dir);
                        echo ("Usunięto folder: ".$dir);
                    }else{
                        echo ("Folder nie jest pusty");
                    }
                }
                else{
                    echo("Dany katalog nie istnieje");
                }
            } else if ($op == 'create') {
                if (!is_dir($dir)) {
                    mkdir($dir);
                    echo("Utworzono katalog: ".$dir);
                }
                else{
                    echo ("Podany katalog już istnieje");
                }
            }
        }
        else{
            echo("Ścieżka musi się kończyć backslashem");
        }
    }
?>
</body>
</html>