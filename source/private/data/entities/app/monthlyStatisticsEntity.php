<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-mar-2016-23:59:58
 * Contact: andresandoval992@gmail.com
 *
 * monthlyStatisticsEntity, part of soat
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class monthlyStatisticsEntity extends entities\myEntity {

    private $NRO;
    private $FECHA;
    private $MES;
    private $ASEGURADORA;
    private $TRAMITE;
    private $FECHA_DE_INGRESO;
    private $FECHA_DE_EGRESO;
    private $DIAS_ESTADIA;
    private $RECLAMO_NO;
    private $CEDULA_DE_CIUDADANIA;
    private $PACIENTE;
    private $EDAD;
    private $MEDICO;
    private $PLANILLADO;
    private $OBJETADO;
    private $FACTURADO;
    private $FACTURA;
    private $DIAGNOSTICO;
    private $CONDICION_DE_ALTA;
    private $OBSERVACIONES;

    public function __construct() {
        $this->NRO = null;
        $this->FECHA = null;
        $this->MES = null;
        $this->ASEGURADORA = null;
        $this->TRAMITE = null;
        $this->FECHA_DE_INGRESO = null;
        $this->FECHA_DE_EGRESO = null;
        $this->DIAS_ESTADIA = null;
        $this->RECLAMO_NO = null;
        $this->CEDULA_DE_CIUDADANIA = null;
        $this->PACIENTE = null;
        $this->EDAD = null;
        $this->MEDICO = null;
        $this->PLANILLADO = null;
        $this->OBJETADO = null;
        $this->FACTURADO = null;
        $this->FACTURA = null;
        $this->DIAGNOSTICO = null;
        $this->CONDICION_DE_ALTA = null;
        $this->OBSERVACIONES = null;
    }

// <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getNRO() {
        return $this->NRO;
    }

    public function getFECHA() {
        return $this->FECHA;
    }

    public function getMES() {
        return $this->MES;
    }

    public function getASEGURADORA() {
        return $this->ASEGURADORA;
    }

    public function getTRAMITE() {
        return $this->TRAMITE;
    }

    public function getFECHA_DE_INGRESO() {
        return $this->FECHA_DE_INGRESO;
    }

    public function getFECHA_DE_EGRESO() {
        return $this->FECHA_DE_EGRESO;
    }

    public function getDIAS_ESTADIA() {
        return $this->DIAS_ESTADIA;
    }

    public function getRECLAMO_NO() {
        return $this->RECLAMO_NO;
    }

    public function getCEDULA_DE_CIUDADANIA() {
        return $this->CEDULA_DE_CIUDADANIA;
    }

    public function getPACIENTE() {
        return $this->PACIENTE;
    }

    public function getEDAD() {
        return $this->EDAD;
    }

    public function getMEDICO() {
        return $this->MEDICO;
    }

    public function getPLANILLADO() {
        return $this->PLANILLADO;
    }

    public function getOBJETADO() {
        return $this->OBJETADO;
    }

    public function getFACTURADO() {
        return $this->FACTURADO;
    }

    public function getFACTURA() {
        return $this->FACTURA;
    }

    public function getDIAGNOSTICO() {
        return $this->DIAGNOSTICO;
    }

    public function getCONDICION_DE_ALTA() {
        return $this->CONDICION_DE_ALTA;
    }

    public function getOBSERVACIONES() {
        return $this->OBSERVACIONES;
    }

// </editor-fold>


    public function arrayCast($array) {
        $this->NRO = (string) $this->__arrayElement("NRO", $array);
        $this->FECHA = (string) $this->__arrayElement("FECHA", $array);
        $this->MES = (string) $this->__arrayElement("MES", $array);
        $this->ASEGURADORA = (string) $this->__arrayElement("ASEGURADORA", $array);
        $this->TRAMITE = (string) $this->__arrayElement("TRAMITE", $array);
        $this->FECHA_DE_INGRESO = (string) $this->__arrayElement("FECHA DE INGRESO", $array);
        $this->FECHA_DE_EGRESO = (string) $this->__arrayElement("FECHA DE EGRESO", $array);
        $this->DIAS_ESTADIA = (string) $this->__arrayElement("DIAS ESTADIA", $array);
        $this->RECLAMO_NO = (string) $this->__arrayElement("RECLAMO NO", $array);
        $this->CEDULA_DE_CIUDADANIA = (string) $this->__arrayElement("CEDULA DE CIUDADANIA", $array);
        $this->PACIENTE = (string) $this->__arrayElement("PACIENTE", $array);
        $this->EDAD = (string) $this->__arrayElement("EDAD", $array);
        $this->MEDICO = (string) $this->__arrayElement("MEDICO", $array);
        $this->PLANILLADO = (float) $this->__arrayElement("PLANILLADO", $array);
        $this->OBJETADO = (float) $this->__arrayElement("OBJETADO", $array);
        $this->FACTURADO = (float) $this->__arrayElement("FACTURADO", $array);
        $this->FACTURA = (string) $this->__arrayElement("FACTURA", $array);
        $this->DIAGNOSTICO = (string) $this->__arrayElement("DIAGNOSTICO", $array);
        $this->CONDICION_DE_ALTA = (string) $this->__arrayElement("CONDICION DE ALTA", $array);
        $this->OBSERVACIONES = (string) $this->__arrayElement("OBSERVACIONES", $array);
//        parent::arrayCast($array);
    }

    protected function arrayContent() {
        return [];
    }

}

?>