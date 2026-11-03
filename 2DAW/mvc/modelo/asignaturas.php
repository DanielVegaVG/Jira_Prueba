<?php
function obtenerAsignaturas($conexion) {
    $consulta = 'SELECT * FROM asignatura';
    $resultado = $conexion->query($consulta);
    $asignaturas = [];
    while ($fila = $resultado->fetch_array()) {
        $asignaturas[] = $fila;
    }
    return $asignaturas;
}
function obtenerAsignatura($conexion, $id) {
    $consulta = "SELECT * FROM asignatura WHERE id = " . $id;
    $resultado = $conexion->query($consulta);
    return $resultado->fetch_array();
}
function insertarAsignatura($conexion, $nombre, $color) {
    $consulta = "INSERT INTO asignatura (nombre, color) VALUES ('$nombre', '$color')";
    return $conexion->query($consulta);
}
function actualizarAsignatura($conexion, $id, $nombre, $color) {
    $consulta = "UPDATE asignatura 
                 SET nombre = '$nombre', color = '$color' 
                 WHERE id = " .$id;
    return $conexion->query($consulta);
}
function borrarAsignatura($conexion, $id){
    $consulta ="DELETE FROM asignatura WHERE id =".$id;
    return $conexion->query($consulta);
}
?>