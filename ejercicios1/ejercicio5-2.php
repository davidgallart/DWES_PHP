<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5.2</title>
</head>
<body>
    <h1>Ejercicio 5.2</h1>
    <?php
    $nota1 = rand(1, 10);
    $nota2 = rand(1, 10);
    $nota3 = rand(1, 10);
    $notaMayor;
    if ($nota1 >= $nota2 && $nota1 >= $nota3) {
        $notaMayor = $nota1;
    } elseif ($nota1 <= $nota2  && $nota2 >= $nota3) {
        $notaMayor = $nota2;
    } elseif ($nota1 <= $nota3 && $nota2 <= $nota3) {
        $notaMayor = $nota3;
    }
    switch ($notaMayor) {
        case $notaMayor >= 1 and $notaMayor < 5:
            echo "Suspendido";
            break;
        case 6:
            echo "Bien";
            break;
        case $notaMayor >= 7 and $notaMayor < 9:
            echo "Notable";
            break;
        case $notaMayor >= 9 and $notaMayor < 11:
            echo "Sobresaliente";
            break;
    }
    ?>
</body>
</html>