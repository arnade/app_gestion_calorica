<!DOCTYPE html>
<html>
<head>
    <title>Registrar comida</title>
</head>
<body>
    <h1>Registrar comida</h1>

    <form method="POST">
        <label for="receta">Qué has comido?</label>

        <input list="listaRecetas" name="receta" id="receta" required>

        <datalist id="listaRecetas">
            <?php foreach ($listaRecetas as $receta): ?>
                <option value="<?php echo $receta["ID"] . " - " . $receta["NAME"]; ?>">
            <?php endforeach; ?>
        </datalist>


        <label for="fecha">Qué día</label>

        <input type="date" name="fecha" required><br><br>

         <label for="gramos">Cuántos gramos?</label>
        <input type="number" name="gramos" required><br><br>
        <br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
