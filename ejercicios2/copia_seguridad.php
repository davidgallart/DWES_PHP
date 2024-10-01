<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
    $fichero = "datos.txt";
    $fichero2 = "copia_datos.txt";
    if (file_exists($fichero)) {
        $c = file_get_contents($fichero);
        $c2 = preg_replace("/[a-zA-Z0-9]{5,}@[a-zA-Z0-9]{5,}\.[a-zA-Z]{2,}/", '', $c);
        file_put_contents($fichero2, $c2);
        echo "Documento encontrado";
    } else {
        echo "Error fichero no encontrado";
    }
    ?>
</body>

</html>