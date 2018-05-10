<?php
/*
 * Developed by: Andres Sandoval Montoya
 * Date: 10-jun-2016-10:52:24
 * Contact: andresandoval992@gmail.com
 *
 * index, part of soat
 */

/* @var $records app\data\entities\app\monthlyStatisticsEntity[] */

$aseguradoras = [];
$diasEstadia = [];
$edad = [];
$medico = [];

$totalPlanillado = 0;
$totalObjetaado = 0;
$totalFacturado = 0;

$condicionAlta = [];

//var_dump($records);


if (!\is_null($records)) {
    foreach ($records as $r) {

        //Aseguradora
        if (\strlen($r->getASEGURADORA()) > 0) {
            if (!isset($aseguradoras[$r->getASEGURADORA()])) {
                $aseguradoras[$r->getASEGURADORA()] = 0;
            }
            $aseguradoras[$r->getASEGURADORA()] += $r->getPLANILLADO();
        }

        //DIAS ESTADIA
        if (\strlen($r->getDIAS_ESTADIA()) > 0) {
            $diasEstadia[$r->getTRAMITE()] = "{$r->getDIAS_ESTADIA()} dias";
        }

        //EDAD
        if (\strlen($r->getEDAD()) > 0) {
            if (!isset($edad["{$r->getEDAD()} años"])) {
                $edad["{$r->getEDAD()} años"] = 0;
            }
            $edad["{$r->getEDAD()} años"] += 1;
        }
        //MEDICO
        if (\strlen($r->getMEDICO()) > 0) {
            if (!isset($medico[$r->getMEDICO()])) {
                $medico[$r->getMEDICO()] = 0;
            }
            $medico[$r->getMEDICO()] += 1;
        }

        //TOTALES
        $totalPlanillado += (float) $r->getPLANILLADO();
        $totalObjetaado += (float) $r->getOBJETADO();
        $totalFacturado += (float) $r->getFACTURADO();

        //CONDICION ALTA
        if (\strlen($r->getCONDICION_DE_ALTA()) > 0) {
            if (!isset($condicionAlta[$r->getCONDICION_DE_ALTA()])) {
                $condicionAlta[$r->getCONDICION_DE_ALTA()] = 0;
            }
            $condicionAlta[$r->getCONDICION_DE_ALTA()] += 1;
        }
    }
}
?>

<!doctype html>
<html lang="es">
    <head>
        <title>Reporte</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <link href="template/app/monthly-statistics-consolidated/node_modules/foundation-5.5.3/css/foundation.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row">
            <div class="small-10 columns small-centered">
                <div class="row">
                    <div class="small-12 columns">
                        <h3>Consolidado mensual</h3><hr>
                    </div>
                </div>
                <!--ASEGURADORAS-->
                <div class="row">
                    <div class="small-11 columns panel">
                        <h6>CONSOLIDADO DE ATENCIONES POR TIPO DE SEGURO</h6>
                        <?php if (\count($aseguradoras) > 0) { ?>
                            <div class="row">
                                <div class="small-6 columns">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>ASEGURADORA</th>
                                                <th>SUMA DE PLANILLADO</th>
                                            </tr>
                                            <?php foreach ($aseguradoras as $key => $value) { ?>
                                                <tr>
                                                    <td><?= $key ?></td>
                                                    <td><?= $value ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="small-6 columns">
                                    <canvas id="ctx_aseguradora" width="10" height="10"></canvas>
                                </div>
                            </div>
                        <?php } else { ?>
                            <br>No hay datos de aseguradoras
                        <?php } ?>
                    </div>
                </div>
                <!--DIAS DE ESTADIA-->
                <!--div class="row">
                    <div class="small-11 columns panel">
                        <h6>DIAS DE ESTADÍA</h6>
                        <?php if (\count($diasEstadia) > 0) { ?>
                            <div class="row">
                                <div class="small-6 columns">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>NRO DE TRAMITE</th>
                                                <th>DIAS DE ESTADIA</th>
                                            </tr>
                                            <?php foreach ($diasEstadia as $key => $value) { ?>
                                                <tr>
                                                    <td><?= $key ?></td>
                                                    <td><?= $value ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="small-6 columns">
                                    <canvas id="ctx_dias_estadia" width="100%" height="100%"></canvas>
                                </div>
                            </div>
                        <?php } else { ?>
                            <br>No hay datos de dias de estadía
                        <?php } ?>
                    </div>
                </div-->
                <!--EDAD-->
                <div class="row">
                    <div class="small-11 columns panel">
                        <h6>EDAD</h6>
                        <?php if (\count($edad) > 0) { ?>
                            <div class="row">
                                <div class="small-6 columns">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>EDAD</th>
                                                <th>NUMERO DE OCURRENCIAS</th>
                                            </tr>
                                            <?php foreach ($edad as $key => $value) { ?>
                                                <tr>
                                                    <td><?= $key ?></td>
                                                    <td><?= $value ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="small-6 columns">
                                    <canvas id="ctx_edad" width="100%" height="100%"></canvas>
                                </div>
                            </div>
                        <?php } else { ?>
                            <br>No hay datos de edad
                        <?php } ?>
                    </div>
                </div>
                <!--MEDICO-->
                <div class="row">
                    <div class="small-11 columns panel">
                        <h6>MEDICOS QUE ATENDIERON ACCIDENTES DE TRANSITO</h6>
                        <?php if (\count($medico) > 0) { ?>
                            <div class="row">
                                <div class="small-6 columns">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>MEDICO</th>
                                                <th>NUMERO DE ATENCIONES</th>
                                            </tr>
                                            <?php foreach ($medico as $key => $value) { ?>
                                                <tr>
                                                    <td><?= $key ?></td>
                                                    <td><?= $value ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="small-6 columns">
                                    <canvas id="ctx_medico" width="100%" height="100%"></canvas>
                                </div>
                            </div>
                        <?php } else { ?>
                            <br>No hay datos de medicos
                        <?php } ?>
                    </div>
                </div>
                <!--TOTALES USD-->
                <div class="row">
                    <div class="small-11 columns panel">
                        <h6>TOTALES USD.</h6>
                        <div class="row">
                            <div class="small-6 columns">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>TOTAL PLANILLADO</th>
                                            <td><?= \abs($totalPlanillado) ?></td>
                                        </tr>
                                        <tr>
                                            <th>TOTAL OBJETADO</th>
                                            <td><?= \abs($totalObjetaado) ?></td>
                                        </tr>
                                        <tr>
                                            <th>TOTAL FACTURADO</th>
                                            <td><?= \abs($totalFacturado) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="small-6 columns">
                                <canvas id="ctx_totales" width="100%" height="100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CONDICIONES DE ALTA-->
                <div class="row">
                    <div class="small-11 columns panel">
                        <h6>CONDICIONES DE ALTA</h6>
                        <?php if (\count($condicionAlta) > 0) { ?>
                            <div class="row">
                                <div class="small-6 columns">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>CONDICION DE ALTA</th>
                                                <th>NUMERO DE ATENCIONES</th>
                                            </tr>
                                            <?php foreach ($condicionAlta as $key => $value) { ?>
                                                <tr>
                                                    <td><?= $key ?></td>
                                                    <td><?= $value ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="small-6 columns">
                                    <canvas id="ctx_condicion_alta" width="100%" height="100%"></canvas>
                                </div>
                            </div>
                        <?php } else { ?>
                            <br>No hay datos sobre condiciones de alta
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="template/app/monthly-statistics-consolidated/node_modules/chart.js/dist/Chart.min.js" type="text/javascript"></script>
        <script>
            var ctx_aseguradora = document.getElementById("ctx_aseguradora");
            var ctx_dias_estadia = document.getElementById("ctx_dias_estadia");
            var ctx_edad = document.getElementById("ctx_edad");
            var ctx_medico = document.getElementById("ctx_medico");
            var ctx_totales = document.getElementById("ctx_totales");
            var ctx_condicion_alta = document.getElementById("ctx_condicion_alta");

            var __backgroundColor = [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ];
            var __borderColor = [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ];
<?php
if (\count($aseguradoras) > 0) {
    $__keys = \json_encode(\array_keys($aseguradoras));
    $__values = \json_encode(\array_values($aseguradoras));
    ?>
                var aseguradora_chart = new Chart(ctx_aseguradora, {
                    type: 'pie',
                    data: {
                        labels: <?= $__keys ?>,
                        datasets: [{
                                label: 'Aseguradoras',
                                data: <?= $__values ?>,
                                backgroundColor: __backgroundColor,
                                borderColor: __borderColor,
                                borderWidth: 1
                            }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
<?php } ?>

<?php
if (\count($diasEstadia) > 0) {
    $__keys = \json_encode(\array_keys($diasEstadia));
    $__values = \json_encode(\array_values($diasEstadia));
    ?>
                var diasEstadia_chart = new Chart(ctx_dias_estadia, {
                    type: 'line',
                    data: {
                        labels: <?= $__keys ?>,
                        datasets: [{
                                label: 'Dias de estadía',
                                data: <?= $__values ?>,
                                backgroundColor: __backgroundColor,
                                borderColor: __borderColor,
                                borderWidth: 1
                            }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
<?php } ?>

<?php
if (\count($edad) > 0) {
    $__keys = \json_encode(\array_keys($edad));
    $__values = \json_encode(\array_values($edad));
    ?>
                var $edad = new Chart(ctx_edad, {
                    type: 'doughnut',
                    data: {
                        labels: <?= $__keys ?>,
                        datasets: [{
                                label: 'Edades',
                                data: <?= $__values ?>,
                                backgroundColor: __backgroundColor,
                                borderColor: __borderColor,
                                borderWidth: 1
                            }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
<?php } ?>

<?php
if (\count($medico) > 0) {
    $__keys = \json_encode(\array_keys($medico));
    $__values = \json_encode(\array_values($medico));
    ?>
                var $medico = new Chart(ctx_medico, {
                    type: 'bar',
                    data: {
                        labels: <?= $__keys ?>,
                        datasets: [{
                                label: 'Atencion de medicos',
                                data: <?= $__values ?>,
                                backgroundColor: __backgroundColor,
                                borderColor: __borderColor,
                                borderWidth: 1
                            }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
<?php } ?>

            var $totales = new Chart(ctx_totales, {
                type: 'pie',
                data: {
                    labels: ["Total planillado", "Total objetado", "Total facturado"],
                    datasets: [{
                            label: 'Atencion de medicos',
                            data: ["<?= $totalPlanillado ?>", "<?= $totalObjetaado ?>", "<?= $totalFacturado ?>"],
                            backgroundColor: __backgroundColor,
                            borderColor: __borderColor,
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });

<?php
if (\count($condicionAlta) > 0) {
    $__keys = \json_encode(\array_keys($condicionAlta));
    $__values = \json_encode(\array_values($condicionAlta));
    ?>
                var $condicionAlta = new Chart(ctx_condicion_alta, {
                    type: 'pie',
                    data: {
                        labels: <?= $__keys ?>,
                        datasets: [{
                                label: 'Condicion de alta',
                                data: <?= $__values ?>,
                                backgroundColor: __backgroundColor,
                                borderColor: __borderColor,
                                borderWidth: 1
                            }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
<?php } ?>

        </script>
    </body>
</html>