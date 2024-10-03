<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<?php

for($i=0;$i<10;$i++){
for($o=0;$o<10;$o++){
    $tabla[$i][$o] = ($i*$o);
}
}

for($i=0;$i<count($tabla);$i++){
    echo "<br>Tabla del $i <br>";
    echo"*******************<br>";

    for($o=0;$o<count($tabla[$i]);$o++){
      
 echo" $i * $o = " .  $tabla[$i][$o] . "<br>";
    }
    }


?>    


</body>
</html>