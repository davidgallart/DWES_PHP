<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Descuento</h1>
    <?php
    $p = 300;
    $d = 10;

    function calculaDescuento($precio, $descuento = 0){
return $precio - ($precio/100*$descuento);
    }
    echo "El precio es = $p y el descuento es de $d % <br>";
    echo "El precio total es = " . calculaDescuento($p,$d);
    ?>

    
</body>
</html>