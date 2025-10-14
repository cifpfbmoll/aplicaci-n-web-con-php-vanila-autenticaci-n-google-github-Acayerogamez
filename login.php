<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();

// Configuración del cliente de Google - ¡TUS CREDENCIALES YA ESTÁN AQUÍ!
$clientID = '469042230703-2hg22trqrokbn5b4qjhbr2iriti0qct8.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/google-auth-php/callback.php';

// Crear el cliente de Google
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Redirigir a la página de autorización de Google
header('Location: ' . $client->createAuthUrl());
exit();
?>