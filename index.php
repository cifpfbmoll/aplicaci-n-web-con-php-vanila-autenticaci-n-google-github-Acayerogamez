<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión con Google</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .profile { border: 1px solid #ccc; padding: 20px; display: inline-block; border-radius: 8px; }
        img { border-radius: 50%; }
        button { padding: 10px 20px; font-size: 16px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Autenticación con Google y PHP</h1>

    <?php if (isset($_SESSION['user_data'])): ?>
        <div class="profile">
            <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['user_data']['name']); ?>!</h2>
            <p>Email: <?php echo htmlspecialchars($_SESSION['user_data']['email']); ?></p>
            <img src="<?php echo htmlspecialchars($_SESSION['user_data']['picture']); ?>" alt="Foto de perfil">
            <br><br>
            <a href="logout.php">Cerrar Sesión</a>
        </div>
    <?php else: ?>
        <a href="login.php">
            <button>Iniciar Sesión con Google</button>
        </a>
    <?php endif; ?>
</body>
</html>