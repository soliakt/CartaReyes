<?php
// require 'session.php';
include 'validarSesion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreRegalo = $_POST["nombreRegaloID"];
        $comentarios = $_POST["descripcion"];
        $enlace = $_POST["website"];

        // Creamos una cadena con los datos del formulario
        $contenido = "Nombre del regalo: $nombreRegalo\n";
        $contenido .= "Comentarios: $comentarios\n";
        $contenido .= "Enlace: $enlace";

        $nombreArchivo = "./cartas/carta" .$_SESSION['id_usuario']. ".txt";

        // Guardamos los datos en el archivo
        $archivo = fopen($nombreArchivo, "a");

        if ($archivo) {
            fwrite($archivo, $contenido . "\n");
            fclose($archivo);
            header('Location: ./cartaReyes.php');
        } else {
            echo "Hubo un error al intentar guardar los datos en cartavictor.txt";
        }
    } else {
        echo "Acceso denegado.";
    }
?>
