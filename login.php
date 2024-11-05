<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <form action="validar_login.php" method="POST" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Iniciar Sesión</h2>

        <input type="email" name="email" placeholder="Correo electrónico" class="w-full p-3 mb-4 border rounded" required>
        <input type="password" name="password" placeholder="Contraseña" class="w-full p-3 mb-4 border rounded" required>

        <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white p-3 rounded">
            Iniciar Sesión
        </button>
    </form>
</body>
</html>
