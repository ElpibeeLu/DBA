<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&family=Quicksand&display=swap" rel="stylesheet">
    <title>Curriculum Vitae</title>
</head>
<body>
    <div class="cv-container">
        <?php
        $datosCV = file_get_contents("form-save.txt");

        $cvArray = explode("\n\n", $datosCV);
        $cont = 0;

        foreach ($cvArray as $cv) {
            $cont += 1;
            if ($cont < $cv) {
                echo "<h1>Curriculum Vitae</h1>";
            }
            echo "<div class='section'>";
            echo "<pre>$cv</pre>";
            echo "</div>";
        }
        ?>
    </div>
    <a class="boton" href="Formulario2.html">Regresar</a>
</body>
</html>