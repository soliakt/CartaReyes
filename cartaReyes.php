<?php
    // require 'session.php';
    include 'functions.php';
    include 'validarSesion.php';
    $archivoPapa = "./cartas/cartapapa.txt";
    $archivoMama = "./cartas/cartamama.txt";
    $archivoMiguel = "./cartas/cartamiguel.txt";
    $archivoVictor ="./cartas/cartavictor.txt";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Carta a los Reyes Magos</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Whisper&display=swap" rel="stylesheet">
</head>
<body>
        <div class="carta-container">
            <div class="salir">
                <a href="./logOut.php">Cerrar Sesión</a>
            </div>
            <?php if($_SESSION['id_usuario'] == "victor") echo "HOLA VICTOR"; ?>
            <h1>Queridos Reyes Magos</h1>
            <h2>Familia Gimeno Sanz</h2>
            <h4>Como este año hemos trabajado muy duro, queremos pediros:</h4>
        
            <h3>Para Papá:</h3>
            <?php getRegalos($archivoPapa);?>

            <h3>Para Mamá</h3>
            <?php getRegalos($archivoMama);?>

            <h3>Para Miguel:</h3>
            <?php getRegalos($archivoMiguel);?>

            <h3>Para Víctor:</h3>
            <?php getRegalos($archivoVictor);?>
            <div>
            <a href="./addRegalo.php">
                <button>Añadir un regalo</button>
            </a>
        </div>
    </div>
   

</body>
</html>
