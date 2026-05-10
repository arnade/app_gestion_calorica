<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
    <title>Registrar comida</title>
         <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
    <h1>Registrar comida</h1>

    <form method="POST">
        <label for="receta">Qué has comido?</label>

        <input list="listaRecetas" name="receta" id="receta" required>
=======
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
>>>>>>> v1-ABF

        <datalist id="listaRecetas">
            <?php foreach ($listaRecetas as $receta): ?>
                <option value="<?php echo $receta["ID"] . " - " . $receta["NAME"]; ?>">
            <?php endforeach; ?>
        </datalist>

<<<<<<< HEAD

        <label for="fecha">Qué día</label>

        <input type="date" name="fecha" required><br><br>

         <label for="gramos">Cuántos gramos?</label>
        <input type="number" name="gramos" required><br><br>
        <br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
=======
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

>>>>>>> v1-ABF
</body>
</html>
