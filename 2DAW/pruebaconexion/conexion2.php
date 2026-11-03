<?php
require 'configdb.php';

$consulta = 'SELECT nombre, color FROM asignatura;';
$resultado = $conexion->query($consulta);
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
    <table>
        <tr>
            <th>Nombre</th>
            <th>Color</th>
        </tr>
        <?php
            while($fila=$resultado->fetch_array()){
                echo '<tr>';
                echo '<td>'.$fila['nombre'].'</td>';
                echo '<td style="background-color"="#'.$fila["color"].'">'.$fila['color'].'</td>';
                echo '</tr>';
            }  
            echo '</table>';
            echo '<p>No hay más filas</p>';
        ?>
</body>
</html>