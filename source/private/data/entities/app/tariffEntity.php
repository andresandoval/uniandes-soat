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

final class tariffEntity extends entities\myEntity {

    private $code;
    private $type;
    private $uvr;
    private $fcm;
    private $value;

    public function __construct() {
        $this->code = null;
        $this->type = null;
        $this->uvr = null;
        $this->fcm = null;
        $this->value = null;
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getCode() {
        return $this->code;
    }

    public function getType() {
        return $this->type;
    }
    public function getUvr() {
        return $this->uvr;
    }

    public function getFcm() {
        return $this->fcm;
    }
    public function getValue() {
        return $this->value;
    }


// </editor-fold>

    public function arrayCast($array) {
        $this->code = (int) $this->__arrayElement("code", $array);
        $this->type = (string) $this->__arrayElement("type", $array);
        $this->uvr = (float) $this->__arrayElement("uvr", $array);
        $this->fcm = (float) $this->__arrayElement("fcm", $array);
        $this->value = (float) $this->__arrayElement("value", $array);
        parent::arrayCast($array);
        $this->setIdentifier($this->code);
    }

    protected function arrayContent() {
        return [
            "code" => $this->code,
            "type" => $this->type,
            "uvr" => $this->uvr,
            "fcm" => $this->fcm,
            "value" => $this->value
        ];
    }

}

?>