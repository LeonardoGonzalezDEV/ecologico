<?php
// Incluir el archivo de configuración de la base de datos
require_once('db_config.php');

// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Consultar la base de datos para verificar las credenciales
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $result = mysqli_query($conexion, $query);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if (mysqli_num_rows($result) == 1) {
        // Iniciar sesión y redirigir al usuario a la página de inicio
        $_SESSION['usuario'] = $usuario;
        header("Location: inicio.php");
        exit(); // Salir del script después de la redirección
    } else {
        // Si las credenciales son incorrectas, mostrar un mensaje de error
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>