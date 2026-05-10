<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NutryTrack</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="icon" type="image/png" href="img/favicon.png">
    </head>
    <body>
        <p class="pagTitus">Registrarse</p>
        <form method="POST" class="formularios">
           
            <input type="email" class="inputs" name="email" placeholder="Email..." onfocus="this.placeholder=''" onblur="this.placeholder='Email...'" required>

            <input type="text" class="inputs" name="username" placeholder="Nombre de usuario..." onfocus="this.placeholder=''" onblur="this.placeholder='Nombre de usuario...'" required>

           <input type="password" class="inputs" name="password" placeholder="Contraseña..." onfocus="this.placeholder=''" onblur="this.placeholder='Contraseña...'" required>
            <nav class="checkboxes">

                <button type="submit">Registrarse</button>
            </nav>

        </form>
        <nav class="bajo_login">

            <p>¿Ya tienes una cuenta? <a href="index.php?accion=login">Inicia sesión aquí</a></p>
            <a href="index.php">Volver al inicio</a>
        </nav>
        
        <img src="img/favicon.png" alt="Logo NutryTrack" class="login-image"">
       
    </body>
</html>