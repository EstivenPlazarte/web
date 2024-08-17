<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $sujeto = $_POST['sujeto'];
            $mensaje = $_POST['mensaje'];

            $to = "eaaeudonline@gmail.com";
            $subject = "Nuevo mensaje de contacto: $sujeto";
            $body = "Nombre: $nombre\nCorreo electrónico: $email\n\nMensaje:\n$mensaje";
            $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                echo "<p class='success'>Mensaje enviado con éxito.</p>";
            } else {
                echo "<p class='error'>Error al enviar el mensaje.</p>";
            }
        }
        ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos</title>
    <link rel="stylesheet" href="contacto.css">
</head>
<body>

<div class="container">
    <br><br><h1>Contáctenos</h1>

    <div class="contact-info">
        <h2>Datos de Contacto:</h2>
        <p><strong>Dirección postal:</strong> 5FQ4+79V, Babahoyo, Ecuador</p>
        <p><strong>Teléfono:</strong> 052734817</p>
        <p><strong>Correo electrónico:</strong>valentinplazarte15@gmail.com</p>
        <p><strong>Web:</strong> <a href="https://www.instagram.com/solo_mova_3000?igsh=MTY2aXk3bmpmaW12bQ==">ESTIEVN PLAZARTE</a></p>
    </div>

    <div class="contact-form">
        <h2>Contáctenos</h2>
        <form action="contacto.php" method="POST">
            <p><input type="text" name="nombre" placeholder="Su nombre" required></p>
            <p><input type="email" name="email" placeholder="Tu correo electrónico" required></p>
            <p><input type="text" name="sujeto" placeholder="Sujeto" required></p>
            <p><textarea name="mensaje" rows="4" placeholder="Tu mensaje (opcional)"></textarea></p>
            <p><button type="submit">Entregar</button></p>
        </form>

        
        
    </div>

    <div class="map">
        <h2>Ubicación en el mapa:</h2>
        <iframe src="https://www.google.com/maps/place/Terminal+Terrestre+de+Babahoyo/@-1.8097072,-79.5471001,17z/data=!4m6!3m5!1s0x902d2810abfc8e67:0x1bc0d55beb67cda9!8m2!3d-1.8117528!4d-79.544065!16s%2Fg%2F11hdvrfbt4?authuser=0&entry=ttu" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <a href="./index.html">Inicio</a>
</div>

</body>
</html>
