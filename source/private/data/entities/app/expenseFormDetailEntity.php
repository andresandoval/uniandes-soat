<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-mar-2016-23:59:58
 * Contact: andresandoval992@gmail.com
 *
 * expenseFormDetailEntity, part of soat
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class expenseFormDetailEntity extends entities\myEntity {

    private $expense_form_identifier;
    private $item_identifier;
    private $item_code;
    private $item_description;
    private $item_type;
    private $quantity;
    private $unit_value;
    private $total_value;
    private $objecion_value;

    public function __construct() {
        $this->expense_form_identifier = null;
        $this->item_identifier = null;
        $this->item_code = null;
        $this->item_description = null;
        $this->item_type = null;
        $this->quantity = null;
        $this->unit_value = null;
        $this->total_value = null;
        $this->objecion_value = null;
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getExpenseFormIdentifier() {
        return $this->expense_form_identifier;
    }

    public function getItemIdentifier() {
        return $this->item_identifier;
    }

    public function getItemCode() {
        return $this->item_code;
    }

    public function getItemDescription() {
        return $this->item_description;
    }

    public function getItemType() {
        return $this->item_type;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getUnitValue() {
        return $this->unit_value;
    }

    public function getTotalValue() {
        return $this->total_value;
    }
    public function getObjecionValue() {
        return $this->objecion_value;
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="SETTER">

    public function setExpenseFormIdentifier($value) {
        $this->expense_form_identifier = $value;
    }

// </editor-fold>

    public function arrayCast($array) {
//        print_r($array);
        $this->expense_form_identifier = (int) $this->__arrayElement("expense_form_identifier", $array);
        $this->item_identifier = (int) $this->__arrayElement("item_identifier", $array);
        $this->item_code = (string) $this->__arrayElement("item_code", $array);
        $this->item_description = (string) $this->__arrayElement("item_description", $array);
        $this->item_type = (string) $this->__arrayElement("item_type", $array);
        $this->quantity = (float) $this->__arrayElement("quantity", $array);
        $this->unit_value = (float) $this->__arrayElement("unit_value", $array);
        $this->total_value = (float) $this->__arrayElement("total_value", $array);
        $this->objecion_value = (float) $this->__arrayElement("objecion_value", $array);
        parent::arrayCast($array);
    }

    protected function arrayContent() {
        return [
            "identifier" => $this->getIdentifier(),
            "expense_form_identifier" => $this->expense_form_identifier,
            "item_identifier" => $this->item_identifier,
            "item_code" => $this->item_code,
            "item_description" => $this->item_description,
            "item_type" => $this->item_type,
            "quantity" => $this->quantity,
            "unit_value" => $this->unit_value,
            "total_value" => $this->total_value,
            "objecion_value" => $this->objecion_value
        ];
    }

}

?>