<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
<h1>Ejercicio 5</h1>

<?php
 $nota1 = rand(1,10);
 $nota2 = rand(1,10);
 $nota3 = rand(1,10);
if($nota1 > $nota2 && $nota1 > $nota3){

echo "La nota 1 es la mayor con un " . $nota1;

}elseif($nota1 < $nota2  && $nota2 > $nota3){
echo "La nota 2 es la mayor con un " . $nota2;
}elseif($nota1 < $nota3 && $nota2 < $nota3){

echo "La nota 3 es la mayor con un " . $nota3;

}else{

echo "Hay dos notas o mas iguales " . $nota1 ." " . $nota2." " . $nota3;
}
?>
</body>
</html>