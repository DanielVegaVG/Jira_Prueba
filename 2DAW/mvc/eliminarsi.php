<?php 
require "configdb.php";
require "./modelo/asignaturas.php";
require "./controlador/c-asignatura.php";
$controlador = new Controlador();
$id=$_GET["id"];
$controlador->eliminar($conexion, $id);
echo '<p>Fila borrada correctamente</p>';
echo '<a href="listar.php">Volver</a>';
?>