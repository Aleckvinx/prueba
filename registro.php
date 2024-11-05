<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <form action="procesar_registro.php" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Registro de Usuario</h2>

        <input type="text" name="username" placeholder="Nombre de usuario" class="w-full p-3 mb-4 border rounded" required>
        <input type="number" name="edad" placeholder="Edad" class="w-full p-3 mb-4 border rounded" required>
        <label>Fecha en la que viajo</label>
        <br>
        <input type="date" name="fecha" class="w-full p-3 mb-4 border rounded" required>
        <label>¿Eres VIP?</label>
        <br>
        <select name="vip" class="w-full p-3 mb-4 border rounded">
            <option value="No">No</option>
            <option value="Sí">Sí</option>
        </select>
        <input type="text" name="provincia" placeholder="Provincia" class="w-full p-3 mb-4 border rounded" required>
        <input type="email" name="email" placeholder="Correo electrónico" class="w-full p-3 mb-4 border rounded" required>
        <input type="password" name="password" placeholder="Contraseña" class="w-full p-3 mb-4 border rounded" required>
        <input type="file" name="profile_picture" class="w-full p-3 mb-4 border rounded">

        <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white p-3 rounded">
            Registrarse
        </button>
        <br>
        <p class="text-center mt-4">¿Ya tienes una cuenta? <a href="login.php" class="text-indigo-500">Inicia sesión</a></p>
    </form>

</body>
</html>
