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

final class oxigenUseReportEntity extends entities\myEntity {

    private $HISTORIA_CLINICA;
    private $PACIENTE;
    private $CANTIDAD;
    private $FECHA;
    private $VALOR;

    public function __construct() {
        $this->HISTORIA_CLINICA = null;
        $this->PACIENTE = null;
        $this->CANTIDAD = null;
        $this->FECHA = null;
        $this->VALOR = null;
    }

// <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getHISTORIA_CLINICA() {
        return $this->HISTORIA_CLINICA;
    }

    public function getPACIENTE() {
        return $this->PACIENTE;
    }

    public function getCANTIDAD() {
        return $this->CANTIDAD;
    }

    public function getFECHA() {
        return $this->FECHA;
    }
    public function getVALOR() {
        return $this->VALOR;
    }



// </editor-fold>


    public function arrayCast($array) {
        $this->HISTORIA_CLINICA = (string) $this->__arrayElement("HISTORIA CLINICA", $array);
        $this->PACIENTE = (string) $this->__arrayElement("PACIENTE", $array);
        $this->CANTIDAD = (string) $this->__arrayElement("CANTIDAD", $array);
        $this->FECHA = (string) $this->__arrayElement("FECHA", $array);
        $this->VALOR = (string) $this->__arrayElement("VALOR", $array);
    }

    protected function arrayContent() {
        return [];
    }

}

?>