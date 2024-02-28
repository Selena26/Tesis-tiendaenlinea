<?php
// Iniciar o reanudar la sesión
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASUS Vivobook Flagship
 | Online Dc Solution</title>
    <!-- CDN de boostrap 5 real  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../assets/img/quienes-somos.jpg" type="image/x-icon">
    <!-- Estilos -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/producto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<style>

</style>
<!-- Estilos para la ventana modal en el lateral derecho -->
<style>

</style>

<body style="background-color: #f6f7fb" onload="cargarImagenPorDefecto()">
    <style>

    </style>
    <!--NAV -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container">
            <img src="../assets/img/LogoOnlineNegro.png" alt="" width="100px" height="100px" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link mx-2 active" style="color: black;" aria-current="page" href="../index.html">INICIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" style="color: #0d8ce0;" href="../productos.html" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                            PRODUCTOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <style>
                                .dropdown-item:hover {
                                    text-decoration: none;
                                }
                            </style>
                            <li><a class="dropdown-item" href="../categoria-producto/equipos-gaming.html">EQUIPOS GAMING</a></li>
                            <li><a class="dropdown-item" href="../categoria-producto/laptops.html">LAPTOPS</a></li>
                            <li><a class="dropdown-item" href="../categoria-producto/accesorios.html">ACCESORIOS</a></li>
                            <li><a class="dropdown-item" href="../categoria-producto/impresoras.html">IMPRESORAS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="color: black;" href="../quienes-somos.html">QUIENES SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="color: black;" href="../contacto.html">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Servicios -->
    <style>

    </style>
    <div class="container mt-4">
        <div class="row">
            <div class="col-9">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.html" style="color: #666; text-decoration: none;">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="../categoria-producto/laptops.html" style="text-decoration: none; color: #666;">Laptops</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ASUS Vivobook Flagship
</li>
                    </ol>
                </nav>
                <!-- el producto y sus tres imagenes -->
                <div class="row ">

                    <div id="rowProductoAgregado" class="row mt-3 d-none">
                        <div class="col">
                            <div class="alert alert-primary" role="alert">
                                “ASUS Vivobook Flagship
” se ha añadido a tu carrito.
                                <a class="btn btn-light" href="../carrito.php">Ver carrito</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Product Images Carousel -->
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <canvas id="canvas" width="300" height="300"></canvas>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail" onclick="toggleImagen('../assets/img/3_productos/Asus_FN.png')">
                                    <img src="../assets/img/3_productos/Asus_FN.png" alt="Imagen 1" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail" onclick="toggleImagen('../assets/img/3_productos/Asus1_FN-600x599.png')">
                                    <img src="../assets/img/3_productos/Asus1_FN-600x599.png" alt="Imagen 2" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail" onclick="toggleImagen('../assets/img/3_productos/Asus2_FN-600x596.png')">
                                    <img src="../assets/img/3_productos/Asus2_FN-600x596.png" alt="Imagen 3" class="img-fluid">
                                </div>
                            </div>
                        </div> <!--row-->
                    </div>


                    <div class="col-md-6">
                        <!-- Product Summary -->

                        <h1 class="product-title">ASUS Vivobook Flagship
</h1>
                        <p class="price" style="color: #2EA3F2; font-size: 32px;">$669,00</p>
                        <div class="product-description" style="color: #666;">
                            <ul>
                                <li><strong>Marca:</strong> Asus</li>
                                <li><strong>Modelo:</strong> Vivobook</li>
                                <li><strong>Procesador:</strong>  Intel Core i5-1240P</li>
                                <li><strong>Tamaño de pantalla:</strong> 14 Pulgadas</li>
                                <li><strong>Almacenamiento:</strong> SSD PCIe de 2 TB</li>
                                <li><strong>Memoria RAM:</strong> 16 GB</li>
                                <li><strong>Color:</strong> Plateado</li>
                                <li><strong>Sistema operativo:</strong> Windows 11 Pro</li>
                                <li><strong>Descripción de la tarjeta gráfica:</strong> Intel UHD Graphics</li>
                            </ul>
                        </div>
                        <p class="stock in-stock" style="color: #b3af54;">10 disponibles</p>
                        <form class="cart" id="productForm"  method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="number" id="quantity" class="form-control" name="quantity" value="1" min="1" max="10" step="1" placeholder="Cantidad de productos">
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn2 btn2-square btn-block" id="addToCartBtn">Añadir al carrito</button>
                                </div>

                                <?php
                                $id_producto = 1; // ID único del producto
                                // Definir el precio por producto
                                $precio_por_producto = 619; // Precio por cada producto
                                $ruta_img = '../assets/img/productos/Acer_FN-300x300.png'; // Ruta de la imagen del producto
                                $producto = 'ACER Aspire Laptop'; // Nombre del producto

                                // Guardar el precio, la ruta de la imagen y el nombre del producto en la sesión si no están definidos previamente
                                if (!isset($_SESSION['precio_por_producto'])) {
                                    $_SESSION['precio_por_producto'] = $precio_por_producto;
                                }
                                if (!isset($_SESSION['ruta_img'])) {
                                    $_SESSION['ruta_img'] = $ruta_img;
                                }
                                if (!isset($_SESSION['producto'])) {
                                    $_SESSION['producto'] = $producto;
                                }
                                if (!isset($_SESSION['id_producto'])) {
                                    $_SESSION['id_producto'] = $id_producto;
                                }
                                
                                ?>
                            </div>
                        </form>

                        <div class="product-meta">
                            <span>Categoría: <a href="../categoria-producto/laptops.html" class="text-primary" style="text-decoration: none;">Laptops</a></span>
                        </div>
                    </div>
                </div> <!--row-->

                <!-- Product Description & Reviews Tabs -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" id="product-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Descripción</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="product-tabs-content">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <h2>Descripción</h2>
                                <ul>
                                    <li>Procesador Intel i5 eficiente de 12ª generación: Intel Core i5-1240P de 12ª generación (4 núcleos, 8 hilos, caché de 12 MB, frecuencia base a 1.7 GHz, hasta 4.4 GHz), una opción potente y eficiente para tareas informáticas diarias. Experimente el equilibrio perfecto entre rendimiento y eficiencia, elevando sus encuentros digitales a nuevas alturas.</li>
                                    <li>Pantalla IPS FHD de 14 pulgadas: la resolución de 1920 x 1080 cuenta con un color y claridad impresionantes. Retroiluminación LED de bajo consumo. La cautivadora claridad y brillo seguramente mejorarán sus esfuerzos de trabajo y entretenimiento. La pantalla antirreflejo garantiza una visualización cómoda, mejorando tu experiencia visual al máximo.
                                    </li>
                                    <li>【Memoria del sistema actualizada a 16GB】RAM adecuada de alto ancho de banda para ejecutar sin problemas múltiples aplicaciones y pestañas del navegador al mismo tiempo.</li>
                                    <li>【Actualizada a SSD PCIE de 1 TB】La unidad de estado sólido PCIe NVMe M.2 guarda archivos rápidamente y almacena más datos. Con enormes cantidades de almacenamiento y potencia de comunicación avanzada. Aborda sin problemas tareas que requieren muchos recursos, ejecuta sin problemas varias aplicaciones simultáneamente y disfruta de una capacidad de respuesta ultrarrápida que te mantiene en el flujo</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div> <!--row-->

                <!-- Productos relacionados -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h2>Productos relacionados</h2>
                        <div class="row row-cols-1 row-cols-md-10 row-cols-sm-3 g-5 mt-3 mb-5 p-5">
                            <!-- Productos -->
                            <div class="col">
                                <div class="card h-10" style="border: none;">
                                    <a href="acer-aspire-laptop.php">
                                        <img src="../assets/img/productos/Acer_FN-300x300.png" class="card-img-top" alt="...">
                                    </a>

                                    <div class="card-body">
                                        <h5 class="card-title">ACER Aspire Laptop</h5>
                                        <p class="card-text" style="color: #751fff;">$619,00</p>
                                    </div>
                                    <div class="icon-overlay">
                                        <i class="fas fa-plus-circle fa-2x text-dark"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-60" style="border: none;">
                                <a href="amd-ryzen-7-5700g-8-core.php">
                                <img src="../assets/img/productos/CPUAMDR75700G-3-f-300x300.png" class="card-img-top" alt="...">
                                </a>
                                    <div class="card-body">
                                        <h5 class="card-title">AMD Ryzen 7 5700G 8-Core</h5>
                                        <p class="card-text" style="color: #751fff;">$179,90</p>
                                    </div>
                                    <div class="icon-overlay">
                                        <i class="fas fa-plus-circle fa-2x text-dark"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-60" style="border: none;">
                                <a href="amd-ryzen-5-5500-6-core.php">
                                <img src="../assets/img/productos/amd-555006-300x300.png" class="card-img-top" alt="...">
                                </a>
                                    <div class="card-body">
                                        <h5 class="card-title">AMD Ryzen™ 5 5500 6-Core</h5>
                                        <p class="card-text" style="color: #751fff;">$98,41</p>
                                    </div>
                                    <div class="icon-overlay">
                                        <i class="fas fa-plus-circle fa-2x text-dark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--row-->
            </div>
            <!-- la segunda columna general donde esta el boton de carrito y los productos recomendados -->
            <div class="col-3" style="border-left: 1px solid #ababab75;">
                <!-- icono -->
                <button id="openModalBtn" type="button" class="btn btn-link">
                    <span id="cartValue">
                        <?php
                        // Verifica si $_SESSION['cart_price'] está establecido y asigna un valor predeterminado de 0 si no lo está
                        $cart_price = isset($_SESSION['cart_price']) ? $_SESSION['cart_price'] : 0;
                        // Imprimir el precio total del carrito formateado como moneda
                        echo '$' . number_format($cart_price, 2);
                        ?>
                    </span>
                    <i class="bi bi-cart"></i>
                </button>



                <script>
                    // Esperar a que el documento esté cargado
                    document.addEventListener("DOMContentLoaded", function() {
                        // Obtener el botón para abrir el modal
                        var openModalBtn = document.getElementById('openModalBtn');

                        // Agregar un evento de clic al botón
                        openModalBtn.addEventListener('click', function() {
                            // Obtener el modal
                            var modal = new bootstrap.Modal(document.getElementById('exampleModalRight'));

                            // Abrir el modal
                            modal.show();
                        });
                    });
                </script>






                <div class="card" style="width: 18rem; background-color: transparent; border: none">
                    <div class="card-body">
                        <style>
                            .link {
                                color: #751fff;
                                text-decoration: none;
                            }

                            .link:hover {
                                color: #751fff;
                                text-decoration: none;
                            }
                        </style>
                        <a href="yeyian-yari-ii-gaming-pc.php" class="link">
                            <img src="../assets/img/productos/CPUGN2_FN.png" alt="" width="200px">
                            <h5 class="card-title">YEYIAN Yari II Gaming PC</h5>
                        </a>
                        <p href="text-center">1.550,00</p>

                    </div>
                </div> <!--card-->
                <div class="card" style="width: 18rem; background-color: transparent; border: none">
                    <div class="card-body">
                        <style>
                            .link {
                                color: #000;
                                text-decoration: none;
                            }

                            .link:hover {
                                color: #2EA3F2;
                                text-decoration: none;
                            }
                        </style>
                        <a href="cyberpowerpc-gamer-xtreme-vr.php" class="link">
                            <img src="../assets/img/productos/CPUG_FN-300x300.png" alt="" width="200px">
                            <h5 class="card-title">CyberPowerPC Gamer Xtreme VR</h5>
                        </a>
                        <p href="text-center">1.550,00</p>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--FOOTER --->
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
    <!-- Section: Links  -->
    <!-- Copyright -->
    </footer>



    <!-- Bootstrap Bundle with Popper -->
    <div class="modal right fade" id="exampleModalRight" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tu carrito</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    // Verifica si el carrito está vacío
                    if (empty($_SESSION['cart_quantity'])) {
                        echo '<h5>¡Tu carrito está actualmente vacío!</h5>';
                    } else {
                        // Si el carrito no está vacío, muestra los detalles del producto
                        echo '<h5>Detalles del Producto:</h5>';
                        echo "<p>Nombre del producto: {$_SESSION['producto']}</p>";
                        echo "<img src='{$_SESSION['ruta_img']}' alt='Imagen del producto'>";
                        echo "<p>Precio por producto: {$_SESSION['precio_por_producto']}</p>";
                        echo "<label for='quantity'>Cantidad en el carrito:</label>";
                        echo "<input type='number' id='quantity' name='quantity' value='{$_SESSION['cart_quantity']}' readonly>";
                        echo "<p>Precio total del carrito: {$_SESSION['cart_price']}</p>";
                    }
                    ?>
                </div>

                <div class="modal-footer">
                    <hr>
                    <br>
                    <style>
                        .carrito_a:hover {
                            text-decoration: none;
                        }
                    </style>
                    <a href="../carrito.php" class="btn btn-secondary carrito_a">Ver mi Carrito</a>
                    <a href="../pago.php" class="btn btn-primary carrito_a">Ir a finalizar compra</a>
                </div>
            </div>
        </div>
    </div>

    </div>


    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        var imagenActual = null;
        var canvas = document.getElementById('canvas');
        var ctx = canvas.getContext('2d');

        function toggleImagen(ruta) {
            if (imagenActual !== ruta) {
                var imagen = new Image();
                imagen.src = ruta;
                imagen.onload = function() {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    ctx.drawImage(imagen, 0, 0, canvas.width, canvas.height);
                    imagenActual = ruta;
                };
            }
        }

        function cargarImagenPorDefecto() {
            var imagenPorDefecto = new Image();
            imagenPorDefecto.src = '../assets/img/3_productos/Asus_FN.png'; // Ruta de la imagen por defecto
            imagenPorDefecto.onload = function() {
                ctx.drawImage(imagenPorDefecto, 0, 0, canvas.width, canvas.height);
                imagenActual = '../assets/img/3_productos/Asus_FN.png'; // Actualiza la ruta de la imagen actual
            };
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- cdn de jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- BS5 JS (requiere Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script personalizado -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="script.js">

    </script>

    <script>
        $(document).ready(function() {
            // Manejar el evento click del botón "Añadir al carrito"
            $("#addToCartBtn").click(function() {
                
                // Realizar una solicitud AJAX para actualizar el carrito y el precio total
                var quantity = $("#quantity").val();

                $.ajax({
                    url: "actualizar_carrito.php",
                    type: "POST",
                    data: {
                        quantity: quantity // enviar la cantidad del producto
                    },
                    success: function(response) {
                        // Actualizar el contenido del modal con los datos actualizados del carrito
                        $("#exampleModalRight .modal-body").html(response);
                    },
                    error: function(xhr, status, error) {
                        // Manejar errores si es necesario
                        console.log(error);
                    }
                });

                // Realizar una solicitud AJAX para actualizar solo el precio total del carrito
                $.ajax({
                    url: "precio_carrito.php",
                    type: "POST",
                    data: {
                        // Puedes enviar datos adicionales aquí si es necesario
                    },
                    success: function(response) {
                        // Actualizar el contenido del elemento HTML que muestra el precio total del carrito
                        $("#cartValue").html(response);
                    },
                    error: function(xhr, status, error) {
                        // Manejar errores si es necesario
                        console.log(error);
                    }
                });
            });
        });
    </script>


</body>

</html>