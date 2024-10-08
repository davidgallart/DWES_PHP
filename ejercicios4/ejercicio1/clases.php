<?php include_once "incluir.inc.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Clases</h1>
    <?php
    $estudiante = new Estudiante("12345678A", "Emilio", "emilio@gmail", 1);
    $persona =  new Persona("12345679B", "Pepe", "pepe@gmail");
    $persona2 =  new Persona("64337827U", "Pablo", "pablo@gmail");
    $estudiante->__set("DNI", "87654321Z");
    $estudiante->__set("Expediente", 3);
    $persona->Mostrar();
    echo "<br>";
    $estudiante->Mostrar();
    echo "<br>";
    $persona2->Mostrar();
    $persona->__set("Nombre","Jose");
    echo "<br>";
    $persona->Mostrar();


    ?>
</body>

</html>