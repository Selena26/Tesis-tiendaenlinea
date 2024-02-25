<?php

// Iniciar o reanudar la sesión
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito | Online Dc Solution</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
    <style>
        /* Personalización para mostrar el menú al pasar el mouse */
        .dropdown:hover .dropdown-menu {
            display: block;
            text-decoration: none;
        }

        /* Cambiar el color del texto y quitar el subrayado al pasar el mouse sobre las opciones del menú */
        .navbar-nav .nav-link:hover {
            color: #000;
            /* Cambiar el color del texto */
            text-decoration: none;
            /* Quitar el subrayado */
        }
    </style>
   <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container">
            <img src="assets/img/LogoOnlineNegro.png" alt="" width="100px" height="100px" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <style>
                           a:hover {
                                text-decoration: none;
                                color: #004ac1;
                            }
                        </style>
                        <a class="nav-link mx-2 active" style="color: #0d8ce0;" aria-current="page"
                            href="index.html">INICIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" style="color: black;" href="productos.html"
                            id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                            PRODUCTOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <style>
                                .dropdown-item:hover {
                                    text-decoration: none;
                                }
                            </style>
                            <li><a class="dropdown-item" href="categoria-producto/equipos-gaming.html">EQUIPOS GAMING</a></li>
                            <li><a class="dropdown-item" href="categoria-producto/laptops.html">LAPTOPS</a></li>
                            <li><a class="dropdown-item" href="categoria-producto/accesorios.html">ACCESORIOS</a></li>
                            <li><a class="dropdown-item" href="categoria-producto/impresoras.html">IMPRESORAS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="color: black;" href="quienes-somos.html">QUIENES SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="color: black;" href="contacto.html">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- carrito -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">CARRITO</h1>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($_SESSION['ruta_img']) && isset($_SESSION['producto']) && isset($_SESSION['precio_por_producto']) && isset($_SESSION['cart_quantity'])) : ?>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                    </td>
                                    <td>
                                        <img src="<?php echo $_SESSION['ruta_img']; ?>" alt="Producto" class="img-thumbnail" width="20%">
                                    </td>
                                    <td><?php echo $_SESSION['producto']; ?></td>
                                    <td>$<?php echo number_format($_SESSION['precio_por_producto'], 2); ?></td>
                                    <td>
                                        <div class="input-group">
                                            <input type="number" class="form-control" value="<?php echo $_SESSION['cart_quantity']; ?>" min="1" max="10" readonly>
                                        </div>
                                    </td>
                                    <td>$<?php echo number_format($_SESSION['cart_quantity'] * $_SESSION['precio_por_producto'], 2); ?></td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6">No hay productos en el carrito.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>





            <div class="col-12">
                <div class="cart-totals calculated-shipping">
                    <h2>Totales del carrito</h2>
                    <table class="table shop-table shop-table-responsive">
                        <tbody>
                            <tr class="cart-subtotal">
                                <th scope="row">Subtotal</th>
                                <td data-title="Subtotal">
                                    <span class="woocommerce-price-amount amount">
                                        <bdi>
                                            <?php
                                            if (isset($_SESSION['cart_price'])) {
                                                echo '<span class="woocommerce-price-currencySymbol">$</span>' . number_format($_SESSION['cart_price'], 2);
                                            } else {
                                                echo ''; // Si no hay datos en sesión, muestra vacío
                                            }
                                            ?>
                                        </bdi>
                                    </span>
                                </td>
                            </tr>

                            <tr class="woocommerce-shipping-totals shipping">
                                <th scope="row">Envío</th>
                                <td data-title="Envío">
                                    Enviar a
                                    <strong>Santo Domingo, Pichincha.</strong>.
                                </td>
                            </tr>
                            <tr class="cart-subtotal">
                                <th scope="row">Total</th>
                                <td data-title="Subtotal">
                                    <span class="woocommerce-price-amount amount">
                                        <bdi>
                                            <?php
                                            if (isset($_SESSION['cart_price'])) {
                                                echo '<span class="woocommerce-price-currencySymbol">$</span>' . number_format($_SESSION['cart_price'], 2);
                                            } else {
                                                echo ''; // Si no hay datos en sesión, muestra vacío
                                            }
                                            ?>
                                        </bdi>
                                    </span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="wc-proceed-to-checkout">
                        <a href="pago.html" class="btn btn-primary checkout-button button alt wc-forward">
                            Finalizar compra
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="bg-dark text-light">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                    <!-- Content -->
                    <h4 class="mt-5">INFORMACION DE CONTACTO</h4>
                    <P>Santo Domingo. <br>
                        (+593)123456789 <br>
                        Av. Quito y Abram Calazacón. <br>
                        Redondel del circulo de los continentes como referencia frente a Farmacia Cruz Azul.</P>
                </div>
                <!-- Grid column -->

                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                    <!-- Content -->
                    <h4 class="mt-5">ENLACES</h4>
                    <style>
                        a {
                            color: white;
                            /* Color normal */
                            text-decoration: underline;
                            /* Quitamos el subrayado por defecto */
                        }

                        a:hover {
                            text-decoration: underline;
                            /* Agregamos un subrayado al pasar el cursor por encima */
                            color: white;
                            /* Cambiamos el color del texto cuando se pasa el cursor */
                        }
                    </style>
                    <a href="terminos-y-condiciones.html">Términos y Condiciones</a> <br>

                    <a href="politica-de-privacidad.html">Política de Privacidad</a>

                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                    <!-- Content -->
                    <h4 class="mt-5"> REDES SOCIALES</h4>
                    <!--icono de facebook con bs5 icon -->
                    <a href="" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-facebook-f"></i></a>
                    <!-- icono de tiktpok-->
                    <a href="" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-tiktok"></i></a>
                    <!-- icono de whatsapp-->
                    <a href="" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-whatsapp"></i></a>


                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>


</body>

</html>