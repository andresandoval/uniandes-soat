<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-mar-2016-23:59:58
 * Contact: andresandoval992@gmail.com
 *
 * oxygenUseEntity, part of soat
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class oxygenUseEntity extends entities\myEntity {

    private $form008_identifier;
    private $start_date;
    private $start_hour;
    private $start_minute;
    private $end_date;
    private $end_hour;
    private $end_minute;
    private $diff_hour;
    private $diff_minute;
    private $total_minute;
    private $lm;
    private $oxygen_code;
    private $oxygen_description;
    private $uvr;
    private $fcm;
    private $value;
    private $total;

    public function __construct() {
        $this->form008_identifier = null;
        $this->start_date = null;
        $this->start_hour = null;
        $this->start_minute = null;
        $this->end_date = null;
        $this->end_hour = null;
        $this->end_minute = null;
        $this->diff_hour = null;
        $this->diff_minute = null;
        $this->total_minute = null;
        $this->lm = 10;
        $this->oxygen_code = null;
        $this->oxygen_description = null;
        $this->uvr = null;
        $this->fcm = null;
        $this->value = null;
        $this->total = null;
        $this->setPostParamName('oxygen-use');
        $this->setDescription("CALCULO DE OXIGENO SEGÚN FE DE RATAS NUMERAL 9");
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getForm008Identifier() {
        return $this->form008_identifier;
    }

    public function getStartDate() {
        return $this->start_date;
    }

    public function getStartHour() {
        return $this->start_hour;
    }

    public function getStartMinute() {
        return $this->start_minute;
    }

    public function getEndDate() {
        return $this->end_date;
    }

    public function getEndHour() {
        return $this->end_hour;
    }

    public function getEndMinute() {
        return $this->end_minute;
    }

    public function getDiffHour() {
        return $this->diff_hour;
    }

    public function getDiffMinute() {
        return $this->diff_minute;
    }

    public function getTotalMinute() {
        return $this->total_minute;
    }

    public function getLm() {
        return $this->lm;
    }

    public function getOxygenCode() {
        return $this->oxygen_code;
    }

    public function getOxygenDescription() {
        return $this->oxygen_description;
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

    public function getTotal() {
        return $this->total;
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="SETTER">

    public function setForm008Identifier($form008_identifier) {
        $this->form008_identifier = $form008_identifier;
    }

    public function setLm($lm) {
        $this->lm = $lm;
    }

    public function setOxygenCode($oxygen_code) {
        $this->oxygen_code = $oxygen_code;
    }

    public function setOxygenDescription($oxygen_description) {
        $this->oxygen_description = $oxygen_description;
    }

    public function setUvr($uvr) {
        $this->uvr = $uvr;
    }

    public function setFcm($fcm) {
        $this->fcm = $fcm;
    }

    public function setValue($value) {
        $this->value = $value;
    }

// </editor-fold>


    public function arrayCast($array) {
        $this->form008_identifier = (int) $this->__arrayElement("form008_identifier", $array);
        $this->start_date = (string) $this->__arrayElement("start_date", $array);
        $this->start_hour = (int) $this->__arrayElement("start_hour", $array);
        $this->start_minute = (int) $this->__arrayElement("start_minute", $array);
        $this->end_date = (string) $this->__arrayElement("end_date", $array);
        $this->end_hour = (int) $this->__arrayElement("end_hour", $array);
        $this->end_minute = (int) $this->__arrayElement("end_minute", $array);
        $this->diff_hour = (int) $this->__arrayElement("diff_hour", $array);
        $this->diff_minute = (int) $this->__arrayElement("diff_minute", $array);
        $this->total_minute = (int) $this->__arrayElement("total_minute", $array);
        $this->lm = (float) $this->__arrayElement("lm", $array);
        $this->oxygen_code = (int) $this->__arrayElement("oxygen_code", $array);
        $this->oxygen_description = (string) $this->__arrayElement("oxygen_description", $array);
        $this->uvr = (float) $this->__arrayElement("uvr", $array);
        $this->fcm = (float) $this->__arrayElement("fcm", $array);
        $this->value = (float) $this->__arrayElement("value", $array);
        $this->total = (float) $this->__arrayElement("total", $array);
        parent::arrayCast($array);
    }

    protected function arrayContent() {
        return [
            "form008_identifier" => $this->form008_identifier,
            "start_date" => $this->start_date,
            "start_hour" => $this->start_hour,
            "start_minute" => $this->start_minute,
            "end_date" => $this->end_date,
            "end_hour" => $this->end_hour,
            "end_minute" => $this->end_minute,
            "diff_hour" => $this->diff_hour,
            "diff_minute" => $this->diff_minute,
            "total_minute" => $this->total_minute,
            "lm" => $this->lm,
            "oxygen_code" => $this->oxygen_code,
            "oxygen_description" => $this->oxygen_description,
            "uvr" => $this->uvr,
            "fcm" => $this->fcm,
            "value" => $this->value,
            "total" => $this->total
        ];
    }

}

?>