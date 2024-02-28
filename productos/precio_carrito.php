<?php
// Iniciar o reanudar la sesión
session_start();

// Leer los datos de sesión
$ruta_img = isset($_SESSION['ruta_img']) ? $_SESSION['ruta_img'] : '';
$producto = isset($_SESSION['producto']) ? $_SESSION['producto'] : '';
$precio_por_producto = isset($_SESSION['precio_por_producto']) ? $_SESSION['precio_por_producto'] : 0;

// Recibir la cantidad del producto
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

// Calcular el precio total del producto
$precio_total_producto = $precio_por_producto * $quantity;

// Agregar el precio y la cantidad del producto a la sesión
if (!isset($_SESSION['cart_price'])) {
    $_SESSION['cart_price'] = 0;
}
if (!isset($_SESSION['cart_quantity'])) {
    $_SESSION['cart_quantity'] = 0;
}

$_SESSION['cart_price'] += $precio_total_producto;
$_SESSION['cart_quantity'] += $quantity;

// Devolver el valor total del carrito como respuesta

echo '$' . number_format($_SESSION['cart_price'], 2);
?>