<?php
class Controlador {
    public function insertar($conexion) {
        if (isset($_POST['nombre']) && isset($_POST['color'])) {
            insertarAsignatura($conexion, $_POST['nombre'], $_POST['color']);
        }
    }
    public function listar($conexion) {
        return obtenerAsignaturas($conexion);
    }
    public function obtener($conexion, $id) {
        return obtenerAsignatura($conexion, $id);
    }
    public function modificar($conexion, $id, $nombre, $color) {
        return actualizarAsignatura($conexion, $id, $nombre, $color);
    }
    public function eliminar($conexion, $id){
        return borrarAsignatura($conexion, $id);
    }
}
?>