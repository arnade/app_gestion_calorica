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
    <p class="pagTitus">Registrar comida</p>

    <form method="POST" class="formularios">

        <input list="listaRecetas" class="inputs" id="receta" name ="receta" placeholder="¿Qué has comido?" onfocus="this.placeholder=''" onblur="this.placeholder='¿Qué has comido?'" required>

        <datalist id="listaRecetas">
            <?php foreach ($listaRecetas as $receta): ?>
                <option value="<?php echo $receta["ID"] . " - " . $receta["NAME"]; ?>">
            <?php endforeach; ?>
        </datalist>

        <input type="date" class="inputs" name="fecha"  required>

         
        <input type="number" class="inputs" name="gramos" placeholder="¿Cuántos gramos?" onfocus="this.placeholder=''" onblur="this.placeholder='¿Cuántos gramos?'" required>
        

        <button type="submit">Registrar comida</button>
    </form>
        <nav class="bajo_login">
                <a href="index.php">Volver al listado</a>
        </nav>
        <figure>
            <img src="img/favicon.png" alt="Logo NutryTrack" class="login-image">
       </figure>

</body>
</html>
