<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();

// Configuración del cliente de Google - ¡TUS CREDENCIALES YA ESTÁN AQUÍ!
$clientID = '469042230703-2hg22trqrokbn5b4qjhbr2iriti0qct8.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/google-auth-php/callback.php';

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);

if (isset($_GET['code'])) {
    try {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        if (isset($token['error'])) {
            throw new Exception('Error fetching access token: ' . $token['error_description']);
        }
        $client->setAccessToken($token['access_token']);

        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        $_SESSION['user_data'] = [
            'name' => $google_account_info->name,
            'email' => $google_account_info->email,
            'picture' => $google_account_info->picture,
        ];

        header('Location: index.php');
        exit();

    } catch (Exception $e) {
        echo 'Ha ocurrido un error: ' . $e->getMessage();
        exit();
    }
}

header('Location: index.php');
exit();
?>```

#### **Archivo 4: `logout.php`**
```php
<?php
session_start();
$_SESSION = array();
session_destroy();
header('Location: index.php');
exit();
?>