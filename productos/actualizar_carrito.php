<?php
// Iniciar o reanudar la sesión
session_start();

// Recibir la cantidad del primer producto
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

// Recibir la cantidad del segundo producto
$quantity2 = isset($_POST['quantity2']) ? intval($_POST['quantity2']) : 0;

// Obtener el ID del primer producto
$id_producto = isset($_SESSION['id_producto']) ? $_SESSION['id_producto'] : 0;

// Obtener el ID del segundo producto
$id_producto_2 = isset($_SESSION['id_producto_2']) ? $_SESSION['id_producto_2'] : 0;

// Verificar si el primer producto ya está en el carrito
if (!isset($_SESSION['carrito'][$id_producto])) {
    // Si el primer producto no está en el carrito, agregarlo
    $_SESSION['carrito'][$id_producto] = [
        'ruta_img' => isset($_SESSION['ruta_img']) ? $_SESSION['ruta_img'] : '',
        'producto' => isset($_SESSION['producto']) ? $_SESSION['producto'] : '',
        'precio_por_producto' => isset($_SESSION['precio_por_producto']) ? $_SESSION['precio_por_producto'] : 0,
        'cantidad' => $quantity,
        'precio_total' => isset($_SESSION['precio_por_producto']) ? $_SESSION['precio_por_producto'] * $quantity : 0
    ];
} else {
    // Si el primer producto ya está en el carrito, actualizar la cantidad y el precio total
    $_SESSION['carrito'][$id_producto]['cantidad'] += $quantity;
    $_SESSION['carrito'][$id_producto]['precio_total'] += $_SESSION['carrito'][$id_producto]['precio_por_producto'] * $quantity;
}

// Verificar si el segundo producto ya está en el carrito
if (!isset($_SESSION['carrito'][$id_producto_2])) {
    // Si el segundo producto no está en el carrito, agregarlo
    $_SESSION['carrito'][$id_producto_2] = [
        'ruta_img' => isset($_SESSION['ruta_img_2']) ? $_SESSION['ruta_img_2'] : '',
        'producto' => isset($_SESSION['producto_2']) ? $_SESSION['producto_2'] : '',
        'precio_por_producto' => isset($_SESSION['precio_por_producto_2']) ? $_SESSION['precio_por_producto_2'] : 0,
        'cantidad' => $quantity2,
        'precio_total' => isset($_SESSION['precio_por_producto_2']) ? $_SESSION['precio_por_producto_2'] * $quantity2 : 0
    ];
} else {
    // Si el segundo producto ya está en el carrito, actualizar la cantidad y el precio total
    $_SESSION['carrito'][$id_producto_2]['cantidad'] += $quantity2;
    $_SESSION['carrito'][$id_producto_2]['precio_total'] += $_SESSION['carrito'][$id_producto_2]['precio_por_producto'] * $quantity2;
}

// Imprimir el carrito
echo '<h5>Detalles del Carrito:</h5>';
foreach ($_SESSION['carrito'] as $id => $producto) {
    echo "<h6>Producto ID: $id</h6>";
    echo "<p>Nombre del producto: {$producto['producto']}</p>";
    echo "<img src='{$producto['ruta_img']}' alt='Imagen del producto'>";
    echo "<p>Precio por producto: {$producto['precio_por_producto']}</p>";
    echo "<label for='quantity'>Cantidad en el carrito:</label>";
    echo "<input type='number' id='quantity' name='quantity' value='{$producto['cantidad']}' readonly>";
    echo "<p>Precio total del producto en el carrito: {$producto['precio_total']}</p>";
}
?>
