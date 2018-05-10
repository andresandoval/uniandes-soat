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

final class form008Entity extends entities\myEntity {

    private $code;
    private $patient_identifier;
    private $patient;
    private $insurance;

    public function __construct() {
        $this->code = null;
        $this->patient_identifier = null;
        $this->patient = null;
        $this->insurance = null;
        $this->setPostParamName("form-008");
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getCode() {
        return $this->code;
    }

    public function getPatientIdentifier() {
        return $this->patient_identifier;
    }

    public function getPatient() {
        return $this->patient;
    }
    public function getInsurance() {
        return $this->insurance;
    }

// </editor-fold>

    public function setPatientIdentifier($patient_identifier) {
        $this->patient_identifier = $patient_identifier;
    }


    public function arrayCast($array) {
        $this->code = (string) $this->__arrayElement("code", $array);
        $this->patient_identifier = (string) $this->__arrayElement("patient_identifier", $array);
        $this->patient = (string) $this->__arrayElement("patient", $array);
        $this->insurance = (string) $this->__arrayElement("insurance", $array);
        parent::arrayCast($array);

    }

    public function toListHeader() {
        return [
            "x01" => $this->hasBasicFilter("Codigo"),
            "x02" => $this->hasBasicFilter("Fecha de generacion"),
            "x03" => $this->hasBasicFilter("Paciente"),
            "x04" => $this->hasAdvancedFilter("!")
        ];
    }

    public function toListRow() {
        return [
            "x01" => $this->code,
            "x02" => $this->getLastUpdateDate(),
            "x03" => $this->patient . " " . $this->patient_identifier,
            "x04" => $this->getStateIcon()
        ];
    }

    protected function arrayContent() {
        return [
            "identifier" => $this->getIdentifier(),
            "code" => $this->code,
            "last_update_date" => $this->getLastUpdateDate(true),
        ];
    }
}


?>