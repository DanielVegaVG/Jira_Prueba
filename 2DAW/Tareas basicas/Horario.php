<?php
$semana = [
    ["L"=>"IPP2","M"=>"DWENC","X"=>"IPP2","J"=>"DWESV","V"=>"OPT2I"],
    ["L"=>"DWENC","M"=>"DWENC","X"=>"DWENC","J"=>"DWESV","V"=>"OPT2A"],
    ["L"=>"DWESV","M"=>"DWESV","X"=>"DWENC","J"=>"DWESV","V"=>"DASP"],
    ["L"=>"PIMOD","M"=>"DWESV","X"=>"DWESV","J"=>"SASP","V"=>"DWESV"],
    ["L"=>"DEAPW","M"=>"PIMOD","X"=>"DEAPW","J"=>"OPT1","V"=>"DWESV"],
    ["L"=>"DWENC","M"=>"DEAPW","X"=>"DEAPW","J"=>"IPP2","V"=>"TUTO"],
    ["L"=>"DWENC"]
];
$color = [
    "IPP2"=>"#70D7FF",
    "DWENC"=>"#72ff7e",
    "DWESV"=>"#FF2E2E",
    "PIMOD"=>"#FFDD63",
    "DEAPW"=>"#6663FF",
    "SASP"=>"#00974762",
    "OPT1"=>"#9C9C9C",
    "OPT2I"=>"#FF6E38",
    "OPT2A"=>"#4FFFFF",
    "DASP"=>"#946d4c",
    "TUTO"=>"#FF91CF"
];
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
            <th></th>
            <?php
            foreach ($semana[0] as $dia => $asignatura) {
                echo "<th>$dia</th>";
            }
            ?>
        </tr>
        <?php
        for ($i = 0; $i < 7; $i++) {
            echo "<tr>";
            echo "<th>" . ($i + 1) . "</th>";
            foreach ($semana[$i] as $asignatura) {
                echo '<td style="background-color: '.$color[$asignatura].';">';
                echo $asignatura;
                echo '</td>';
            }
            echo "</tr>";
        }
        ?>
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