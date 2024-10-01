<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Intercambio de valores</h1>
    <?php
    $n1 = 3;
    $n2 = 6;
echo "<p>Los valores son $n1 y $n2 en ese orden</p>";
    function intercambia(&$a,&$b){
        $c=$b;
        $b=$a;
        $a=$c;
    }
    ?>

    <p> <?php
     intercambia($n1,$n2);
     echo "Los valores ahora son $n1 y $n2 cambiados de orden";
    ?></p>
    
</body>
</html>