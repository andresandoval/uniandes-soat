<?php
/*
 * Developed by: Andrés Sandoval Montoya
 * Developer contact: andresandoval992@gmail.com
 * ------------------------------------------------
 * File name: index.php
 * Encoding: UTF-8
 * Created: 04-ene-2017-23:45:16
 * ------------------------------------------------
 * Licensed under default license
 * ------------------------------------------------
 *
 */

require_once '../../../handler/routeHandler.php';

$desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
$hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
$data = "../../../index.php?\$\$request=" . \app\handler\routeHandler::reportHandler_generalDinamicoRetrieveData() . "&\$\$desde=" . $desde . "&\$\$hasta=" . $hasta ;
//$data = "./scripts/data.js";
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>General consolidado</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="styles/examples.css">
        <link rel="stylesheet" href="styles/kingtable.css">
        <style>
            #content{
                overflow: auto;
            }
        </style>
    </head>
    <body class="theme-flatwhite">
        <header id="header">
            <h1>Reporte general dinamico</h1>         
        </header>
        <div id="content"></div>
        <footer id="footer"></footer>
        <!-- libs -->
        <script src="scripts/lodash.js"></script>
        <script src="scripts/jquery.js"></script>
        <script src="scripts/r.js"></script>
        <script>
            R.debug = true;
        </script>
        <script src="scripts/ready.js"></script>
        <!-- utility function for localization -->
        <script src="scripts/i.js"></script>
        <script src="scripts/es.js"></script>
        <!-- core functions -->
        <script src="scripts/jquery.kingtable.min.js"></script>
        <!-- jQuery sortable is required to sort the columns, but of course not mandatory -->
        <script src="scripts/jquery-ui-sortable.js"></script>
        <script>
            (function () {

                $("#content").kingtable({
                    id: "colors-table",
                    url: "<?= $data ?>",
                   // fixed: true,
//                    collectionName: "values",
                    sortOrder: "asc",
                    columns: {
                        col1 : "ORDEN",
                        col2 : "FECHA",
                        col3 : "MES",
                        col4 : "ASEGURADORA",
                        col5 : "TRAMITE",
                        col6 : "FECHA DE INGRESO",
                        col7 : "FECHA DE EGRESO",
                        col8 : "DIAS ESTADIA",
                        col9 : "RECLAMO Nº",
                        col10 : "CEDULA DE CIUDADANIA",
                        col11 : "PACIENTE",
                        col12 : "EDAD",
                        col13 : "MEDICO",
                        col14 : "PLANILLADO",
                        col15 : "OBJETADO",
                        col16 : "FACTURADO",
                        col17 : "FACTURA",
                        col18 : "DIAGNOSTICO",
                        col19 : "CONDICION DE ALTA",
                        col20 : "OBSERVACIONES"
                    }
                });
            })();
        </script>
        <script type="text/javascript" src="scripts/ga.js"></script>
    </body>
</html>