<?php
define('DB_HOST', 'srv1246.hstgr.io');
define('DB_USERNAME', 'u516712768_david');
define('DB_PASSWORD', 'D4v1d###');
define('DB_DATABASE', 'u516712768_david');
define('DB_PORT', 3306);

// Intenta conectar a la base de datos
$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
mysqli_set_charset($conexion, "utf8mb4");

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
    
}
?>
