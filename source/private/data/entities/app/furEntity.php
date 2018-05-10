<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-mar-2016-23:59:58
 * Contact: andresandoval992@gmail.com
 *
 * furEntity, part of soat
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class furEntity extends entities\myEntity {

    private $form008_identifier;
    private $patient_condition_walker;
    private $patient_condition_occupant;
    private $accident_address;
    private $accident_province;
    private $accident_canton;
    private $accident_parish;
    private $accident_neighborhood;
    private $accident_date;
    private $accident_hour;
    private $accident_minute;
    private $accident_report;
    private $vehicle_insured;
    private $vehicle_not_insured;
    private $vehicle_not_identified;
    private $vehicle_coverage_code;
    private $vehicle_license_plate;
    private $vehicle_soat_number;
    private $vehicle_insurance_carrier;
    private $vehicle_police_start_date;
    private $vehicle_police_end_date;
    private $health_center_admision_date;
    private $health_center_admision_hour;
    private $health_center_admision_minute;
    private $health_center_history_number;
    private $health_center_egress_date;
    private $health_center_ambulatory_care;
    private $health_center_hosp_care;
    private $health_center_hosp_care_days;
    private $health_center_admision_report;
    private $health_center_egress_report;
    private $health_center_referred_fr;
    private $health_center_referred_fr_city;
    private $health_center_referred_fr_date;
    private $health_center_referred_to;
    private $health_center_referred_to_city;
    private $health_center_referred_to_date;
    private $insured_dead;
    private $insured_dead_basic_reazon;
    private $insured_dead_direct_reazon;
    private $insured_dead_date;
    private $insured_dead_hour;
    private $insured_dead_minute;
    private $insured_dead_in_charge_doctor;
    private $insured_dead_authorizer_doctor;

    public function __construct() {
        $this->form008_identifier = null;
        $this->patient_condition_walker = null;
        $this->patient_condition_occupant = null;
        $this->accident_address = null;
        $this->accident_province = null;
        $this->accident_canton = null;
        $this->accident_parish = null;
        $this->accident_neighborhood = null;
        $this->accident_date = null;
        $this->accident_hour = null;
        $this->accident_minute = null;
        $this->accident_report = null;
        $this->vehicle_insured = null;
        $this->vehicle_not_insured = null;
        $this->vehicle_not_identified = null;
        $this->vehicle_coverage_code = null;
        $this->vehicle_license_plate = null;
        $this->vehicle_soat_number = null;
        $this->vehicle_insurance_carrier = null;
        $this->vehicle_police_start_date = null;
        $this->vehicle_police_end_date = null;
        $this->health_center_admision_date = null;
        $this->health_center_admision_hour = null;
        $this->health_center_admision_minute = null;
        $this->health_center_history_number = null;
        $this->health_center_egress_date = null;
        $this->health_center_ambulatory_care = null;
        $this->health_center_hosp_care = null;
        $this->health_center_hosp_care_days = null;
        $this->health_center_admision_report = null;
        $this->health_center_egress_report = null;
        $this->health_center_referred_fr = null;
        $this->health_center_referred_fr_city = null;
        $this->health_center_referred_fr_date = null;
        $this->health_center_referred_to = null;
        $this->health_center_referred_to_city = null;
        $this->health_center_referred_to_date = null;
        $this->insured_dead = null;
        $this->insured_dead_basic_reazon = null;
        $this->insured_dead_direct_reazon = null;
        $this->insured_dead_date = null;
        $this->insured_dead_hour = null;
        $this->insured_dead_minute = null;
        $this->insured_dead_in_charge_doctor = null;
        $this->insured_dead_authorizer_doctor = null;

        $this->setPostParamName('fur');
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getForm008Identifier() {
        return $this->form008_identifier;
    }

    public function getPatientConditionWalker($int = false) {
        return $int ? (int) $this->patient_condition_walker : $this->patient_condition_walker;
    }

    public function getPatientConditionOccupant($int = false) {
        return $int ? (int) $this->patient_condition_occupant : $this->patient_condition_occupant;
    }

    public function getAccidentAddress() {
        return $this->accident_address;
    }

    public function getAccidentProvince() {
        return $this->accident_province;
    }

    public function getAccidentCanton() {
        return $this->accident_canton;
    }

    public function getAccidentParish() {
        return $this->accident_parish;
    }

    public function getAccidentNeighborhood() {
        return $this->accident_neighborhood;
    }

    public function getAccidentDate() {
        return $this->accident_date;
    }

    public function getAccidentHour() {
        return $this->accident_hour;
    }

    public function getAccidentMinute() {
        return $this->accident_minute;
    }

    public function getAccidentReport() {
        return $this->accident_report;
    }

    public function getVehicleInsured($int = false) {
        return $int ? (int) $this->vehicle_insured : $this->vehicle_insured;
    }

    public function getVehicleNotInsured() {
        return $this->vehicle_not_insured;
    }

    public function getVehicleNotIdentified($int = false) {
        return $int ? (int) $this->vehicle_not_identified : $this->vehicle_not_identified;
    }

    public function getVehicleCoverageCode() {
        return $this->vehicle_coverage_code;
    }

    public function getVehicleLicensePlate() {
        return $this->vehicle_license_plate;
    }

    public function getVehicleSoatNumber() {
        return $this->vehicle_soat_number;
    }

    public function getVehicleInsuranceCarrier() {
        return $this->vehicle_insurance_carrier;
    }

    public function getVehiclePoliceStartDate() {
        return $this->castNullStringToDb($this->vehicle_police_start_date);
    }

    public function getVehiclePoliceEndDate() {
        return $this->castNullStringToDb($this->vehicle_police_end_date);
    }

    public function getHealthCenterAdmisionDate($sql=false) {
        if(strlen($this->health_center_admision_date) <= 0){
            return $sql ? "NULL" : "";
        }
        return "'{$this->health_center_admision_date}'";
    }

    public function getHealthCenterAdmisionHour() {
        return $this->health_center_admision_hour;
    }

    public function getHealthCenterAdmisionMinute() {
        return $this->health_center_admision_minute;
    }

    public function getHealthCenterHistoryNumber() {
        return $this->health_center_history_number;
    }

    public function getHealthCenterEgressDate($sql=false) {
        if(strlen($this->health_center_egress_date) <= 0){
            return $sql ? "NULL" : "";
        }
        return "'{$this->health_center_egress_date}'";
    }

    public function getHealthCenterAmbulatoryCare($int = false) {
        return $int ? (int) $this->health_center_ambulatory_care : $this->health_center_ambulatory_care;
    }

    public function getHealthCenterHospCare($int = false) {
        return $int ? (int) $this->health_center_hosp_care : $this->health_center_hosp_care;
    }

    public function getHealthCenterHospCareDays() {
        return $this->health_center_hosp_care_days;
    }

    public function getHealthCenterAdmisionReport() {
        return $this->health_center_admision_report;
    }

    public function getHealthCenterEgressReport() {
        return $this->health_center_egress_report;
    }

    public function getHealthCenterReferredFr() {
        return $this->health_center_referred_fr;
    }

    public function getHealthCenterReferredFrCity() {
        return $this->health_center_referred_fr_city;
    }

    public function getHealthCenterReferredFrDate($sql=false) {

        if(strlen($this->health_center_referred_fr_date) <= 0){
            return $sql ? "NULL" : "";
        }
        return "'{$this->health_center_referred_fr_date}'";
    }

    public function getHealthCenterReferredTo() {
        return $this->health_center_referred_to;
    }

    public function getHealthCenterReferredToCity() {
        return $this->health_center_referred_to_city;
    }

    public function getHealthCenterReferredToDate($sql=false) {

        if(strlen($this->health_center_referred_to_date) <= 0){
            return $sql ? "NULL" : "";
        }
        return "'{$this->health_center_referred_to_date}'";
    }

    public function getInsuredDead($int = false) {
        return $int ? (int) $this->insured_dead : $this->insured_dead;
    }

    public function getInsuredDeadBasicReazon() {
        return $this->insured_dead_basic_reazon;
    }

    public function getInsuredDeadDirectReazon() {
        return $this->insured_dead_direct_reazon;
    }

    public function getInsuredDeadDate() {
        return $this->castNullStringToDb($this->insured_dead_date);
    }

    public function getInsuredDeadHour() {
        return $this->insured_dead_hour;
    }

    public function getInsuredDeadMinute() {
        return $this->insured_dead_minute;
    }

    public function getInsuredDeadInChargeDoctor($int = false) {
        if ($int) {
            return $this->insured_dead_in_charge_doctor;
        }
        if ($this->insured_dead_in_charge_doctor <= 0) {
            return "null";
        }
        return "'{$this->insured_dead_in_charge_doctor}'";
    }

    public function getInsuredDeadAuthorizerDoctor($int = false) {
        if ($int) {
            return $this->insured_dead_authorizer_doctor;
        }
        if ($this->insured_dead_authorizer_doctor <= 0) {
            return "null";
        }
        return "'{$this->insured_dead_authorizer_doctor}'";
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="SETTER">

    public function setForm008Identifier($form008_identifier) {
        $this->form008_identifier = $form008_identifier;
    }
    public function sethealth_center_history_number($value) {
        $this->health_center_history_number = $value;
    }

// </editor-fold>


    public function arrayCast($array) {
        $this->form008_identifier = (int) $this->__arrayElement("form008_identifier", $array);
        $this->patient_condition_walker = (bool) $this->__arrayElement("patient_condition_walker", $array);
        $this->patient_condition_occupant = (bool) $this->__arrayElement("patient_condition_occupant", $array);
        $this->accident_address = (string) $this->__arrayElement("accident_address", $array);
        $this->accident_province = (string) $this->__arrayElement("accident_province", $array);
        $this->accident_canton = (string) $this->__arrayElement("accident_canton", $array);
        $this->accident_parish = (string) $this->__arrayElement("accident_parish", $array);
        $this->accident_neighborhood = (string) $this->__arrayElement("accident_neighborhood", $array);
        $this->accident_date = (string) $this->__arrayElement("accident_date", $array);
        $this->accident_hour = (int) $this->__arrayElement("accident_hour", $array);
        $this->accident_minute = (int) $this->__arrayElement("accident_minute", $array);
        $this->accident_report = (string) $this->__arrayElement("accident_report", $array);
        $this->vehicle_insured = (bool) $this->__arrayElement("vehicle_insured", $array);
        $this->vehicle_not_insured = (bool) $this->__arrayElement("vehicle_not_insured", $array);
        $this->vehicle_not_identified = (bool) $this->__arrayElement("vehicle_not_identified", $array);
        $this->vehicle_coverage_code = (string) $this->__arrayElement("vehicle_coverage_code", $array);
        $this->vehicle_license_plate = (string) $this->__arrayElement("vehicle_license_plate", $array);
        $this->vehicle_soat_number = (string) $this->__arrayElement("vehicle_soat_number", $array);
        $this->vehicle_insurance_carrier = (string) $this->__arrayElement("vehicle_insurance_carrier", $array);
        $this->vehicle_police_start_date = (string) $this->__arrayElement("vehicle_police_start_date", $array);
        $this->vehicle_police_end_date = (string) $this->__arrayElement("vehicle_police_end_date", $array);
        $this->health_center_admision_date = (string) $this->__arrayElement("health_center_admision_date", $array);
        $this->health_center_admision_hour = (int) $this->__arrayElement("health_center_admision_hour", $array);
        $this->health_center_admision_minute = (int) $this->__arrayElement("health_center_admision_minute", $array);
        $this->health_center_history_number = (string) $this->__arrayElement("health_center_history_number", $array);
        $this->health_center_egress_date = (string) $this->__arrayElement("health_center_egress_date", $array);
        $this->health_center_ambulatory_care = (bool) $this->__arrayElement("health_center_ambulatory_care", $array);
        $this->health_center_hosp_care = (bool) $this->__arrayElement("health_center_hosp_care", $array);
        $this->health_center_hosp_care_days = (int) $this->__arrayElement("health_center_hosp_care_days", $array);
        $this->health_center_admision_report = (string) $this->__arrayElement("health_center_admision_report", $array);
        $this->health_center_egress_report = (string) $this->__arrayElement("health_center_egress_report", $array);
        $this->health_center_referred_fr = (string) $this->__arrayElement("health_center_referred_fr", $array);
        $this->health_center_referred_fr_city = (string) $this->__arrayElement("health_center_referred_fr_city", $array);
        $this->health_center_referred_fr_date = (string) $this->__arrayElement("health_center_referred_fr_date", $array);
        $this->health_center_referred_to = (string) $this->__arrayElement("health_center_referred_to", $array);
        $this->health_center_referred_to_city = (string) $this->__arrayElement("health_center_referred_to_city", $array);
        $this->health_center_referred_to_date = (string) $this->__arrayElement("health_center_referred_to_date", $array);
        $this->insured_dead = (bool) $this->__arrayElement("insured_dead", $array);
        $this->insured_dead_basic_reazon = (string) $this->__arrayElement("insured_dead_basic_reazon", $array);
        $this->insured_dead_direct_reazon = (string) $this->__arrayElement("insured_dead_direct_reazon", $array);
        $this->insured_dead_date = (string) $this->__arrayElement("insured_dead_date", $array);
        $this->insured_dead_hour = (int) $this->__arrayElement("insured_dead_hour", $array);
        $this->insured_dead_minute = (int) $this->__arrayElement("insured_dead_minute", $array);
        $this->insured_dead_in_charge_doctor = (int) $this->__arrayElement("insured_dead_in_charge_doctor", $array);
        $this->insured_dead_authorizer_doctor = (int) $this->__arrayElement("insured_dead_authorizer_doctor", $array);
        parent::arrayCast($array);
    }

    protected function arrayContent() {
        return [
            "form008_identifier" => $this->form008_identifier,
            "patient_condition_walker" => $this->patient_condition_walker,
            "patient_condition_occupant" => $this->patient_condition_occupant,
            "accident_address" => $this->accident_address,
            "accident_province" => $this->accident_province,
            "accident_canton" => $this->accident_canton,
            "accident_parish" => $this->accident_parish,
            "accident_neighborhood" => $this->accident_neighborhood,
            "accident_date" => $this->accident_date,
            "accident_hour" => $this->accident_hour,
            "accident_minute" => $this->accident_minute,
            "accident_report" => $this->accident_report,
            "vehicle_insured" => $this->vehicle_insured,
            "vehicle_not_insured" => $this->vehicle_not_insured,
            "vehicle_not_identified" => $this->vehicle_not_identified,
            "vehicle_coverage_code" => $this->vehicle_coverage_code,
            "vehicle_license_plate" => $this->vehicle_license_plate,
            "vehicle_soat_number" => $this->vehicle_soat_number,
            "vehicle_insurance_carrier" => $this->vehicle_insurance_carrier,
            "vehicle_police_start_date" => $this->vehicle_police_start_date,
            "vehicle_police_end_date" => $this->vehicle_police_end_date,
            "health_center_admision_date" => $this->health_center_admision_date,
            "health_center_admision_hour" => $this->health_center_admision_hour,
            "health_center_admision_minute" => $this->health_center_admision_minute,
            "health_center_history_number" => $this->health_center_history_number,
            "health_center_egress_date" => $this->health_center_egress_date,
            "health_center_ambulatory_care" => $this->health_center_ambulatory_care,
            "health_center_hosp_care" => $this->health_center_hosp_care,
            "health_center_hosp_care_days" => $this->health_center_hosp_care_days,
            "health_center_admision_report" => $this->health_center_admision_report,
            "health_center_admision_report3" => [],
            "health_center_egress_report" => $this->health_center_egress_report,
            "health_center_referred_fr" => $this->health_center_referred_fr,
            "health_center_referred_fr_city" => $this->health_center_referred_fr_city,
            "health_center_referred_fr_date" => $this->health_center_referred_fr_date,
            "health_center_referred_to" => $this->health_center_referred_to,
            "health_center_referred_to_city" => $this->health_center_referred_to_city,
            "health_center_referred_to_date" => $this->health_center_referred_to_date,
            "insured_dead" => $this->insured_dead,
            "insured_dead_basic_reazon" => $this->insured_dead_basic_reazon,
            "insured_dead_direct_reazon" => $this->insured_dead_direct_reazon,
            "insured_dead_date" => $this->insured_dead_date,
            "insured_dead_hour" => $this->insured_dead_hour,
            "insured_dead_minute" => $this->insured_dead_minute,
            "insured_dead_in_charge_doctor" => $this->insured_dead_in_charge_doctor,
            "insured_dead_authorizer_doctor" => $this->insured_dead_authorizer_doctor
        ];
    }

}

?>