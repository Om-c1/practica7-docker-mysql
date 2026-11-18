<?php
$host = 'db';
$user = 'usuario_app';
$pass = 'password123';
$dbname = 'holamundo_db';

$conn = new mysqli($host, $user, $pass, $dbname);

echo "<h1>¡Hola Mundo desde PHP y Docker Compose!</h1>";

if ($conn->connect_error) {
    echo "<p>Error de conexión a MySQL: " . $conn->connect_error . "</p>";
} else {
    echo "<p>Conectado exitosamente a la base de datos MySQL (" . $dbname . ").</p>";
}
?>