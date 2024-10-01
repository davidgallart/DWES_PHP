<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<?php
function cuenta($a, $b){
    if ($a > $b) {
        for ($i = $b; $i <= $a; $i++) {
            echo $i;
            if ($i != $a) {
                echo ", ";
            }
        }
    } else {
        for ($i = $b; $i >= $a; $i--) {
            echo $i;
            if ($i != $a) {
                echo ", ";
            }
        }
    }
}
?>

<body>
    <h1>Funcion Contador</h1>
    <p>Del 70 al 120</p><br>
    <p> <?php cuenta(70, 120) ?></p>

</body>

</html>