<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

<?php
$radio = 7;
define('PI',3.1416);
$area = PI * sqrt($radio);
$area = number_format($area,2);
$textoResultado = "El área calculada del círculo es ";

echo $textoResultado . $area . "<br>";


$textoResultadoMayus = strtoupper($textoResultado);
echo "2 " . $textoResultadoMayus . $area  . "<br>";

$textoResultadoModificado = str_replace($textoResultado,"calculada","obtenida");
echo "3 " . $textoResultado . $area  . "<br>";

echo "Longitud: ". strlen($textoResultadoModificado) . "<br>";
$posCirc = strpos($textoResultado,"círculo");
echo"círculo se encuentra en la posicion: " . $posCirc  . "<br>";
$numeros = "1,2,3,4,5";
$cadena = explode(",",$numeros);
$numerosNuevo = implode("+",$cadena);
echo $numerosNuevo . "=";
$resultado = 0 ;
for($i=0;$i<5;$i++){
$resultado += $cadena[$i];
}
echo $resultado;

?>
    
</body>
</html>