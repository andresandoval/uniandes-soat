<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-17:25:48
 * Contact: andresandoval992@gmail.com
 *
 * departmentEntity, part of app
 */

namespace app\data\entities\kernel;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class departmentEntity extends entities\myEntity {

    private $enterprise_identifier;
    private $coordination_identifier;
    private $name;
    private $code;
    //
    private $type;
    private $coordination_name;

    public function __construct() {
        $this->enterprise_identifier = null;
        $this->coordination_identifier = null;
        $this->name = null;
        $this->code = null;
        //
        $this->type = null;
        $this->coordination_name = null;
        $this->setPostParamName("department");
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER & SETTER">

    public function getEnterpriseIdentifier() {
        return $this->enterprise_identifier;
    }

    public function getCoordinationIdentifier() {
        return (int) $this->coordination_identifier;
    }

    public function getName() {
        return $this->name;
    }

    public function getCode() {
        return $this->code;
    }

    public function setEnterpriseIdentifier($value) {
        $this->enterprise_identifier = $value;
    }

// </editor-fold>

    public function arrayCast($array) {

        $this->enterprise_identifier = isset($array["enterprise_identifier"]) ? (int) $array["enterprise_identifier"] : null;
        $this->coordination_identifier = isset($array["coordination_identifier"]) ? (int) $array["coordination_identifier"] : null;
        $this->name = (string) $array["name"];
        $this->code = isset($array["code"]) ? (string) $array["code"] : null;
        //
        $this->type = isset($array["type"]) ? (string) $array["type"] : null;
        $this->coordination_name = isset($array["coordination_name"]) ? (string ) $array["coordination_name"] : null;

        parent::arrayCast($array);
    }

    protected function arrayContent() {
        return[
            "coordination_identifier" => $this->coordination_identifier,
            "enterprise_identifier" => $this->enterprise_identifier,
            "name" => $this->name,
            "code" => $this->code
        ];
    }

    public function toListHeader() {
        return [
            "x01" => $this->hasNoFilter("Tipo"),
            "x02" =>  $this->hasBasicFilter("Nombre"),
            "x03" => $this->hasBasicFilter("Codigo"),
            "x04" => $this->hasAdvancedFilter("Coordinación"),
            "x05" => $this->hasAdvancedFilter("!")
        ];
    }

    public function toListRow() {
        return [
            "x01" => $this->type,
            "x02" => $this->name,
            "x03" => $this->code,
            "x04" => $this->coordination_name,
            "x05" => $this->getStateIcon()
        ];
    }

}

?>