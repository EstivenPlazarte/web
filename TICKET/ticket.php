<?php
require "./code128.php";

// Incluir la librería PDF_Code128 si no está incluida en el archivo original
$pdf = new PDF_Code128('P','mm',array(80,258));
$pdf->SetMargins(4,10,4);
$pdf->AddPage();

// Conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "ropa";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los datos del ticket
$pedido_id = 1; // Suponiendo que el pedido que queremos mostrar tiene el ID 1

$sql = "SELECT p.fecha_pedido, u.nombre AS nombre_usuario, u.apellido AS apellido_usuario, u.email,
               de.direccion, de.ciudad, de.provincia, de.codigo_postal, de.pais,
               pd.total
        FROM pedidos p
        INNER JOIN usuarios u ON p.usuario_id = u.usuario_id
        INNER JOIN direcciones_envio de ON p.direccion_envio_id = de.direccion_envio_id
        INNER JOIN pedidos_detalle pd ON p.pedido_id = pd.pedido_id
        WHERE p.pedido_id = $pedido_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Encabezado y datos de la empresa
        $pdf->SetFont('Arial','B',10);
        $pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1", strtoupper("Nombre de empresa")),0,'C',false);
        // ... Continuar con los datos de la empresa (RUC, dirección, teléfono, email)

        $pdf->Ln(1);
        $pdf->Cell(0,5,iconv("UTF-8", "ISO-8859-1", "------------------------------------------------------"),0,0,'C');
        $pdf->Ln(5);

        // Datos del pedido dinámicos
        $pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1", "Fecha: " . date("d/m/Y", strtotime($row['fecha_pedido']))),0,'C',false);
        $pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1", "Cliente: " . $row['nombre_usuario'] . " " . $row['apellido_usuario']),0,'C',false);
        $pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1", "Email: " . $row['email']),0,'C',false);
        $pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1", "Dirección: " . $row['direccion'] . ", " . $row['ciudad'] . ", " . $row['provincia'] . ", " . $row['pais']),0,'C',false);

        $pdf->Ln(1);
        $pdf->Cell(0,5,iconv("UTF-8", "ISO-8859-1", "-------------------------------------------------------------------"),0,0,'C');
        $pdf->Ln(3);

        // Detalles de los productos del pedido (puedes iterar sobre los productos del pedido aquí)

        // Información de impuestos y totales (a completar con los datos reales del pedido)

        // Final del ticket
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(0,7,iconv("UTF-8", "ISO-8859-1", "Gracias por su compra"),'',0,'C');

        $pdf->Ln(9);

        // Código de barras (opcional, dependiendo de tus necesidades)
        // $pdf->Code128(5,$pdf->GetY(),"COD000001V0001",70,20);

        // Nombre del archivo PDF y salida del PDF
        $pdf->Output("I", "Ticket_Nro_$pedido_id.pdf", true);
    }
} else {
    echo "No se encontraron resultados para el pedido ID: $pedido_id";
}

$conn->close();
?>
