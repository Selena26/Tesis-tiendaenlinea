<?php
session_start();

$total = 0;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
        <?php if(isset($_SESSION['carrito'])): ?>
            <?php foreach($_SESSION['carrito'] as $producto): ?>
                <?php
                $subtotal = $producto['precio'] * $producto['cantidad'];
                $total += $subtotal;
                ?>
                <tr>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td>$<?php echo $producto['precio']; ?></td>
                    <td><?php echo $producto['cantidad']; ?></td>
                    <td>$<?php echo $subtotal; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        <tr>
            <td colspan="3">Total:</td>
            <td>$<?php echo $total; ?></td>
        </tr>
    </table>
</body>
</html>
