<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-mar-2016-23:59:58
 * Contact: andresandoval992@gmail.com
 *
 * ambulanceUseEntity, part of soat
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class ambulanceUseEntity extends entities\myEntity {

    private $form008_identifier;
    private $autorization_number;
    private $city;
    private $km_out;
    private $km_in;
    private $km_diff;
    private $starting_point_code;
    private $starting_point_description;
    private $starting_point_uvr;
    private $starting_point_fcm;
    private $starting_point_value;
    private $ambulance_km_code;
    private $ambulance_km_description;
    private $ambulance_km_uvr;
    private $ambulance_km_fcm;
    private $ambulance_km_value;
    private $ambulance_km_subtotal;
    private $total;

    public function __construct() {
        $this->form008_identifier = null;
        $this->autorization_number = null;
        $this->city = null;
        $this->km_out = "";
        $this->km_in = "";
        $this->km_diff = null;
        $this->starting_point_code = null;
        $this->starting_point_description = null;
        $this->starting_point_uvr = null;
        $this->starting_point_fcm = null;
        $this->starting_point_value = null;
        $this->ambulance_km_code = null;
        $this->ambulance_km_description = null;
        $this->ambulance_km_uvr = null;
        $this->ambulance_km_fcm = null;
        $this->ambulance_km_value = null;
        $this->ambulance_km_subtotal = null;
        $this->total = null;
        $this->setPostParamName('ambulance-use');
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getForm008Identifier() {
        return $this->form008_identifier;
    }

    public function getAutorizationNumber() {
        return $this->autorization_number;
    }

    public function getCity() {
        return $this->city;
    }

    public function getKmOut() {
        return $this->km_out;
    }

    public function getKmIn() {
        return $this->km_in;
    }

    public function getKmDiff() {
        return $this->km_diff;
    }

    public function getStartingPointCode() {
        return $this->starting_point_code;
    }

    public function getStartingPointDescription() {
        return $this->starting_point_description;
    }

    public function getStartingPointUvr() {
        return $this->starting_point_uvr;
    }

    public function getStartingPointFcm() {
        return $this->starting_point_fcm;
    }

    public function getStartingPointValue() {
        return $this->starting_point_value;
    }

    public function getAmbulanceKmCode() {
        return $this->ambulance_km_code;
    }

    public function getAmbulanceKmDescription() {
        return $this->ambulance_km_description;
    }

    public function getAmbulanceKmUvr() {
        return $this->ambulance_km_uvr;
    }

    public function getAmbulanceKmFcm() {
        return $this->ambulance_km_fcm;
    }

    public function getAmbulanceKmValue() {
        return $this->ambulance_km_value;
    }

    public function getAmbulanceKmSubtotal() {
        return $this->ambulance_km_subtotal;
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


// </editor-fold>


    public function arrayCast($array) {
        $this->form008_identifier = (int) $this->__arrayElement("form008_identifier", $array);
        $this->autorization_number = (string) $this->__arrayElement("autorization_number", $array);
        $this->city = (string) $this->__arrayElement("city", $array);
        $this->km_out = (float) $this->__arrayElement("km_out", $array);
        $this->km_in = (float) $this->__arrayElement("km_in", $array);
        $this->km_diff = (float) $this->__arrayElement("km_diff", $array);
        $this->starting_point_code = (int) $this->__arrayElement("starting_point_code", $array);
        $this->starting_point_description = (string) $this->__arrayElement("starting_point_description", $array);
        $this->starting_point_uvr = (float) $this->__arrayElement("starting_point_uvr", $array);
        $this->starting_point_fcm = (float) $this->__arrayElement("starting_point_fcm", $array);
        $this->starting_point_value = (float) $this->__arrayElement("starting_point_value", $array);
        $this->ambulance_km_code = (int) $this->__arrayElement("ambulance_km_code", $array);
        $this->ambulance_km_description = (string) $this->__arrayElement("ambulance_km_description", $array);
        $this->ambulance_km_uvr = (float) $this->__arrayElement("ambulance_km_uvr", $array);
        $this->ambulance_km_fcm = (float) $this->__arrayElement("ambulance_km_fcm", $array);
        $this->ambulance_km_value = (float) $this->__arrayElement("ambulance_km_value", $array);
        $this->ambulance_km_subtotal = (float) $this->__arrayElement("ambulance_km_subtotal", $array);
        $this->total = (float) $this->__arrayElement("total", $array);
        parent::arrayCast($array);
    }

    protected function arrayContent() {
        return [
            "form008_identifier" => $this->form008_identifier,
            "autorization_number" => $this->autorization_number,
            "city" => $this->city,
            "km_out" => $this->km_out,
            "km_in" => $this->km_in,
            "km_diff" => $this->km_diff,
            "starting_point_code" => $this->starting_point_code,
            "starting_point_description" => $this->starting_point_description,
            "starting_point_uvr" => $this->starting_point_uvr,
            "starting_point_fcm" => $this->starting_point_fcm,
            "starting_point_value" => $this->starting_point_value,
            "ambulance_km_code" => $this->ambulance_km_code,
            "ambulance_km_description" => $this->ambulance_km_description,
            "ambulance_km_uvr" => $this->ambulance_km_uvr,
            "ambulance_km_fcm" => $this->ambulance_km_fcm,
            "ambulance_km_value" => $this->ambulance_km_value,
            "ambulance_km_subtotal" => $this->ambulance_km_subtotal,
            "total" => $this->total
        ];
    }

}

?>