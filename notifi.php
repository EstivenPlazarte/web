<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Notificaciones</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Notificaciones</h1>

    <div class="notificaciones">
        <?php
        // Simulación de notificaciones (pueden venir de una base de datos o API)
        $notificaciones = [
            ["id" => 1, "mensaje" => "Nueva venta realizada", "fecha" => "2024-07-03 10:00:00"],
            ["id" => 2, "mensaje" => "Producto agotado", "fecha" => "2024-07-02 15:30:00"],
            ["id" => 3, "mensaje" => "Nuevo mensaje recibido", "fecha" => "2024-07-01 09:45:00"],
        ];

        // Mostrar las notificaciones
        foreach ($notificaciones as $notificacion) {
            echo '<div class="notificacion">';
            echo '<p class="mensaje">' . $notificacion["mensaje"] . '</p>';
            echo '<p class="fecha">' . $notificacion["fecha"] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</div>

</body>
</html>
