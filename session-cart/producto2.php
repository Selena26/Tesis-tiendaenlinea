<?php
session_start();

// Información del producto 1
$id_producto1 = 1;
$nombre_producto1 = "Producto 1";
$precio_producto1 = 10.00;

if(isset($_POST['agregar1'])) {
    // Agregar producto al carrito
    if(isset($_SESSION['carrito'][$id_producto1])) {
        $_SESSION['carrito'][$id_producto1]['cantidad']++;
    } else {
        $_SESSION['carrito'][$id_producto1] = array(
            'nombre' => $nombre_producto1,
            'precio' => $precio_producto1,
            'cantidad' => 1
        );
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Producto 1</title>
</head>
<body>
    <h1><?php echo $nombre_producto1; ?></h1>
    <p>Precio: $<?php echo $precio_producto1; ?></p>
    <form method="post">
        <input type="submit" name="agregar1" value="Agregar al carrito">
    </form>
</body>
</html>
