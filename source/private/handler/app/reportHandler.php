<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 03-feb-2016-20:13:20
 * Contact: andresandoval992@gmail.com
 *
 * reportHandler, part of soat
 */

namespace app\handler\app;

require_once "./handler/myHandler.php";
require_once "./businessLogic/appBL.php";

use app\handler;
use app\businessLogic;
use app\data\entities;

final class reportHandler extends handler\myHandler {

    private $logic;

    public function __construct() {
        $this->logic = new businessLogic\appBL();
    }

    private function monthlyStatistics() {
        $__yearList = [];
        $__monthList = [
            1 => "Enero",
            2 => "Febrero",
            3 => "Marzo",
            4 => "Abril",
            5 => "Mayo",
            6 => "Junio",
            7 => "Julio",
            8 => "Agosto",
            9 => "Septiembre",
            10 => "Octubre",
            11 => "Noviembre",
            12 => "Diciembre"
        ];

        $__curYear = (int) \date("Y");
        $__curMonth = (int) \date("m");

        for ($i = 2016; $i <= $__curYear; $i++) {
            $__yearList[$i] = $i;
        }

        $operations = [
            "retrievePdf" => handler\routeHandler::reportHandler_monthlyStatisticsRetrievePdf()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => [
                "year" => (string) $__curYear,
                "month" => (string) $__curMonth,
                "report" => "matrix"
            ],
            "layout" => [
                "currentYear" => $__curYear,
                "currentMonth" => $__curMonth,
                "yearList" => $__yearList,
                "monthList" => $__monthList
            ]
        ];
    }

    private function ambulanceOxigenUse() {

        $operations = [
            "retrievePdf" => handler\routeHandler::reportHandler_ambulanceOxigenUseRetrievePdf()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true)
        ];
    }

    private function monthlyStatisticsRetrievePdf() {
        $year = \filter_input(\INPUT_GET, "\$\$year", \FILTER_DEFAULT);
        $month = \filter_input(\INPUT_GET, "\$\$month", \FILTER_DEFAULT);
        $report = \filter_input(\INPUT_GET, "\$\$report", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->getMonthlyStatisticsByDate($year, $month);
        if ($report == "consolidated") {
            require_once './template/app/monthly-statistics-consolidated/index.php';
        } else {
            require_once './template/app/monthly-statistics-print-tmpl.php';
        }
        return \ob_get_clean();
    }

    private function ambulanceOxigenUseRetrievePdf() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        $report = \filter_input(\INPUT_GET, "\$\$report", \FILTER_DEFAULT);
        \ob_start();
        $records = null; //$this->logic->getMonthlyStatisticsByDate($year, $month);
        if ($report == "oxygen") {
            $records = $this->logic->getOxigeno($desde, $hasta);
        } else {
            $records = $this->logic->getAmbulancia($desde, $hasta);
            // require_once './template/app/monthly-statistics-print-tmpl.php';
        }
        require_once './template/app/reporteOxigenoAmbulancia.php';
        return \ob_get_clean();
    }

    private function individualStatisticsRetrievePdf() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        $item = \filter_input(\INPUT_GET, "\$\$item", \FILTER_DEFAULT);
        $type = \filter_input(\INPUT_GET, "\$\$type", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->getIndividualStatistic($desde, $hasta, $item, $type);
        require_once './template/app/individualStatisticsPdf.php';
        return \ob_get_clean();
    }

    private function individualStatisticsRetrieveCsv() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        $item = \filter_input(\INPUT_GET, "\$\$item", \FILTER_DEFAULT);
        $type = \filter_input(\INPUT_GET, "\$\$type", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->getIndividualStatistic($desde, $hasta, $item, $type);


        $df = \fopen("php://output", 'w');
        \fputcsv($df, ["HISTORIA CLINICA", "FECHA", "PACIENTE", "DETALLE", "CANTIDAD", "VALOR", "TOTAL"], ";");
        foreach ($records as $r) {
            \fputcsv($df, $r->simpleArray(), ";");
        }
        \fclose($df);

        $this->forceFileDownloadHeader("reporte.csv");
        return ob_get_clean();
    }

    private function individualStatistics() {

        $tariff = $this->logic->getTariffAsMedicine();
        $medicine = $this->logic->getAllMedicine();
        $listaArr = [];
        if (!\is_null($tariff)) {
            foreach ($tariff as $t) {
                $listaArr[] = $t->toShortArray("T");
            }
        }
        if (!\is_null($medicine)) {
            foreach ($medicine as $m) {
                $listaArr[] = $m->toShortArray("M");
            }
        }

        $operations = [
            "retrievePdf" => handler\routeHandler::reportHandler_individualStatisticsRetrievePdf(),
            "retrieveCsv" => handler\routeHandler::reportHandler_individualStatisticsRetrieveCsv()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "lista" => $listaArr
        ];
    }

    private function diagnostic() {

        $operations = [
            "retrievePdf" => handler\routeHandler::reportHandler_retrieveDiagnosticPdf(),
            "retrieveCsv" => handler\routeHandler::reportHandler_retrieveDiagnosticCsv()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true)
                //"lista" => $listaArr
        ];
    }

    private function retrieveDiagnosticPdf() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        $item = \filter_input(\INPUT_GET, "\$\$item", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->getFurByHealthCenterAdmisionReport($desde, $hasta, $item);
        require_once './template/app/diagnosticReportPdf.php';
        return \ob_get_clean();
    }

    private function retrieveDiagnosticCsv() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        $item = \filter_input(\INPUT_GET, "\$\$item", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->getFurByHealthCenterAdmisionReport($desde, $hasta, $item);

        $df = \fopen("php://output", 'w');
        \fputcsv($df, ["DIAGNOSTICO", "FECHA DE INGRESO", "REGISTRA MUERTE", "DIAGNOSTICO DE SALIDA", "CONDICION INGRESO"], ";");

        foreach ($records as $r) {
            \fputcsv($df, [
                $r->getHealthCenterAdmisionReport(),
                $r->getLastUpdateDate(TRUE),
                $r->getInsuredDead() ? 'SI' : 'NO',
                strlen($r->getHealthCenterEgressReport()) <= 0 ? 'S/N' : $r->getHealthCenterEgressReport(),
                $r->getPatientConditionOccupant() ? 'OCUPANTE' : 'PEATON'
                    ], ";");
        }

        \fputcsv($df, ["TOTAL", \count($records)], ";");
        \fclose($df);

        $this->forceFileDownloadHeader("reporte.csv");
        return ob_get_clean();
    }

    private function estadisticoAseguradora() {

        $operations = [
            "retrievePdf" => handler\routeHandler::reportHandler_estadisticoAseguradoraRetrievePdf(),
            "retrieveCsv" => handler\routeHandler::reportHandler_estadisticoAseguradoraRetrieveCsv()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true)
                //"lista" => $listaArr
        ];
    }

    private function estadisticoAseguradoraRetrievePdf() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->get_reporte_estadistico_aseguradora($desde, $hasta);
        require_once './template/app/estadisticoAseguradora.php';
        return \ob_get_clean();
    }

    private function estadisticoAseguradoraRetrieveCsv() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->get_reporte_estadistico_aseguradora($desde, $hasta);

        $df = \fopen("php://output", 'w');
        \fputcsv($df, ["ASEGURADORA", "Nº DE CARPETAS", "SUMA DE PLANILLADO", "Suma de OBJETADO", "Suma de FACTURADO"], ";");
        if (\count($records) <= 0) {
            \fputcsv($df, ["No hay datos para mostrar"], ";");
        } else {
            foreach ($records as $r) {
                \fputcsv($df, $r, ";");
            }
        }
        \fclose($df);

        $this->forceFileDownloadHeader("reporte.csv");
        return ob_get_clean();
    }

    private function expedietesAseguradora() {

        $operations = [
            "retrievePdf" => handler\routeHandler::reportHandler_expedietesAseguradoraRetrievePdf(),
            "retrieveCsv" => handler\routeHandler::reportHandler_expedietesAseguradoraRetrieveCsv()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true)
                //"lista" => $listaArr
        ];
    }

    private function expedietesAseguradoraRetrievePdf() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->get_reporte_estadistico_aseguradora($desde, $hasta);
        require_once './template/app/expedientesPorAseguradora.php';
        return \ob_get_clean();
    }

    private function expedietesAseguradoraRetrieveCsv() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->get_reporte_estadistico_aseguradora($desde, $hasta);

        $df = \fopen("php://output", 'w');
        \fputcsv($df, ["ASEGURADORA", "EXPEDIENTES PROCESADOS PERIODO", "%"], ";");
        if (\count($records) <= 0) {
            \fputcsv($df, ["No hay datos para mostrar"], ";");
        } else {
            $total = 0;
            foreach ($records as $r) {
                $total += $r["carpetas"];
            }
            foreach ($records as $r) {
                \fputcsv($df, [$r["aseguradora"], $r["carpetas"], ($r["carpetas"] * 100 / $total) . "%"], ";");
            }
            \fputcsv($df, ["TOTAL", $total, 100], ";");
        }
        \fclose($df);

        $this->forceFileDownloadHeader("reporte.csv");
        return ob_get_clean();
    }

    private function planilladoAseguradora() {

        $operations = [
            "retrievePdf" => handler\routeHandler::reportHandler_planilladoAseguradoraRetrievePdf(),
            "retrieveCsv" => handler\routeHandler::reportHandler_planilladoAseguradoraRetrieveCsv()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true)
                //"lista" => $listaArr
        ];
    }

    private function planilladoAseguradoraRetrievePdf() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->get_planillado_por_aseguradora($desde, $hasta);
        require_once './template/app/planilladoAseguradora.php';
        return \ob_get_clean();
    }

    private function planilladoAseguradoraRetrieveCsv() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->get_planillado_por_aseguradora($desde, $hasta);

        $df = \fopen("php://output", 'w');
        \fputcsv($df, ["MES", "ASEGURADORA", "CUENTA NRO", "SUMA DE PLANILLADO"], ";");
        if (\count($records) <= 0) {
            \fputcsv($df, ["No hay datos para mostrar"], ";");
        } else {
            $total1 = 0;
            $total2 = 0;
            foreach ($records as $r) {
                $total1 += $r["carpetas"];
                $total2 += $r["planillado"];
            }
            foreach ($records as $r) {
                \fputcsv($df, [$r["mes"], $r["aseguradora"], $r["carpetas"], $r["planillado"]], ";");
            }
            \fputcsv($df, ["TOTAL", "", $total1, $total2], ";");
        }
        \fclose($df);

        $this->forceFileDownloadHeader("reporte.csv");
        return ob_get_clean();
    }

    private function general() {

        $operations = [
            "retrievePdf" => handler\routeHandler::reportHandler_generalRetrievePdf(),
                // "retrieveCsv" => handler\routeHandler::reportHandler_generalRetrieveCsv()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true)
                //"lista" => $listaArr
        ];
    }

    private function generalRetrievePdf() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        \ob_start();
        $form008 = $this->logic->get_form008_by_date($desde, $hasta);
        if (\is_null($form008)) {
            echo "<pre>No hay datos para mostrar</pre>";
            return \ob_get_clean();
        }

        $patient = [];
        $fur = [];
        $objetion = [];
        $expenseForm = [];
        $doctor = [];

        for ($i = 0; $i < count($form008); $i++) {
            $patient[$i] = $this->logic->getPatientById2($form008[$i]->getPatientIdentifier());
            $fur[$i] = $this->logic->getFurByForm008Identifier($form008[$i]->getIdentifier());
            $objetion[$i] = $this->logic->getObjectionByForm008Identifier($form008[$i]->getIdentifier());
            $expenseForm[$i] = $this->logic->getExpenseFormByForm008Identifier($form008[$i]->getIdentifier());
            $doctor[$i] = $this->logic->getDoctorByForm008Identifier($form008[$i]->getIdentifier());
        }

        require_once './template/app/generalReport.php';
        return \ob_get_clean();
    }

    private function generalRetrieveCsv() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        \ob_start();
        $records = $this->logic->get_planillado_por_aseguradora($desde, $hasta);

        $df = \fopen("php://output", 'w');
        \fputcsv($df, ["MES", "ASEGURADORA", "CUENTA NRO", "SUMA DE PLANILLADO"], ";");
        if (\count($records) <= 0) {
            \fputcsv($df, ["No hay datos para mostrar"], ";");
        } else {
            $total1 = 0;
            $total2 = 0;
            foreach ($records as $r) {
                $total1 += $r["carpetas"];
                $total2 += $r["planillado"];
            }
            foreach ($records as $r) {
                \fputcsv($df, [$r["mes"], $r["aseguradora"], $r["carpetas"], $r["planillado"]], ";");
            }
            \fputcsv($df, ["TOTAL", "", $total1, $total2], ";");
        }
        \fclose($df);

        $this->forceFileDownloadHeader("reporte.csv");
        return ob_get_clean();
    }

    private function generalDinamico() {

        return [
            "url" => "../private/template/app/general-consolidado/index.php"
        ];
    }

    private function generalDinamicoRetrieveData() {
        $desde = \filter_input(\INPUT_GET, "\$\$desde", \FILTER_DEFAULT);
        $hasta = \filter_input(\INPUT_GET, "\$\$hasta", \FILTER_DEFAULT);
        $records = $this->logic->get_monthly_statistics_dinamic($desde, $hasta);
        if (\is_null($records)) {
            return \json_encode([]);
        }
        $arr = [];
        $arr[] = [
            "col1",
            "col2",
            "col3",
            "col4",
            "col5",
            "col6",
            "col7",
            "col8",
            "col9",
            "col10",
            "col11",
            "col12",
            "col13",
            "col14",
            "col15",
            "col16",
            "col17",
            "col18",
            "col19",
            "col20"
        ];
        foreach ($records as $row) {
           $arr[] = array_map('strval', \array_values($row));
        }
        return \json_encode($arr);
        return json_encode(array_map('strval', $records));
        return \json_encode($records);
    }

    protected function routeAction($action) {

        switch ($action) {
            case handler\routeHandler::reportHandler_monthlyStatistics(): return $this->monthlyStatistics();
            case handler\routeHandler::reportHandler_monthlyStatisticsRetrievePdf():return $this->monthlyStatisticsRetrievePdf();
            case handler\routeHandler::reportHandler_ambulanceOxigenUse(): return $this->ambulanceOxigenUse();
            case handler\routeHandler::reportHandler_ambulanceOxigenUseRetrievePdf(): return $this->ambulanceOxigenUseRetrievePdf();
            case handler\routeHandler::reportHandler_individualStatistics(): return $this->individualStatistics();
            case handler\routeHandler::reportHandler_individualStatisticsRetrievePdf(): return $this->individualStatisticsRetrievePdf();
            case handler\routeHandler::reportHandler_individualStatisticsRetrieveCsv(): return $this->individualStatisticsRetrieveCsv();
            case handler\routeHandler::reportHandler_diagnostic(): return $this->diagnostic();
            case handler\routeHandler::reportHandler_retrieveDiagnosticPdf(): return $this->retrieveDiagnosticPdf();
            case handler\routeHandler::reportHandler_retrieveDiagnosticCsv(): return $this->retrieveDiagnosticCsv();

            case handler\routeHandler::reportHandler_estadisticoAseguradora(): return $this->estadisticoAseguradora();
            case handler\routeHandler::reportHandler_estadisticoAseguradoraRetrievePdf(): return $this->estadisticoAseguradoraRetrievePdf();
            case handler\routeHandler::reportHandler_estadisticoAseguradoraRetrieveCsv(): return $this->estadisticoAseguradoraRetrieveCsv();

            case handler\routeHandler::reportHandler_expedietesAseguradora(): return $this->expedietesAseguradora();
            case handler\routeHandler::reportHandler_expedietesAseguradoraRetrievePdf(): return $this->expedietesAseguradoraRetrievePdf();
            case handler\routeHandler::reportHandler_expedietesAseguradoraRetrieveCsv(): return $this->expedietesAseguradoraRetrieveCsv();

            case handler\routeHandler::reportHandler_planilladoAseguradora(): return $this->planilladoAseguradora();
            case handler\routeHandler::reportHandler_planilladoAseguradoraRetrievePdf(): return $this->planilladoAseguradoraRetrievePdf();
            case handler\routeHandler::reportHandler_planilladoAseguradoraRetrieveCsv(): return $this->planilladoAseguradoraRetrieveCsv();

            case handler\routeHandler::reportHandler_general(): return $this->general();
            case handler\routeHandler::reportHandler_generalRetrievePdf(): return $this->generalRetrievePdf();
            case handler\routeHandler::reportHandler_generalRetrieveCsv(): return $this->generalRetrieveCsv();

            case handler\routeHandler::reportHandler_generalDinamico(): return $this->generalDinamico();
            case handler\routeHandler::reportHandler_generalDinamicoRetrieveData(): return $this->generalDinamicoRetrieveData();
        }
    }

}

?>