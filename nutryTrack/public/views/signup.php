<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Crear nueva cuenta</h1>
    <form method="POST">
        Email:<br>
        <input type="email" name="email" required><br><br>

        Username:<br>
        <input type="text" name="username" required><br><br>

        Contraseña:<br>
        <input type="password" name="password" required minlenght="4"><br><br>

        <button type="submit">Registrarse</button>

    </form>
    <br>
    <p>¿Ya tienes una cuenta? <a href="index.php?accion=login"></a></p>
    <a href="index.php">Volver al inicio</a>
</body>
</html>