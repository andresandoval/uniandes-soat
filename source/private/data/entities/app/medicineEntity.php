<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-mar-2016-23:59:58
 * Contact: andresandoval992@gmail.com
 *
 * medicineEntity, part of soat
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class medicineEntity extends entities\myEntity {

    private $code;
    private $name;
    private $type;
    private $value;
    private $stock;

    public function __construct() {
        $this->code = null;
        $this->name = null;
        $this->type = null;
        $this->value = null;
        $this->stock = null;
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getCode() {
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }

    public function getValue() {
        return $this->value;
    }

    public function getStock() {
        return $this->stock;
    }

// </editor-fold>

    public function arrayCast($array) {
        $this->code = (string) $this->__arrayElement("code", $array);
        $this->name = (string) $this->__arrayElement("name", $array);
        $this->type = (string) $this->__arrayElement("type", $array);
        $this->value = (float) $this->__arrayElement("value", $array);
        $this->stock = (float) $this->__arrayElement("stock", $array);
        parent::arrayCast($array);
    }

    protected function arrayContent() {
        return [
            "code" => $this->code,
            "name" => $this->name,
            "type" => $this->type,
            "value" => $this->value,
            "stock" => $this->stock
        ];
    }
    public function toShortArray($type) {
        $__group = "T" ? $this->type : "STOCK DE MEDICAMENTOS";
        return [
            "identifier" => $this->getIdentifier(),
            "name" => $this->name,
            "code" => $this->code,
            "type" => $type,
            "group" => $__group
        ];
    }

}

?>