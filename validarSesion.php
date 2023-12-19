<?php
require 'session.php';
// Verificar si el usuario no está autenticado
if (!isset($_SESSION['id_usuario']) || empty($_SESSION['id_usuario'])) {
    header("Location: ./login.php"); // Redirigir a logIn.php si no está autenticado
    exit();
}

$paises = array(
    "espana" => array(
        "nombre" => "España",
        "capital" => "Madrid",
        "poblacion" => 47000000,
        "bandera" => "url_de_la_bandera_espana.jpg"
    ),
    "francia" => array(
        "nombre" => "Francia",
        "capital" => "París",
        "poblacion" => 67000000,
        "bandera" => "url_de_la_bandera_francia.jpg"
    ),
    "italia" => array(
        "nombre" => "Italia",
        "capital" => "Roma",
        "poblacion" => 60000000,
        "bandera" => "url_de_la_bandera_italia.jpg"
    )
);

// foreach ($paises as $nombre_pais => $informacion_pais) {
//     echo "País: " . $nombre_pais . "<br>";
//     if (is_array($informacion_pais)) {
//         foreach ($informacion_pais as $clave => $valor) {
//             echo $clave . ": " . $valor . "<br>";
//         }
//         echo "<br>";
//     } else {
//         echo "Información del país no válida.<br><br>";
//     }
// }


?>
