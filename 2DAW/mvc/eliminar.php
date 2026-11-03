<?php
require "configdb.php";
require "./modelo/asignaturas.php";
require "./controlador/c-asignatura.php";
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Asignatura</title>
</head>
<body>
    <h1>Eliminar Asignatura</h1>
    <?php echo '<a href="eliminarsi.php?id='.$id.'">SI</a>';?>
</body>
</html>