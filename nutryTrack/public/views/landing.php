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
        <?php if (isset($_SESSION['usuario_id'])): ?>
            Bienvenido, <b><?= $_SESSION['userName'] ?></b>
            <a href="index.php?accion=logout">Cerrar Sesión</a>
            <a href="index.php?accion=crear">Registrar comida</a><p>
        
        <table border="1" cellpadding="10">
            <tr>
                <th>Registro</th>
                <th>Comida</th> 
                <th>Fecha</th>
                <th>Gramos</th>
                <th>Total Proteínas</th>
                <th>Total Carbos</th>
                <th>Total Grasas</th>
                <th>Total Kcals</th>
                <th>Acciones</th>

            </tr>

            <?php foreach ($registros as $p): ?>
            <tr>
                <td><?= $p->getId() ?></td>
                <td><?= $p->getRecipeName() ?></td>
                <td><?= $p->getGrams() ?></td>
                <td><?= $p->calculateProteins() ?></td>
                <td><?= $p->calculateCarbs() ?></td>
                <td><?= $p->calculateFats() ?></td>
                <td><?= $p->calculateKcals() ?></td>
                    <td>  
                        <a href="index.php?accion=editar&id=<?= $p->getId() ?>">Editar</a>
                        <a href="index.php?accion=eliminar&id=<?= $p->getId() ?>">Eliminar</a>
                    </td>

            </tr>
            <?php endforeach; ?>

        </table>
          
        <?php else: ?>
        
        <main class="principal">

            <section class="titulo">
                <p class="tit">Nutry<strong>Track</strong></p>
                <p class="subtit">Elige una vida saludable</p>
                <a href="#i2" class="flechabajo">&#x2193;</a>
            </section>

            <section class="bienvenida2" id="i2">
                <?php if (isset($_SESSION['usuario_id'])): ?>
                    
                <?php else: ?>
                    <p>¿Quieres empezar a disfrutar de una vida más saludable?</p>
                    <nav>
                        <a href="index.php?accion=login">Inicia Sesión</a>
                        <a href="index.php?accion=alta">Regístrate</a>
                    </nav>
                <?php endif; ?>
            </section>
        </main>

        <?php endif; ?>
    </body>
</html>

