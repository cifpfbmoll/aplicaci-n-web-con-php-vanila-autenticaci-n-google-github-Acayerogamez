<?php
// test.php - PÁGINA DE BIENVENIDA FINAL

// Iniciamos la sesión para poder acceder a los datos del usuario.
session_start();

// Comprobamos si los datos del usuario existen en la sesión.
// Si no, significa que no ha iniciado sesión, y lo mandamos al inicio.
if (!isset($_SESSION['access_token']) || empty($_SESSION['user_name'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido al Proyecto</title>
    <!-- Le he añadido unos estilos simples para que la captura se vea profesional -->
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #f0f2f5; }
        .profile-card { padding: 40px; border-radius: 12px; background-color: white; box-shadow: 0 6px 12px rgba(0,0,0,0.1); text-align: center; border: 1px solid #ddd; }
        img.profile-picture { border-radius: 50%; width: 120px; height: 120px; margin-bottom: 20px; }
        h1 { font-size: 24px; margin: 0 0 10px 0; }
        p { font-size: 16px; color: #555; margin: 0; }
        a.logout-button { display: inline-block; margin-top: 30px; padding: 12px 24px; background-color: #d9534f; color: white; text-decoration: none; border-radius: 6px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="profile-card">
        <img class="profile-picture" src="<?php echo htmlspecialchars($_SESSION['user_picture']); ?>" alt="Foto de perfil">
        <h1>¡Bienvenido, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
        <p>Tu correo es: <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
        <a class="logout-button" href="logout.php">Cerrar Sesión</a>
    </div>
</body>
</html>
