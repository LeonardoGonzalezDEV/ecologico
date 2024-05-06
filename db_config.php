<?php
define('DB_HOST', 'srv1246.hstgr.io');
define('DB_USERNAME', 'u516712768_leo');
define('DB_PASSWORD', 's?zf#M;Cm9J?');
define('DB_DATABASE', 'u516712768_tecnoinfo');
define('DB_PORT', 3306);

// Intenta conectar a la base de datos
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
mysqli_set_charset($conn, "utf8mb4");

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
    
}
?>
