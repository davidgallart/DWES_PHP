<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejercicio 4</h1>

<?php
 $nota1 = rand(1,10);
 $nota2 = rand(1,10);

 if($nota1 > $nota2){

    echo "La nota 1 es la mayor con un " . $nota1;

 }elseif($nota1 < $nota2){
    echo "La nota 2 es la mayor con un " . $nota2;
}else{

 echo "Las notas son iguales " . $nota2;

 }


?>
</body>
</html>



