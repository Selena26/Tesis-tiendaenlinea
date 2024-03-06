<?php
// Loop sobre tus productos
foreach($productos as $producto) {
    // Aquí obtienes el ID único del producto de alguna manera, supongamos que está en $producto['id']
    // Otros datos del producto
    $producto_id = $producto['id'];
    $ruta_img = $producto['ruta_img'];
    $nombre_producto = $producto['nombre'];
    $precio_por_producto = $producto['precio'];
?>

<!-- Aquí muestras los detalles del producto -->
<div>
    <img src="<?php echo $ruta_img; ?>" alt="<?php echo $nombre_producto; ?>">
    <p><?php echo $nombre_producto; ?></p>
    <p>Precio: <?php echo $precio_por_producto; ?></p>
    <!-- Formulario para agregar al carrito -->
    <form action="actualizar_carrito.php" method="post">
        <input type="hidden" name="product_id" value="<?php echo $producto_id; ?>">
        <input type="hidden" name="ruta_img" value="<?php echo $ruta_img; ?>">
        <input type="hidden" name="producto" value="<?php echo $nombre_producto; ?>">
        <input type="hidden" name="precio_por_producto" value="<?php echo $precio_por_producto; ?>">
        <input type="number" name="quantity" value="1" min="1">
        <button type="submit">Agregar al carrito</button>
    </form>
</div>

<?php
}
?>
