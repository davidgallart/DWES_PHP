<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<?php
$a = 20;
$b = 10;
$o=4;
function cuentaAmpliacion($a, $b, $o = 1){
    if($o<1){
        echo "Asignacion de intervalo incorrecta";
    }else{
    if ($a < $b) {// b mayor
        for ($i = $a; $i <= $b; $i +=$o) {
            
                echo $i;
                if($i+$o > $b){

                }else{
                if ($i != $b) {
                    echo ", ";
                }
            }
            
        }
    } else { // a mayor
        for ($i = $b; $i <= $a; $i +=$o) {
           
                echo $i;
                if($i+$o > $a){
                }else{
                if ($i != $a) {
                    echo ", ";
                }
        }
    }
    }
}
}
?>

<body>
    <h1>Funcion Contador</h1>
    <p> <?php cuentaAmpliacion($a, $b,$o) ?></p>

</body>

</html>