<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dinamico.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="css/dinamico.css" rel="stylesheet">
    <title>Registro CV</title>
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $NOMBRE = $_POST['name'];
        $FECHA_NACIMIENTO = $_POST['birthdate'];
        $NIVEL_INGLES = $_POST['englishLevel'];
        $APTITUDES = $_POST['skills'];
        $HABILIDADES = $_POST['hab'];
        $EXPERIENCIA = $_POST['workExperience'];
        $FORMACION = $_POST['education'];

        $datosCV = "Nombre: $NOMBRE\nFecha de Nacimiento: $FECHA_NACIMIENTO\nNivel de Inglés: $NIVEL_INGLES\nAptitudes: $APTITUDES\nHabilidades: $HABILIDADES\nExperiencia: $EXPERIENCIA\nFormación: $FORMACION\n\n";

        file_put_contents("form-save.txt", $datosCV, FILE_APPEND);
    }
    echo 'Tus datos se han guardado correctamente.'
    ?>
    <br><br>
        <a class="boton1" href="Formulario2.html">Regresar</a>
        <br><br><br>
        <a class="boton1" href="PASO2.php">Ver CV</a>
</body>
</html>