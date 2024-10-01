<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

<?php
$hora = "27:30:12";
if(preg_match("/^([0-2]{1}[0-9]{1}):([0-5]{1}[0-9]{1}):([0-5]{1}[0-9]{1})$/",$hora,$array)==1){
   if($array[1]<=23){
    echo "La hora completa es $array[0] <br>";
    echo "La hora es: $array[1]<br>";
    echo "Los minutos es: $array[2]<br>";
    echo "Los segundos es: $array[3]<br>";
   }else{

    echo " Error hora mal introducida";
}
}else{

    echo " Error hora mal introducida";
}




?>
    
</body>
</html>