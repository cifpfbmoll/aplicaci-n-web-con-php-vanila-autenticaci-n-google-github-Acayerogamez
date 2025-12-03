<?php
// callback.php - VERSIÓN FUNCIONAL

// Incluimos la configuración central.
require_once 'google-api-config.php';

// Google nos devuelve un 'code' si el usuario autoriza.
if (isset($_GET['code'])) {
    try {
        // Canjeamos el 'code' por un token de acceso.
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
        $google_client->setAccessToken($token);

        // Guardamos el token en la sesión PHP.
        $_SESSION['access_token'] = $token;

        // Pedimos a Google los datos del perfil del usuario.
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();

        // Guardamos los datos que nos interesan en la sesión.
        if (!empty($data['name'])) {
            $_SESSION['user_name'] = $data['name'];
        }
        if (!empty($data['email'])) {
            $_SESSION['user_email'] = $data['email'];
        }
        if (!empty($data['picture'])) {
            $_SESSION['user_picture'] = $data['picture'];
        }

        // Redirigimos al usuario a la página de bienvenida.
        header('Location: test.php');
        exit();

    } catch (Exception $e) {
        // Si algo falla, muestra un error claro.
        die('Ha ocurrido un error al contactar con Google: ' . $e->getMessage());
    }
} else {
    // Si alguien llega aquí sin un 'code', lo mandamos al inicio.
    header('Location: index.php');
    exit();
}
?>
