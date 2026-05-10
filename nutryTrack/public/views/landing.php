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
        <header class="header">
            
                <img src="img/favicon.png" alt="Logo NutryTrack"  style="width: 3rem; padding-left:20px;  opacity: 0.8; width: 2rem;">
            
            <p>
                
            </p>
            <nav>
                Bienvenid@  <strong><?= $_SESSION['userName'] ?></strong>,
                <a href="index.php?accion=logout" style="margin-left: 1.5rem;">Cerrar Sesión</a>                
            </nav>
        </header>

        <table border="1" cellpadding="10">
            <tr>
                <th>Registro</th>
<<<<<<< HEAD
=======
                <th>Comida</th>
>>>>>>> v1-ABF
                <th>Fecha</th>
                <th>Comida</th>  
                <th>Gramos</th>
                <th>Total Proteínas</th>
                <th>Total Carbos</th>
                <th>Total Grasas</th>
                <th>Total Kcals</th>
                <th>Acciones</th>

            </tr>

            <?php foreach ($registros as $p): ?>
<<<<<<< HEAD
            <tr>
                <td><?= $p->getId() ?></td>
                <td><?= $p->getDate() ?></td>
                <td><?= $p->getRecipeName() ?></td>
                <td><?= $p->getGrams() ?></td>
                <td><?= $p->calculateProteins() ?></td>
                <td><?= $p->calculateCarbs() ?></td>
                <td><?= $p->calculateFats() ?></td>
                <td><?= $p->calculateKcals() ?></td>
                    <td>  
=======
                <tr>
                    <td><?= $p->getId() ?></td>
                    <td><?= $p->getRecipeName() ?></td>
                    <td><?= $p->getDate() ?></td>
                    <td><?= $p->getGrams() ?></td>
                    <td><?= $p->calculateProteins() ?></td>
                    <td><?= $p->calculateCarbs() ?></td>
                    <td><?= $p->calculateFats() ?></td>
                    <td><?= $p->calculateKcals() ?></td>
                    <td>
>>>>>>> v1-ABF
                        <a href="index.php?accion=editar&id=<?= $p->getId() ?>">Editar</a>
                        <a href="index.php?accion=eliminar&id=<?= $p->getId() ?>">Eliminar</a>
                    </td>

                </tr>
                
            <?php endforeach; ?>
            <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="index.php?accion=crear" style="margin-left: 0.5rem;">Registrar comida</a></td>
                </tr>

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