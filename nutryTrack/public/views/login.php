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
       <p class="pagTitus">Iniciar Sesión</p>
    
       <?php if (isset($error)): ?>
           <p style="color: red;"><b>Error:</b><?= $error ?></p>
       <?php endif; ?>

       <form method="POST" class="formularios">
           <input type="email" class="inputs" name="email" placeholder="Email..." onfocus="this.placeholder=''" onblur="this.placeholder='Email...'" required>
           <input type="password" class="inputs" name="password" placeholder="Contraseña..." onfocus="this.placeholder=''" onblur="this.placeholder='Contraseña...'" required>
           <nav class="checkboxes">
                <button type="submit">Entrar</button>
                <div>

                    <input type="checkbox" name="recordarme" id="recordarme">
                    <label for="recordarme">Recuérdame</label>
                </div>
                
           </nav>
       </form>

       <nav class="bajo_login">
           <p>¿No tienes una cuenta? <a href="index.php?accion=alta">Regístrate aquí</a></p>
           <a href="index.php">Volver al inicio</a>
       </nav>
       <figure>
            <img src="img/favicon.png" alt="Logo NutryTrack" class="login-image">
       </figure>
    </body>
</html>