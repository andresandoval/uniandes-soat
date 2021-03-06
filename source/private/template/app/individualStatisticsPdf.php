<?php
/*
 * Developed by: Andres Sandoval Montoya
 * Date: 28/11/2016-15:15:10
 * Contact: andresandoval992@gmail.com
 *
 * reporteOxigenoAmbulancia, part of soat
 */

$total = 0;

/* @var $records \app\data\entities\app\individualStatisticsEntity[] */

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style type="text/css">
            /*

RESPONSTABLE 2.0 by jordyvanraaij
  Designed mobile first!

If you like this solution, you might also want to check out the 1.0 version:
  https://gist.github.com/jordyvanraaij/9069194

            */
            .responstable {
                margin: 1em 0;
                width: 100%;
                overflow: hidden;
                background: #FFF;
                color: #024457;
                border-radius: 10px;
                border: 1px solid #167F92;
            }
            .responstable tr {
                border: 1px solid #D9E4E6;
            }
            .responstable tr:nth-child(odd) {
                background-color: #EAF3F3;
            }
            .responstable th {
                display: none;
                border: 1px solid #FFF;
                background-color: #167F92;
                color: #FFF;
                padding: 1em;
            }
            .responstable th:first-child {
                display: table-cell;
                text-align: center;
            }
            .responstable th:nth-child(2) {
                display: table-cell;
            }
            .responstable th:nth-child(2) span {
                display: none;
            }
            .responstable th:nth-child(2):after {
                content: attr(data-th);
            }
            @media (min-width: 480px) {
                .responstable th:nth-child(2) span {
                    display: block;
                }
                .responstable th:nth-child(2):after {
                    display: none;
                }
            }
            .responstable td {
                display: block;
                word-wrap: break-word;
                max-width: 7em;
            }
            .responstable td:first-child {
                display: table-cell;
                text-align: center;
                border-right: 1px solid #D9E4E6;
            }
            @media (min-width: 480px) {
                .responstable td {
                    border: 1px solid #D9E4E6;
                }
            }
            .responstable th, .responstable td {
                text-align: left;
                margin: .5em 1em;
            }
            @media (min-width: 480px) {
                .responstable th, .responstable td {
                    display: table-cell;
                    padding: 1em;
                }
            }

            body {
                padding: 0 2em;
                font-family: Arial, sans-serif;
                color: #024457;
                background: #f2f2f2;
            }

            h1 {
                font-family: Verdana;
                font-weight: normal;
                color: #024457;
            }
            h1 span {
                color: #167F92;
            }

        </style>
    </head>
    <body>
        <h2>Reporte estadistico individual</h2>
        <br>
        <?php if (!\is_null($records)) { ?>
            <table class="responstable">
                <tr>
                    <th>HISTORIA CLINICA</th>
                    <th>FECHA</th>
                    <th>PACIENTE</th>
                    <th>DETALLE</th>
                    <th>CANTIDAD</th>
                    <th>VALOR/U</th>
                    <th>TOTAL</th>
                </tr>
                <?PHP
                for ($i = 0; $i < count($records); $i++) {
                    $total += (float) $records[$i]->getTotal();
                    echo "<tr>";
                    echo "<td>{$records[$i]->getHclinica()}</td>";
                    echo "<td>{$records[$i]->getFecha()}</td>";
                    echo "<td>{$records[$i]->getPaciente()}</td>";
                    echo "<td>{$records[$i]->getDetalle()}</td>";
                    echo "<td>{$records[$i]->getCantidad()}</td>";
                    echo "<td>{$records[$i]->getV_unitario()}</td>";
                    echo "<td>{$records[$i]->getTotal()}</td>";
                    echo "</tr>";
                }
                ?>
                <tr><th colspan="6">TOTAL</th><td><?= $total ?></td></tr>
            </table>
        <?php } else { ?>
            No hay resultados para mostrar...
        <?php } ?>
    </body>
</html>

