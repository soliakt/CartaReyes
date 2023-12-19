<?php
session_start();

//session_destroy();  // borrará todos los datos asociados a ese usuario.
$_SESSION = array(); // Otra forma de borrar todas las variables sesión.
header('Location: ./logIn.php');
?>
