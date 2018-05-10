<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-mar-2016-23:59:58
 * Contact: andresandoval992@gmail.com
 *
 * doctorEntity, part of soat
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class doctorEntity extends entities\myEntity {

    private $speciality_identifier;
    private $speciality_name;
    private $identity_number;
    private $first_name;
    private $last_name;

    public function __construct() {
        $this->speciality_identifier = null;
        $this->speciality_name = null;
        $this->identity_number = null;
        $this->first_name = null;
        $this->last_name = null;
        $this->setPostParamName('doctor');
        $this->setActive(true);
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getSpecialityIdentifier() {
        return $this->speciality_identifier;
    }

    public function getSpecialityName() {
        return $this->speciality_name;
    }

    public function getIdentityNumber() {
        return $this->identity_number;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getFullName() {
        return "{$this->first_name} {$this->last_name}";
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="SETTER">

    public function setSpecialityName($speciality_name) {
        $this->speciality_name = $speciality_name;
    }

// </editor-fold>


    public function toListHeader() {
        return [
            "x01" => $this->hasBasicFilter("Identificación"),
            "x02" => $this->hasBasicFilter("Nombres"),
            "x03" => $this->hasBasicFilter("Especialidad"),
            "x04" => $this->hasAdvancedFilter("!")
        ];
    }

    public function toListRow() {
        return [
            "x01" => $this->identity_number,
            "x02" => $this->first_name,
            "x03" => $this->speciality_name,
            "x04" => $this->getStateIcon()
        ];
    }

    public function arrayCast($array) {
        $this->speciality_identifier = (int) $this->__arrayElement("speciality_identifier", $array);
        $this->speciality_name = (string) $this->__arrayElement("speciality_name", $array);
        $this->identity_number = (string) $this->__arrayElement("identity_number", $array);
        $this->first_name = (string) $this->__arrayElement("first_name", $array);
        $this->last_name = (string) $this->__arrayElement("last_name", $array);
        parent::arrayCast($array);
    }

    protected function arrayContent() {
        return [
            "speciality_identifier" => $this->speciality_identifier,
            "speciality_name" => $this->speciality_name,
            "identity_number" => $this->identity_number,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name
        ];
    }

}

?>