<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-17:25:48
 * Contact: andresandoval992@gmail.com
 *
 * profileEntity, part of app
 */

namespace app\data\entities\kernel;

require_once './data/entities/myEntity.php';

use app\data\entities;

class profileEntity extends entities\myEntity {

    private $name;
    private $actions;

    //private

    public function __construct() {
        $this->name = null;
        $this->actions = null;
        $this->setPostParamName("profile");
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getName() {
        return $this->name;
    }

    public function getActions() {
        return $this->actions;
    }

// </editor-fold>

    public function arrayCast($array) {
        parent::arrayCast($array);
        $this->name = (string) $array["name"];
        $this->actions = isset($array["actions"]) ? (array) $array["actions"] : null;
    }

    public function toListHeader() {
        return [
            "x01" => $this->hasBasicFilter("Nombre"),
            "x02" => $this->hasAdvancedFilter("!")
        ];
    }

    public function toListRow() {
        return [
            "x01" => $this->name,
            "x02" => $this->getStateIcon()
        ];
    }

    public function arrayContent() {
        return [
            "name" => $this->name,
            "actions" => $this->actions
        ];
    }

}

?>