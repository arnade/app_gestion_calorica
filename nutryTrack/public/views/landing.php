<!DOCTYPE html>
<html>
<head>
    <title>NutryTrack</title>
</head>
<body>
    <h1>NutryTrack</h1>

    <div style="background-color: #f0f0f0; padding: 10px; margin-bottom: 20px;">
        <?php if (isset($_SESSION['usuario_id'])): ?>
            Bienvenido, <b><?= $_SESSION['userName'] ?></b>
            <a href="index.php?accion=logout">Cerrar Sesión</a>
        <?php else: ?>
            <h2>Inicia Sesión para ver tus registros</h2>
            <a href="index.php?accion=login">Iniciar Sesión</a>
            <a href="index.php?accion=alta">Registrarse</a><p>
        <?php endif; ?>
    </div>

    <?php if (isset($_SESSION['usuario_id'])): ?>
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
      <?php endif; ?>
</body>
</html>
