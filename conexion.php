<?php
// Configuración por defecto para el servidor en la nube (producción)
$host = "localhost";
$usuario = "tu_usuario_en_la_nube"; 
$password = "tu_contrasena_en_la_nube"; 
$base_datos = "tu_base_de_datos_en_la_nube";

// Si estás trabajando en tu computadora (XAMPP local), se ajusta automáticamente:
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $usuario = "root";
    $password = "";
    $base_datos = "nercovalch_db"; // Cambia esto si tu BD local tiene otro nombre
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$base_datos;charset=utf8", $usuario, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>