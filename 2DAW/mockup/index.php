<?php
$asignaturas = [
    'DWESV',
    'DWENC',
    'IPEII',
    'DIW',
    'DESP',
    'PIMOD',
    'TUTORIA',
    'DASP',
    'OPT1'
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>ALTA HORARIO</title>
</head>
<body>
    <header>
        <div id="nav">
            <a href="Inicio">Inicio</a>
            <a href="Horarios">Horarios</a>
            <a href="Asignaturas">Asignaturas</a>
        </div>
    </header>
    <form method="post" action="guardar_horario.php">
        <p>Clase: 2DAW</p>
        <table>
            <thead>
                <tr>
                    <th>Hora</th>
                    <th>L</th>
                    <th>M</th>
                    <th>X</th>
                    <th>J</th>
                    <th>V</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($fila = 1; $fila <= 6; $fila++): ?>
                    <tr>
                        <td><?= $fila ?></td>
                        <?php for ($dia = 1; $dia <= 5; $dia++): ?>
                            <td>
                                <select name="horario[<?= $fila ?>][<?= $dia ?>]" id="h<?= $fila ?>d<?= $dia ?>">
                                    <option value=""> Selecciona </option>
                                    <?php foreach ($asignaturas as $indice => $nombre): ?>
                                        <option value="<?= $indice + 1 ?>"><?= $nombre ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <input type="submit" value="Guardar horario" disabled>
    </form>
</body>
</html>