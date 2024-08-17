<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Carrito de Compras</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Carrito de Compras</h1>

    <?php
    // Configuración de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ropa";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta para obtener productos disponibles
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar productos
        while($row = $result->fetch_assoc()) {
            echo '<div class="product">';
            echo '<img src="' . $row["imagen_url"] . '" alt="' . $row["nombre"] . '">';
            echo '<div class="info">';
            echo '<h2>' . $row["nombre"] . '</h2>';
            echo '<p>' . $row["descripcion"] . '</p>';
            echo '<p>Precio: $' . $row["precio"] . '</p>';
            echo '<button class="agregar-carrito" data-id="' . $row["producto_id"] . '">Agregar al Carrito</button>';
            echo '</div></div>';
        }
    } else {
        echo "0 resultados";
    }

    // Cerrar conexión
    $conn->close();
    ?>

    <div id="cart">
        <h2>Carrito</h2>
        <div class="buy-card lista_de_cursos">
            <!-- Aquí se mostrarán los productos agregados al carrito -->
        </div>
        <p id="cart-count">0 productos en el carrito</p>
        <button id="vaciar_carrito">Vaciar Carrito</button>
       <!-- <button onclick="checkout()">Proceder al Pago</button> -->
       <li><a href="../pago.html">proceder el pago</a></li>
    </div>
</div>

<script src="carrito.js"></script>
<script>
    // Función para proceder al pago (esto debería redirigir a una página de pago en una aplicación real)
    function checkout() {
        alert('Procesando pago...');
        // Aquí podrías implementar la lógica para proceder al pago
        // Por ejemplo, redirigir a una página de pago real
        window.location.href = 'checkout.php';
    }
</script>
</body>
</html>
