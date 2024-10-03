<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php 
$coches = array( "1234ABC" => array( "Ford","Focus", "5"));
$coches += array( "1235ABC" => array( "BMW","M3", "4"));
$coches += array( "9876ZYX" => array( "Mercedes","AMG1", "2"));
$coches += array( "2024VLC" => array( "Renault","Clio", "4"));
$coches += array( "3456TRY" => array( "Suzuki","Swift", "4"));
ksort($coches);
echo "<h1>Coches ordenados por matricula</h1>";
foreach($coches as $m => $info){

    echo "<b>$m</b> = Marca: $info[0], Modelo: $info[1], Puertas: $info[2] <br>";
}
    ?>
</body>
</html>
