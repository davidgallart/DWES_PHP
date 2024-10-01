<!-- Clacular los años meses y dias desde una fecha -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ampliacion Ejercicio 7</title>
</head>
<body>
    <?php
$fecha = strtotime("30-9-1999"); 

$fecha2 = strtotime(date("d-m-Y"));
$res = ($fecha2 - $fecha);

// $años =round($res/31536000);
$años =intdiv($res,31536000);
$res2 = $res%31536000;
$meses = round($res2/2592000);
$res3 = $res2%2592000;
$dia = $res3/86400;
    echo $res . "<br>";
    echo"Tienes  ". $años. " años, " . $meses ." meses y " . $dia . " dias";
    ?>
    
</body>
</html>