<?php
require "configdb.php";
require "./modelo/asignaturas.php";
require "./controlador/c-asignatura.php";
$controlador = new Controlador();
$asignaturas = $controlador->listar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado</title>
</head>
<body>
    <h1>Listado de asignaturas</h1>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Color</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($asignaturas as $fila) { ?>
            <tr>
                <td><?php echo $fila['nombre']; ?></td>
                <td style="background-color:#<?php echo $fila['color']; ?>">
                    <?php echo $fila['color']; ?>
                </td>
                <td>
                   <?php echo '<a href="mod.php?id='.$fila['id'].'">M</a>'; ?>
                </td>
                <td>
                    <?php echo '<a href="eliminar.php?id='.$fila['id'].'">E</a>'; ?>
                </td>
            </tr>
        <?php } ?>
    </table>

    <p><a href="index.php">Volver al menú</a></p>
</body>
</html>