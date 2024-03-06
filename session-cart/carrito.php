<?php
session_start();


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
                <tr>
                    <td><?php echo $producto['producto']; ?></td>
                    <td>$<?php echo $producto['precio_por_producto']; ?></td>
                    <td><?php echo $producto['cantidad']; ?></td>
                    <td>$<?php echo $producto['precio_total']; ?></td>
                </tr>
                <?php
                $total += $producto['precio_total'];
                ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <tr>
            <td colspan="3">Total:</td>
            <td>$<?php echo $total; ?></td>
        </tr>
    </table>
</body>
</html>
