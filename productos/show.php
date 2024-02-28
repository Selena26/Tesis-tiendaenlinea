<?php
// Iniciar o reanudar la sesión
session_start();

// Mostrar todos los datos almacenados en la sesión
echo "<h2>Datos almacenados en la sesión:</h2>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// Imprimir solo el precio total del primer producto en el carrito
foreach ($_SESSION['carrito'] as $id => $producto) {
    if ($id == $_SESSION['id_producto']) {
        echo "<p>Precio total del primer producto en el carrito: {$producto['precio_total']}</p>";
        break; // Detener el bucle después de imprimir el precio del primer producto
    }
}

?>
