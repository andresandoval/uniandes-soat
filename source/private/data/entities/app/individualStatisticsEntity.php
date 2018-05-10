<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-mar-2016-23:59:58
 * Contact: andresandoval992@gmail.com
 *
 * form008Entity, part of soat
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class individualStatisticsEntity extends entities\myEntity {

    private $hclinica;
    private $fecha;
    private $paciente;
    private $detalle;
    private $cantidad;
    private $v_unitario;
    private $total;

    public function __construct() {

    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getHclinica() {
        return $this->hclinica;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getPaciente() {
        return $this->paciente;
    }

    public function getDetalle() {
        return $this->detalle;
    }

    public function getV_unitario() {
        return $this->v_unitario;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getCantidad() {
        return $this->cantidad;
    }




// </editor-fold>

    public function arrayCast($array) {
        $this->hclinica = (string) $this->__arrayElement("hclinica", $array);
        $this->fecha = (string) $this->__arrayElement("fecha", $array);
        $this->paciente = (string) $this->__arrayElement("paciente", $array);
        $this->detalle = (string) $this->__arrayElement("detalle", $array);
        $this->v_unitario = (string) $this->__arrayElement("v_unitario", $array);
        $this->total = (string) $this->__arrayElement("total", $array);
        $this->cantidad = (string) $this->__arrayElement("cantidad", $array);
    }

    public function simpleArray() {
        return [
            $this->hclinica,
            $this->fecha,
            $this->paciente,
            $this->detalle,
            $this->cantidad,
            $this->v_unitario,
            $this->total
        ];
    }


}

?>