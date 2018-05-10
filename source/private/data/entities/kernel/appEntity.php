<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-17:25:48
 * Contact: andresandoval992@gmail.com
 *
 * appEntity, part of app
 */

namespace app\data\entities\kernel;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class appEntity extends entities\myEntity {

    private $code;
    private $name;
    private $title;

    public function __construct() {
        $this->code = null;
        $this->name = null;
        $this->title = null;
        $this->setPostParamName("app-data");
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getCode() {
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }

    public function getTitle() {
        return $this->title;
    }

// </editor-fold>

    public function arrayCast($array) {
        $this->code = (string) $array["code"];
        $this->name = (string) $array["name"];
        $this->title = (string) $array["title"];
        parent::arrayCast($array);
    }

    public function arrayContent() {
        return [
            "code" => $this->code,
            "name" => $this->name,
            "title" => $this->title
        ];
    }

}

?>