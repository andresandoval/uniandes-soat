<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-mar-2016-23:59:58
 * Contact: andresandoval992@gmail.com
 *
 * objectionEntity, part of soat
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class objectionEntity extends entities\myEntity {

    private $form008_identifier;
    private $number;
    private $value;
    private $invoice;

    public function __construct() {
        $this->form008_identifier = null;
        $this->number = "Automático";
        $this->value = null;
        $this->invoice = null;
        $this->setPostParamName('objection');
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getForm008Identifier() {
        return $this->form008_identifier;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getValue() {
        return $this->value;
    }

    public function getInvoice() {
        return $this->invoice;
    }



// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="SETTER">
    public function setForm008Identifier($form008_identifier) {
        $this->form008_identifier = $form008_identifier;
    }


// </editor-fold>


    public function arrayCast($array) {
        $this->form008_identifier = (int) $this->__arrayElement("form008_identifier", $array);
        $this->number = (string) $this->__arrayElement("number", $array);
        $this->value = (float) $this->__arrayElement("value", $array);
        $this->invoice = (string) $this->__arrayElement("invoice", $array);
        parent::arrayCast($array);
    }

    protected function arrayContent() {
        return [
            "form008_identifier" => $this->form008_identifier,
            "number" => $this->number,
            "value" => $this->value,
            "invoice" => $this->invoice
        ];
    }

}

?>