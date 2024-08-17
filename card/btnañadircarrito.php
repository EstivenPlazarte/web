<?php
session_start();

// Obtiene el ID del producto de la solicitud
$product_id = $_GET['id'];

// Agrega el producto al carrito en la sesión
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (!in_array($product_id, $_SESSION['cart'])) {
    $_SESSION['cart'][] = $product_id;
}

// Redirige a carrito.php
header("Location: carrito.php");
exit();
?>
