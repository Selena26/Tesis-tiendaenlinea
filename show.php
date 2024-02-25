<?php
// Iniciar o reanudar la sesión
session_start();

// Mostrar todos los datos almacenados en la sesión
echo "<h2>Datos almacenados en la sesión:</h2>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
