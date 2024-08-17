<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificación por Estrellas</title>
    <style>
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            align-items: center;
        }
        .rating input {
            display: none;
        }
        .rating label {
            cursor: pointer;
            font-size: 40px;
            color: #ddd;
            transition: color 0.3s;
        }
        .rating label:hover,
        .rating label:hover ~ label,
        .rating input:checked ~ label {
            color: #f39c12;
        }
        .rating input:checked ~ label:hover,
        .rating label:hover ~ input:checked ~ label {
            color: #e67e22;
        }
        .rating .fa-star {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="rating">
    <input type="radio" name="rating" id="star5" value="5"><label for="star5" class="fa fa-star"></label>
    <input type="radio" name="rating" id="star4" value="4"><label for="star4" class="fa fa-star"></label>
    <input type="radio" name="rating" id="star3" value="3"><label for="star3" class="fa fa-star"></label>
    <input type="radio" name="rating" id="star2" value="2"><label for="star2" class="fa fa-star"></label>
    <input type="radio" name="rating" id="star1" value="1"><label for="star1" class="fa fa-star"></label>
</div>

<?php
if (isset($_POST['rating'])) {
    $rating = $_POST['rating'];
    echo "<p>Has calificado con $rating estrellas.</p>";
    // Aquí puedes guardar la calificación en la base de datos o realizar otras acciones necesarias.
}
?>

</body>
</html>
