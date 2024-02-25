<?php
// Iniciar o reanudar la sesión
session_start();

// Recibir los detalles del producto
$productDetails = json_decode(file_get_contents('php://input'), true);

// Guardar los detalles del producto en la sesión
$_SESSION['cart_product'] = $productDetails;
?>
