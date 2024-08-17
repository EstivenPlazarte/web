<!DOCTYPE html>
<html>
<head>
    <title>Pagar</title>
</head>
<body>
    <h1>Finalizar Pago</h1>
    <form action="procesar_pago.php" method="post">
        <label for="name">Nombre Completo:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" required><br>

        <label for="card_number">Número de Tarjeta:</label>
        <input type="text" id="card_number" name="card_number" required><br>

        <label for="expiry_date">Fecha de Expiración:</label>
        <input type="text" id="expiry_date" name="expiry_date" required><br>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required><br>

        <button type="submit">Pagar Ahora</button>
    </form>

    <form action="../index.html" method="get">
        <button type="submit">Volver a la Página Principal</button>
    </form>
</body>
</html>
