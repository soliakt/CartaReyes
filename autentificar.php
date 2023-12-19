<?php
ob_start();  // Iniciar el búfer de salida
session_start();
print_r("<br>");

$_SESSION['id_usuario'] = $_POST['usuario'];
$_SESSION['id_password'] = $_POST['password'];

$usuarioIn = $_POST['usuario'];
$passIn = $_POST['password'];

$credenciales = array(
    "victor" => "1234",
    "miguel" => "0000",
);

// $usuariosRegistrados = [
//     new Usuario('usuario1', 'pass1'), 
//     new Usuario('usuario2', 'pass2'),
// ];

// if ($usuario->getUsername() == $username && $usuario->getPassword() == $password) {
//     $username = $_SESSION['user']->getUsername();
// }

// Pagina cartaReyes: 
// Verificar si el usuario ha iniciado sesión
// if (isset($_SESSION['user']) && $_SESSION['user'] instanceof Usuario) { // Ponemos instance of porque antes hemos asignado el $_SESSION al ->getUsername();
//     $username = $_SESSION['user']->getUsername();
//     echo "¡Bienvenido, $username!";
// } 

$usuarioRegistrado = False;

foreach ($credenciales as $usuario => $pass) {
    if ($usuarioIn == $usuario && $passIn == $pass) {
        $usuarioRegistrado = True;
    }
}

if ($usuarioRegistrado){
    header("Location: ./cartaReyes.php");
}
else {
    echo "<br>";
    echo "Credenciales incorrectas";
}
ob_end_flush();  // Limpiar y enviar el búfer de salida
?>