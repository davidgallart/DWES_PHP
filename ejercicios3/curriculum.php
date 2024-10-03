<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    $idioma = $_GET["idioma"];
    $curriculum_es = "Hola mi nombre es David";
    $curriculum_en = "Hello my name is David";
    $idiomas_es = "Hablo español, valenciano e ingles";
    $idiomas_en = "I speak spanish, valencian and english";
    $estudios_es = "Tengo un grado medio de informatica";
    $estudios_en = "I have a medium degree in IT";
    $curriculum = "curriculum_" . $idioma;
    $estudios = "estudios_". $idioma;
    $idiomas = "idiomas_" . $idioma;
    echo $$curriculum . "<br>";
    echo $$estudios . "<br>";
    echo $$idiomas;

    ?>
</body>
</html>