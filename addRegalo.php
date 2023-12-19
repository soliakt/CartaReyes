<?php
// require 'session.php';
include 'validarSesion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Añadir Regalo a la Carta</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Whisper&display=swap" rel="stylesheet">
</head>
<body>
    <div class="add-regalo-container">
        <a href="./cartaReyes.php">
            <button class="volver" type="button">Atrás</button>
        </a>
        <h1>Añadir Regalo</h1>
        <form id="regaloForm" method="post" action="./addToCarta.php">
            <label for="nombreRegalo">Nombre del regalo</label>
            <input type="text" id="nombreRegaloID" name="nombreRegaloID">

            <label for="descripcion">Comentarios:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

            <label for="url">Enlace: (Si precisa)</label>
            <input type="text" id="url" name="website" placeholder="https://ejemplo.com">
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
