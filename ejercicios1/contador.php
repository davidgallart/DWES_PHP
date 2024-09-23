<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <?php
echo "<h2>Cuenta del 1 al 100</h2> <br>";
    for ($i = 0; $i < 101; $i++) {

        if ($i == 100) {
            echo $i . " <br>";
        } else {
            echo $i . ", ";
        }
    }
    $n = 10;
    echo "<br>";
    echo "<h2>Cuenta del 10 al 0</h2> <br>";

    while ($n >= 0) {
        if ($n == 0) {
            echo $n;
        } else {
            echo $n . " - ";
        }
        $n--;
    }
    ?>
</body>
</html>
