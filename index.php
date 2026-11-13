<?php

$nombre = "Camila Hernández";
$edad = 17;
$telefono = "6183257851";
$email = "hernandez.huerta.camila@cbtf4.edu.mx";
$direccion = "Valle Oriente, Durango, Dgo.";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Práctica 4 - Variables PHP</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <div class="contenedor">
        <h1>Práctica 4: Variables en PHP</h1>

        <div class="caja">
            <h2>Actividad 1: Mostrar datos con echo</h2>
            <?php
            echo "<p><b>Nombre:</b> " . $nombre . "</p>";
            echo "<p><b>Edad:</b> " . $edad . " años</p>";
            echo "<p><b>Teléfono:</b> " . $telefono . "</p>";
            echo "<p><b>Email:</b> " . $email . "</p>";
            echo "<p><b>Dirección:</b> " . $direccion . "</p>";
            ?>
        </div>

        <div class="caja">
            <h2>Actividad 2: Mostrar datos en un párrafo</h2>
            <?php
            echo "<p>Hola, mi nombre es <b>$nombre</b> y tengo <b>$edad</b> años.<br>
            Puedes contactarme al teléfono <b>$telefono</b> o al correo <b>$email</b>. <br>
            Mi dirección es: <b>$direccion</b>.</p>";
            ?>
        </div>
    </div>

</body>
</html>