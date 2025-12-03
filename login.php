<?php

// login.php (VERSIÓN LIMPIA)

// Incluimos nuestro archivo de configuración central, que está ignorado por Git.
require_once 'google-api-config.php';

// Redirigimos a la URL de autenticación que se crea en el archivo de config.
header('Location: ' . $google_client->createAuthUrl());

?>
