<?php
require "configdb.php";
require "./modelo/asignaturas.php";
require "./controlador/c-asignatura.php";

$controlador = new Controlador();

$id = $_GET['id'];

if (isset($_GET['modificar'])) {
    $controlador->modificar($conexion, $id, $nombre, $color);
    header("Location: listar.php");
    exit;
}
$asignatura = $controlador->obtener($conexion, $id);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar asignatura</title>
</head>
<body>
    <h1>Modifica la asignatura</h1>
    <form action="mod.php" method="GET">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="modificar" value="1">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $asignatura["nombre"]; ?>">
        <br>
        <label>Color:</label>
        <input type="text" name="color" value="<?php echo $asignatura["color"]; ?>">
        <br>
        <input type="submit"></input>
    </form>

    <p><a href="listar.php">Volver al listado</a></p>
</body>
</html>