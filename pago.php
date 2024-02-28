<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago | Online Dc Solution</title>
    <link rel="stylesheet" href="/assets/css/index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
</head>

<body>
    <style>
        .btn2 {
            background-color: transparent;
            border: 2px solid#2ea3f2;
            /* Morado */
            color: #2ea3f2;
            /* Morado */
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
            border-radius: 0;
            /* Hace que el botón sea cuadrado */
        }

        .btn2:hover {
            background-color: transparent;
            /* Morado */
            border: 2px solid #2ea3f2;
            /* Morado */
            color: #2ea3f2;
            /* Blanco */
            font-weight: 500;
        }

        /* Estilo personalizado para el ícono */
        .btn2-square i {
            display: none;
            /* Ocultar el ícono por defecto */
            color:
                white;
        }

        /* Estilo para mostrar el ícono al pasar el mouse (hover) */
        .btn2-square:hover i {
            display: inline-block;
            /* Mostrar el ícono al pasar el mouse */
            color: white;
        }
    </style>
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

        a {
            text-decoration: none;
            color: #2ea3f2;
        }
    </style>
    <style>
        /* Estilos personalizados para los input */
        .form-control,
        .form-select,
        .form-select option {
            color: #898989 !important;
            /* Color de las letras */
            border-radius: 0 !important;
            /* Bordes totalmente cuadrados */
            background-color: #ebebeb;
            /* Fondo fijo */
            border: none;
            height: 50px !important;
        }

        .form-control:focus,
        .form-select:focus option {
            color: #2e2e2e !important;
            /* Color de las letras */
            border-radius: 0 !important;
            /* Bordes totalmente cuadrados */
            background-color: #eae8e8;
            /* Fondo fijo */
            border: none;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container">
            <img src="assets/img/LogoOnlineNegro.png" alt="" width="100px" height="100px" class="navbar-brand">
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
                        <a class="nav-link mx-2 active" style="color: black;" aria-current="page" href="index.html">INICIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" style="color: black;" href="productos.html" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                            PRODUCTOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <style>
                                .dropdown-item:hover {
                                    text-decoration: none;
                                }
                            </style>
                            <li><a class="dropdown-item" href="categoria-producto/equipos-gaming.html">EQUIPOS
                                    GAMING</a></li>
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
    <section>
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="container">
                        <h3 style="font-weight: 300;" class="mt-5">Detalles de facturación</h3>
                        <form id="miFormulario" method="post" action="procesar_pago.php" >
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="billing_first_name" class="form-label">Nombre <strong class="text-danger">*</strong></label>
                                        <input type="text" class="form-control" id="billing_first_name" name="nombre" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="billing_last_name" class="form-label">Apellidos <strong class="text-danger">*</strong></label>
                                        <input type="text" class="form-control" id="billing_last_name" name="apellido" required>
                                    </div>
                                </div>
                                <div class="col-md-12">

                                    <div class="mb-3">
                                        <label for="billing_identidad" class="form-label">Cédula|DNI|Pasaporte <strong class="text-danger">*</strong></label>
                                        <input type="text" class="form-control" id="billing_identidad" name="cedula" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="billing_country" class="form-label">País / Región <strong class="text-danger">*</strong></label>
                                        <select class="form-select" id="billing_country" name="pais" required>
                                            <option value="" disabled selected>Selecciona tu país/región <strong class="text-danger">*</strong></option>

                                            <option value="">Selecciona un país/región…</option>
                                            <option value="AF">Afganistán</option>
                                            <option value="AL">Albania</option>
                                            <option value="DE">Alemania</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antártida</option>
                                            <option value="AG">Antigua y Barbuda</option>
                                            <option value="SA">Arabia Saudita</option>
                                            <option value="DZ">Argelia</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="PW">Belau</option>
                                            <option value="BE">Bélgica</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BY">Bielorrusia</option>
                                            <option value="MM">Birmania</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire, San Eustaquio y Saba</option>
                                            <option value="BA">Bosnia y Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BR">Brasil</option>
                                            <option value="BN">Brunéi</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="CV">Cabo Verde</option>
                                            <option value="KH">Camboya</option>
                                            <option value="CM">Camerún</option>
                                            <option value="CA">Canadá</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CY">Chipre</option>
                                            <option value="VA">Ciudad del Vaticano</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoras</option>
                                            <option value="CG">Congo (Brazzaville)</option>
                                            <option value="CD">Congo (Kinshasa)</option>
                                            <option value="KP">Corea del Norte</option>
                                            <option value="KR">Corea del Sur</option>
                                            <option value="CI">Costa de Marfil</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croacia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="DK">Dinamarca</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="EC" selected="selected">Ecuador</option>
                                            <option value="EG">Egipto</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="AE">Emiratos Árabes Unidos</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="SK">Eslovaquia</option>
                                            <option value="SI">Eslovenia</option>
                                            <option value="ES">España</option>
                                            <option value="US">Estados Unidos (EEUU)</option>
                                            <option value="EE">Estonia</option>
                                            <option value="SZ">Esuatini</option>
                                            <option value="ET">Etiopía</option>
                                            <option value="PH">Filipinas</option>
                                            <option value="FI">Finlandia</option>
                                            <option value="FJ">Fiyi</option>
                                            <option value="FR">Francia</option>
                                            <option value="GA">Gabón</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GD">Granada</option>
                                            <option value="GR">Grecia</option>
                                            <option value="GL">Groenlandia</option>
                                            <option value="GP">Guadalupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GF">Guayana Francesa</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GQ">Guinea Ecuatorial</option>
                                            <option value="GW">Guinea-Bisáu</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haití</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungría</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IQ">Irak</option>
                                            <option value="IR">Irán</option>
                                            <option value="IE">Irlanda</option>
                                            <option value="BV">Isla Bouvet</option>
                                            <option value="IM">Isla de Man</option>
                                            <option value="CX">Isla de Navidad</option>
                                            <option value="NF">Isla Norfolk</option>
                                            <option value="SH">Isla Santa Elena</option>
                                            <option value="IS">Islandia</option>
                                            <option value="AX">Islas Åland</option>
                                            <option value="KY">Islas Caimán</option>
                                            <option value="CC">Islas Cocos</option>
                                            <option value="CK">Islas Cook</option>
                                            <option value="UM">Islas de ultramar menores de Estados Unidos (EEUU)
                                            </option>
                                            <option value="FO">Islas Feroe</option>
                                            <option value="GS">Islas Georgias y Sandwich del Sur</option>
                                            <option value="HM">Islas Heard y McDonald</option>
                                            <option value="FK">Islas Malvinas</option>
                                            <option value="MP">Islas Marianas del Norte</option>
                                            <option value="MH">Islas Marshall</option>
                                            <option value="SB">Islas Salomón</option>
                                            <option value="TC">Islas Turcas y Caicos</option>
                                            <option value="VG">Islas Vírgenes (Británicas)</option>
                                            <option value="VI">Islas Vírgenes (EEUU)</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italia</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japón</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordania</option>
                                            <option value="KZ">Kazajistán</option>
                                            <option value="KE">Kenia</option>
                                            <option value="KG">Kirguistán</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="LA">Laos</option>
                                            <option value="LS">Lesoto</option>
                                            <option value="LV">Letonia</option>
                                            <option value="LB">Líbano</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libia</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lituania</option>
                                            <option value="LU">Luxemburgo</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia del Norte</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MY">Malasia</option>
                                            <option value="MW">Malaui</option>
                                            <option value="MV">Maldivas</option>
                                            <option value="ML">Malí</option>
                                            <option value="MT">Malta</option>
                                            <option value="MA">Marruecos</option>
                                            <option value="MQ">Martinica</option>
                                            <option value="MU">Mauricio</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">México</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MD">Moldavia</option>
                                            <option value="MC">Mónaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Níger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NO">Noruega</option>
                                            <option value="NC">Nueva Caledonia</option>
                                            <option value="NZ">Nueva Zelanda</option>
                                            <option value="OM">Omán</option>
                                            <option value="NL">Países Bajos</option>
                                            <option value="PK">Pakistán</option>
                                            <option value="PA">Panamá</option>
                                            <option value="PG">Papúa Nueva Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Perú</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PF">Polinesia Francesa</option>
                                            <option value="PL">Polonia</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="GB">Reino Unido (UK)</option>
                                            <option value="CF">República Centroafricana</option>
                                            <option value="CZ">República Checa</option>
                                            <option value="DO">República Dominicana</option>
                                            <option value="RE">Reunión</option>
                                            <option value="RW">Ruanda</option>
                                            <option value="RO">Rumania</option>
                                            <option value="RU">Rusia</option>
                                            <option value="EH">Sahara Occidental</option>
                                            <option value="WS">Samoa</option>
                                            <option value="AS">Samoa Americana</option>
                                            <option value="BL">San Bartolomé</option>
                                            <option value="KN">San Cristóbal y Nieves</option>
                                            <option value="SM">San Marino</option>
                                            <option value="SX">San Martín (Países Bajos)</option>
                                            <option value="MF">San Martín (parte de Francia)</option>
                                            <option value="PM">San Pedro y Miquelón</option>
                                            <option value="VC">San Vicente y las Granadinas</option>
                                            <option value="LC">Santa Lucía</option>
                                            <option value="ST">Santo Tomé y Príncipe</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leona</option>
                                            <option value="SG">Singapur</option>
                                            <option value="SY">Siria</option>
                                            <option value="SO">Somalia</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="ZA">Sudáfrica</option>
                                            <option value="SD">Sudán</option>
                                            <option value="SS">Sudán del Sur</option>
                                            <option value="SE">Suecia</option>
                                            <option value="CH">Suiza</option>
                                            <option value="SR">Surinam</option>
                                            <option value="SJ">Svalbard y Jan Mayen</option>
                                            <option value="TH">Tailandia</option>
                                            <option value="TW">Taiwán</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TJ">Tayikistán</option>
                                            <option value="IO">Territorio Británico del Océano Índico</option>
                                            <option value="TF">Territorios australes franceses</option>
                                            <option value="PS">Territorios Palestinos</option>
                                            <option value="TL">Timor Oriental</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad y Tobago</option>
                                            <option value="TN">Túnez</option>
                                            <option value="TM">Turkmenistán</option>
                                            <option value="TR">Turquía</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UA">Ucrania</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistán</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="WF">Wallis y Futuna</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabue</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="billing_address_1" class="form-label">Numero de casa y calle <strong class="text-danger">*</strong></label>
                                        <input type="text" name="numero_casa" class="form-control" id="billing_address_1" name="casa" placeholder="Ingrese su dirección de la calle" value="Santo Domingo" required>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="billing_state" class="form-label">Provincia <strong class="text-danger">*</strong></label>
                                        <input type="text" class="form-control" id="billing_state" name="provincia" placeholder="Ingrese su provincia" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="billing_phone" class="form-label">Número de teléfono <strong class="text-danger">*</strong></label>
                                        <input type="tel" class="form-control" id="billing_phone" name="telefono" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="billing_email" class="form-label">Dirección de correo electrónico <strong class="text-danger">*</strong></label>
                                        <input type="email" class="form-control" id="billing_email" name="correo" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">

                    <div class="container">
                        <h3 style="font-weight: 300;" class="mt-5">Tu pedido</h3>
                        <div class="table-responsive">

                            <?php if (isset($_SESSION['ruta_img']) && isset($_SESSION['producto']) && isset($_SESSION['precio_por_producto']) && isset($_SESSION['cart_quantity'])) : ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $_SESSION['producto']; ?> × <?php echo $_SESSION['cart_quantity']; ?></td>
                                            <td>$<?php echo number_format($_SESSION['precio_por_producto'], 2); ?></td>
                                        </tr>

                                        <tr style="font-weight: 700; color: #424242;">
                                            <td> Subtotal</td>
                                            <td>$<?php echo number_format($_SESSION['precio_por_producto'], 2); ?></td>
                                        </tr>
                                        <tr style="font-weight: 700; color: #424242;">
                                            <td> Envío</td>
                                            <td>Free shipping</td>
                                        </tr>
                                        <tr style="font-weight: 700; color: #424242;">
                                            <td>Total</td>
                                            <td>$<?php echo number_format($_SESSION['cart_quantity'] * $_SESSION['precio_por_producto'], 2); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php else : ?>
                                <tr>
                                    <td colspan="2">No hay productos en el carrito.</td>
                                </tr>
                            <?php endif; ?>

                        </div>
                    </div>
                </div> <!-- Fin de la columna para la tabla de pedido -->
                <div class="col-12">
                    <div class="container">
                        <div class="row " style="background-color: #b6b6b660;">
                            <p class="mt-4" style="color: #666;">
                                Transferencia bancaria directa </p>
                            <div class="row">
                                <div class="container m-3" style="background-color: rgba(166, 118, 211, 0.194);">
                                    <p style="color: #666;">Realiza tu pago directamente en nuestra cuenta bancaria. Por
                                        favor, usa el número
                                        del pedido como referencia de pago. Tu pedido no se procesará hasta que se haya
                                        recibido el importe en nuestra cuenta.
                                    </p>
                                </div>
                            </div>
                            <p class="mt-2 mb-5" style="color: #666;">
                                Tus datos personales se utilizarán para procesar tu pedido, mejorar tu experiencia en
                                esta web y otros propósitos descritos en nuestra <a href="politica-de-privacidad.html">política de privacidad.</a>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <input type="checkbox" id="terminosCheckbox"> He leído y estoy de acuerdo con los
                                        <a href="terminos-y-condiciones.html">términos y condiciones de la web</a>
                                        <strong class="text-danger">*</strong>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end">
                                        <a href="#" id="realizarPedidoBtn" class="btn2 btn2-square mb-3">Realizar el pedido <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Fin de todo el row general de factura -->

                    </div>
                </div>
            </div>
        </div>

        <script>
    document.getElementById("realizarPedidoBtn").addEventListener("click", function(event) {
        event.preventDefault(); // Evita que el enlace redireccione a otra página

        // Verifica si el checkbox está marcado
        if (document.getElementById("terminosCheckbox").checked) {
            // Verifica si todos los campos del formulario están llenos correctamente
            if (validarFormulario()) {
                // Si todos los campos están llenos correctamente, envía el formulario
                document.getElementById("miFormulario").submit();
                // Muestra la alerta de éxito
                alert("Correo enviado con éxito");
            } else {
                // Si hay campos vacíos o incorrectos, muestra una alerta
                alert("Por favor, completa todos los campos correctamente para continuar.");
            }
        } else {
            // Si el checkbox no está marcado, muestra una alerta
            alert("Debes aceptar los términos y condiciones para continuar.");
        }
    });

    function validarFormulario() {
        // Obtiene los valores de los campos del formulario
        var nombre = document.getElementById("billing_first_name").value.trim();
        var apellido = document.getElementById("billing_last_name").value.trim();
        var cedula = document.getElementById("billing_identidad").value.trim();
        var pais = document.getElementById("billing_country").value;
        var direccion = document.getElementById("billing_address_1").value.trim();
        var provincia = document.getElementById("billing_state").value.trim();
        var telefono = document.getElementById("billing_phone").value.trim();
        var correo = document.getElementById("billing_email").value.trim();

        // Verifica si algún campo está vacío
        if (nombre === "" || apellido === "" || cedula === "" || pais === "" || direccion === "" || provincia === "" || telefono === "" || correo === "") {
            return false; // Retorna falso si hay algún campo vacío
        }

        // Verifica si el correo tiene un formato válido
        var correoExpresion = /\S+@\S+\.\S+/;
        if (!correoExpresion.test(correo)) {
            return false; // Retorna falso si el correo no tiene un formato válido
        }

        // Retorna verdadero si todos los campos están llenos correctamente
        return true;
    }
</script>





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
                            .enlaces_footer {
                                color: white;
                                /* Color normal */
                                text-decoration: none;
                                /* Quitamos el subrayado por defecto */
                            }

                            .enlaces_footer:hover {
                                text-decoration: none;
                                /* Agregamos un subrayado al pasar el cursor por encima */
                                color: white;
                                /* Cambiamos el color del texto cuando se pasa el cursor */
                            }
                        </style>
                        <a class="enlaces_footer" href="terminos-y-condiciones.html">Términos y Condiciones</a> <br>

                        <a class="enlaces_footer" href="politica-de-privacidad.html">Política de Privacidad</a>

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
    </section>
    <script>
    // Espera a que el documento esté completamente cargado
    $(document).ready(function() {
        // Captura el evento de envío del formulario
        $('#miFormulario').submit(function(event) {
            // Evita que el formulario se envíe de forma convencional
            event.preventDefault();
            
            // Serializa los datos del formulario
            var formData = $(this).serialize();
            
            // Realiza la petición AJAX
            $.ajax({
                type: 'POST', // Método de envío
                url: 'procesar_pago.php', // Archivo de procesamiento
                data: formData, // Datos del formulario
                success: function(response) { // Función a ejecutar si la petición es exitosa
                    // Aquí puedes manejar la respuesta del servidor
                    console.log(response);
                    // Por ejemplo, mostrar un mensaje de éxito o redirigir a otra página
                    // window.location.href = 'pagina_de_exito.html';
                },
                error: function(xhr, status, error) { // Función a ejecutar si hay un error
                    // Aquí puedes manejar el error
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>



</body>

</html>