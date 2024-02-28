<?php
// Iniciar o reanudar la sesión
session_start();

// Vaciar todos los datos de la sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redirigir a una página después de eliminar la sesión, si es necesario
header('Location: pagina_despues_de_eliminar_sesion.php');
exit;
?>
