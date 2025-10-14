<?php
// Iniciar la sesión para poder acceder a ella
session_start();

// Eliminar todas las variables de la sesión
$_SESSION = array();

// Destruir la sesión completamente
session_destroy();

// Redirigir al usuario a la página de inicio
header('Location: index.php');
exit();
?>