<?php
session_start();
include 'db.php'; // Archivo donde se maneja la conexión a la base de datos

// Limpia el carrito
if (isset($_POST['clear_cart'])) {
    unset($_SESSION['cart']);
}

// Redirige a la página de pago
if (isset($_POST['checkout'])) {
    header("Location: pago.php");
    exit();
}

// Obtiene los productos en el carrito
$products = array();
if (isset($_SESSION['cart'])) {
    $product_ids = implode(',', $_SESSION['cart']);
    $sql = "SELECT * FROM productos WHERE id IN ($product_ids)";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrito</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <?php if (empty($products)): ?>
        <p>Tu carrito está vacío.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($products as $product): ?>
                <li><?php echo $product['name']; ?> - $<?php echo $product['price']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post">
        <button type="submit" name="clear_cart">Limpiar Carrito</button>
        <button type="submit" name="checkout">Método de Pago</button>
    </form>
</body>
</html>
