<?php
require_once('db_config.php');
// Verificar si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Conexión a la base de datos
     // Asegúrate de tener el archivo de configuración correcto


    // Preparar la consulta SQL para insertar los datos en la tabla de usuarios
    $query = "INSERT INTO usuario (user, pass, Nombre, Apellidos, edad) VALUES ('$usuario', '$contraseña', '$nombre', '$apellido', '$edad')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $query)) {
        // Registro exitoso, mostrar mensaje y redirigir después de 3 segundos
        echo "<div style='text-align: center; font-size: 40px; padding: 20px;";
        echo "            @media (max-width: 600px) {";
        echo "                font-size: 64px;";
        echo "            }";
        echo "'>Registro exitoso. ¡Bienvenido, $nombre!</div>";
        echo "<script>setTimeout(function() { window.location.href = '../inicio.html'; }, 3000);</script>";
    } else {
        // Error al registrar usuario
        echo "Error al registrar usuario: " . mysqli_error($conexion);
    }
}
?>
