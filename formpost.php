<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos del Formulario Metodo POST</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
        echo "<h3>Hola </h3>".$_POST["nombre"];
        echo "<h3>Tu email es:  </h3>".$_POST["email"];
    // Verifica si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica si se han recibido datos de nombre y correo electrónico
        if (isset($_POST['nombre']) && isset($_POST['email'])) {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            // Muestra los datos recogidos
            echo "<h2>Datos Recogidos del Formulario metodo POST:</h2>";
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Correo Electrónico:</strong> $email</p>";
        } else {
            // Si falta alguno de los campos, muestra un mensaje de error
            echo "<h2>Error: Faltan Datos</h2>";
            echo "<p>Por favor, complete todos los campos del formulario.</p>";
        }
    }
    ?>

    <!-- Botón para volver al index.html -->
    <button class="btn btn-dark" type="button" id="volverIndex">Volver al Índice</button>

    <!-- Incluir tu archivo JavaScript -->
    <script src="js/index.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    </body>
</html>