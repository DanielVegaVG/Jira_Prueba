<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'asignaturas');

$consulta = 'SELECT nombre, color FROM asignaturas;';
$resultado = $conexion->query($consulta);

// Primera fila
$fila1 = $resultado->fetch_array();

// Segunda fila
$fila2 = $resultado->fetch_array();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Vega">
    <title>Horario</title>

    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Primera fila</h2>
    <?php if ($fila1): ?>
        <p>
            <?php foreach ($fila1 as $valor) { echo $valor . ' '; } ?>
        </p>
    <?php endif; ?>

    <h2>Segunda fila</h2>
    <?php if ($fila2): ?>
        <p>
            <?php foreach ($fila2 as $valor) { echo $valor . ' '; } ?>
        </p>
    <?php endif; ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Color</th>
        </tr>
        <tr>
            <td><?php echo $fila1['nombre']; ?></td>
            <td><?php echo $fila1['color']; ?></td>
        </tr>
        <tr>
            <td><?php echo $fila2['nombre']; ?></td>
            <td><?php echo $fila2['color']; ?></td>
        </tr>
    </table>

    <ul>
        <li>Desarrollo Web en Entorno de Cliente (DWENC)</li>
        <li>Desarrollo Web en Entorno de Servidor (DWESV)</li>
        <li>Despliegue de Aplicaciones Web (DEAPW)</li>
        <li>Sostenibilidad Aplicada al Sistema Productivo (SASP)</li>
        <li>Itinerario Personal para la Empleabilidad 2 (IPP2)</li>
        <li>Proyecto Intermodular (PIMOD)</li>
        <li>Tutoría (TUTO)</li>
        <li>OPT1</li>
        <li>OPT2A</li>
        <li>OPT2I</li>
    </ul>
</body>
</html>