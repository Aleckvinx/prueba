<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-500 to-pink-500 flex items-center justify-center">
    <div class="bg-white p-10 rounded-3xl shadow-2xl max-w-xl w-full">
        <h1 class="text-3xl font-bold text-center mb-6">¡Bienvenido/a, <?php echo htmlspecialchars($user['username']); ?>!</h1>

        <div class="grid grid-cols-2 gap-4">
            <div class="font-semibold">Nombre de usuario:</div>
            <div><?php echo htmlspecialchars($user['username']); ?></div>

            <div class="font-semibold">Edad:</div>
            <div><?php echo htmlspecialchars($user['edad']); ?> años</div>

            <div class="font-semibold">Fecha de viaje:</div>
            <div><?php echo htmlspecialchars($user['fecha']); ?></div>

            <div class="font-semibold">VIP:</div>
            <div><?php echo htmlspecialchars($user['vip']); ?></div>

            <div class="font-semibold">Provincia:</div>
            <div><?php echo htmlspecialchars($user['provincia']); ?></div>

            <div class="font-semibold">Correo Electrónico:</div>
            <div><?php echo htmlspecialchars($user['email']); ?></div>

            <div class="font-semibold">Foto de Perfil:</div>
            <div>
                <img src="<?php echo htmlspecialchars($user['profile_picture']); ?>" 
                     alt="Foto de perfil" 
                     class="w-32 h-32 rounded-full mx-auto">
            </div>
        </div>

        <a href="logout.php" class="mt-6 block text-center bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg">
            Cerrar Sesión
        </a>
    </div>
</body>
</html>
