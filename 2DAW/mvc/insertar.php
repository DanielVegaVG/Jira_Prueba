<?php
require "configdb.php";
require "./modelo/asignaturas.php";
require "./controlador/c-asignatura.php";

$controlador = new Controlador();
$asignaturas = $controlador->insertar($conexion);
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir asignatura</title>
</head>
<body>
    <h1>Añadir asignatura</h1>
    <form method="POST" action="insertar.php">
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="color" placeholder="Color(hex sin #)"><br>
        <button type="submit">Añadir</button>
    </form>
    <p><a href="index.php">Volver al menú</a></p>
</body>
</html>