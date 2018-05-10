<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-17:25:48
 * Contact: andresandoval992@gmail.com
 *
 * catalogEntity, part of app
 */

namespace app\data\entities\kernel;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class catalogEntity extends entities\myEntity {

    private $type;
    private $name;
    private $value;

    public function __construct() {
        $this->app_identifier = null;
        $this->type = null;
        $this->name = null;
        $this->value = null;
        $this->setPostParamName("catalog");
        $this->setActive(true);
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getType() {
        return $this->type;
    }

    public function getName() {
        return $this->name;
    }

    public function getValue() {
        return $this->value;
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="SETTER">

    public function setType($type) {
        $this->type = $type;
    }

// </editor-fold>


    public function arrayCast($array) {
        $this->type = (string) $this->__arrayElement("type", $array);
        $this->name = (string) $this->__arrayElement("name", $array);
        $this->value = (string) $this->__arrayElement("value", $array);
        parent::arrayCast($array);
    }

    public function toListHeader() {
        return [
            "x01" => $this->hasAdvancedFilter("Tipo"),
            "x02" => $this->hasBasicFilter("Nombre"),
            "x03" => $this->hasNoFilter("Valor"),
            "x04" => $this->hasAdvancedFilter("!")
        ];
    }

    public function toListRow() {
        return [
            "x01" => $this->type,
            "x02" => $this->name,
            "x03" => (\is_null($this->value) || (\strlen($this->value) <= 0)) ? "<i>S/N</i>" : $this->value,
            "x04" => $this->getStateIcon()
        ];
    }

    protected function arrayContent() {
        return[
            "type" => $this->type,
            "name" => $this->name,
            "value" => $this->value
        ];
    }

}

?>