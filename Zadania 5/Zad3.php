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
<h2>Strony:</h2>
    <?php
    $filename = 'adresy.txt';
    $file = fopen($filename, 'r');
    echo "<ul>\n";
    while (!feof($file)) {
        $line = fgets($file);
        $parts = explode(';', $line);
        if (count($parts) >= 2) {
            $url = trim($parts[0]);
            $desc = trim($parts[1]);
            echo "<li><a href=\"$url\">$desc</a></li>\n";
        }
    }
    echo "</ul>\n";
    fclose($file);
    ?>
</body>
</html>
