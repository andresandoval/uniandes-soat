<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-mar-2016-23:59:58
 * Contact: andresandoval992@gmail.com
 *
 * expenseFormEntity, part of soat
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';
require_once './data/entities/app/expenseFormDetailEntity.php';

use app\data\entities;

final class expenseFormEntity extends entities\myEntity {

    private $form008_identifier;
    private $diagnostic;
    private $total;
    private $sppat;
    private $balance;
    private $tariffDetail;
    private $medicineDetail;

    public function __construct() {
        $this->form008_identifier = null;
        $this->diagnostic = null;
        $this->total = 0;
        $this->sppat = 3000;
        $this->balance = 0;
        $this->tariffDetail = [];
        $this->medicineDetail = [];
        $this->setPostParamName('expense-form');
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getForm008Identifier() {
        return $this->form008_identifier;
    }

    public function getDiagnostic() {
        return $this->diagnostic;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getSppat() {
        return $this->sppat;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getTariffDetail($array = false) {
        if (!$array) {
            return $this->tariffDetail;
        }
        $__array = [];
        if (\is_array($this->tariffDetail)) {
            foreach ($this->tariffDetail as $td) {
                $__array[] = $td->toArray();
            }
        }
        return $__array;
    }

    public function getMedicineDetail($array = false) {
        if (!$array) {
            return $this->medicineDetail;
        }
        $__array = [];
        if (\is_array($this->medicineDetail)) {
            foreach ($this->medicineDetail as $md) {
                $__array[] = $md->toArray();
            }
        }
        return $__array;
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="SETTER">

    public function setForm008Identifier($form008_identifier) {
        $this->form008_identifier = $form008_identifier;
    }
    public function setDiagnostic($value) {
        $this->diagnostic = $value;
    }

// </editor-fold>


    public function arrayCast($array) {

        /* @var $tmp expenseFormDetailEntity */
        $this->form008_identifier = (int) $this->__arrayElement("form008_identifier", $array);
        $this->diagnostic = (string) $this->__arrayElement("diagnostic", $array);
        $this->total = (float) $this->__arrayElement("total", $array);
        $this->sppat = (float) $this->__arrayElement("sppat", $array);
        $this->balance = (float) $this->__arrayElement("balance", $array);

        $tmp = null;
        $this->tariffDetail = [];
        $this->medicineDetail = [];

        if (isset($array["tariff_item"]) && \is_array($array["tariff_item"])) {
            foreach ($array["tariff_item"] as $ti) {
                $tmp = new expenseFormDetailEntity();
                $tmp->postCast($ti);
                $this->tariffDetail[] = $tmp;
            }
        }
        if (isset($array["medicine_item"]) && \is_array($array["medicine_item"])) {
            foreach ($array["medicine_item"] as $mi) {
                $tmp = new expenseFormDetailEntity();
                $tmp->postCast($mi);
                $this->medicineDetail[] = $tmp;
            }
        }

        parent::arrayCast($array);
    }

    protected function arrayContent() {
        $__tariffDetail = [];
        $__medicineDetail = [];

        if (\is_array($this->tariffDetail)) {
            foreach ($this->tariffDetail as $td) {
                $__tariffDetail[] = $td->toArray();
            }
        }
        if (\is_array($this->medicineDetail)) {
            foreach ($this->medicineDetail as $md) {
                $__medicineDetail[] = $md->toArray();
            }
        }

        return [
            "form008_identifier" => $this->form008_identifier,
            "diagnostic" => $this->diagnostic,
            "total" => $this->total,
            "sppat" => $this->sppat,
            "balance" => $this->balance,
            "tariff_item" => $__tariffDetail,
            "medicine_item" => $__medicineDetail
        ];
    }

}

?>