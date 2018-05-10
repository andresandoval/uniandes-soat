<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 17/11/2015-11:12:12
 * Contact: andresandoval992@gmail.com
 *
 * appBL, part of app
 */

namespace app\businessLogic;

require_once "./businessLogic/myBL.php";
require_once "./data/dataAccess/app/patientDA.php";
require_once "./data/dataAccess/app/form008DA.php";
require_once "./data/dataAccess/app/tariffDA.php";
require_once "./data/dataAccess/app/ambulanceUseDA.php";
require_once "./data/dataAccess/app/oxygenUseDA.php";
require_once "./data/dataAccess/app/doctorDA.php";
require_once "./data/dataAccess/app/furDA.php";
require_once "./data/dataAccess/app/medicineDA.php";
require_once "./data/dataAccess/app/expenseFormDA.php";
require_once "./data/dataAccess/app/expenseFormDetailDA.php";
require_once "./data/dataAccess/app/objectionDA.php";
require_once "./data/dataAccess/app/monthlyStatisticsDA.php";
require_once "./data/dataAccess/app/oxigenUseReportDA.php";
require_once "./data/dataAccess/app/individualStatisticsDA.php";
require_once "./data/dataAccess/app/reportsDA.php";

use app\data\dataAccess;
use app\data\entities;

final class appBL extends myBL {
    //
    // <editor-fold defaultstate="collapsed" desc="PATIENT">

    /**
     *
     * @return entities\app\patientEntity[]
     */
    public function getPatient() {
        $da = new dataAccess\app\patientDA();
        return $da->getPatient(new entities\listParametersEntity());
    }

    /**
     *
     * @return entities\app\patientEntity
     */
    public function getPatientById($identifier = null) {
        $da = new dataAccess\app\patientDA();
        return $da->getPatientById($this->nvl($identifier, $this->getIdentifiersFromPost(false)));
    }

    /**
     *
     * Devuelve el paciente, pero con Strings en Provincia, canton y parroquia
     *
     * @return entities\app\patientEntity
     */
    public function getPatientById2($identifier = null) {
        $da = new dataAccess\app\patientDA();
        return $da->getPatientById2($this->nvl($identifier, $this->getIdentifiersFromPost(false)));
    }

    /**
     *
     * @return app\patientEntity[]
     */
    public function getActivePatient() {
        $da = new dataAccess\app\patientDA();
        return $da->getActivePatient();
    }

    public function processPatient($new = false) {
        $ent = new entities\app\patientEntity();
        $ent->postCast();
        if ($new && !\is_null($this->getPatientById($ent->getIdentificacion()))) {
            return $this->failEncode("El paciente con el numero de identificacion {$ent->getIdentificacion()} ya esta registrado!!");
        }
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\app\patientDA();
        return $this->newEncode($da->processPatient($ent), $da->getLastNotice());
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="FORM008">

    /**
     *
     * @return app\form008Entity[]
     */
    public function getForm008() {
        $da = new dataAccess\app\form008DA();
        return $da->getForm008(new entities\listParametersEntity());
    }

    /**
     *
     * @return entities\app\form008Entity
     */
    public function getForm008ById($identifier = null) {
        $da = new dataAccess\app\form008DA();
        return $da->getForm008ById($this->nvl($identifier, $this->getIdentifiersFromPost(false)));
    }

    public function processForm008() {
        $ent = new entities\app\form008Entity();
        $ent->postCast();
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\app\form008DA();
        $identifier = $da->processForm008($ent);
        if ($identifier <= 0) {
            return $da->getLastNotice();
        }
        return $identifier;
    }

    public function processUsoAmbulancia() {
        $ent = new entities\app\form008Entity();
        $ent->postCast();
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\app\form008DA();
        $identifier = $da->processForm008($ent);
        if ($identifier <= 0) {
            return $da->getLastNotice();
        }
        return $identifier;
    }
    
    /**
     *
     * @return app\form008Entity[]
     */
    public function get_form008_by_date($desde, $hasta) {
        $da = new dataAccess\app\form008DA();
        return $da->get_form008_by_date($desde, $hasta);
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="TARIFF">

    public function getAmbulanceUseTariff() {
        $da = new dataAccess\app\tariffDA();
        return $da->getAmbulanceUseTariff();
    }

    public function getOxygenUseTariff() {
        $da = new dataAccess\app\tariffDA();
        return $da->getOxygenUseTariff();
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="AMBULANCE USE">

    public function processAmbulanceUse() {
        $ent = new entities\app\ambulanceUseEntity();
        $ent->postCast();
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\app\ambulanceUseDA();
        return $this->newEncode($da->processAmbulanceUse($ent), $da->getLastNotice());
    }

    /**
     *
     * @param int $identifier
     * @return entities\app\ambulanceUseEntity[]
     */
    public function getAmbulanceUseByForm008Identifier($identifier) {

        $da = new dataAccess\app\ambulanceUseDA();
        return $da->getAmbulanceUseByForm008Identifier($identifier);
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="OXYGEN">

    public function processOxygenUse() {
        $ent = new entities\app\oxygenUseEntity();
        $ent->postCast();
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\app\oxygenUseDA();
        return $this->newEncode($da->processOxygenUse($ent), $da->getLastNotice());
    }

    /**
     *
     * @param int $identifier
     * @return entities\app\oxygenUseEntity[]
     */
    public function getOxygenUseByForm008Identifier($identifier) {

        $da = new dataAccess\app\oxygenUseDA();
        return $da->getOxygenUseByForm008Identifier($identifier);
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="DOCTOR">

    public function getDoctor() {
        $da = new dataAccess\app\doctorDA();
        return $da->getDoctor(new entities\listParametersEntity());
    }

    public function getAllDoctor() {
        $da = new dataAccess\app\doctorDA();
        return $da->getAllDoctor();
    }

    public function getDoctorByForm008Identifier($form008Identifier) {
        $da = new dataAccess\app\doctorDA();
        return $da->getDoctorByForm008Identifier($form008Identifier);
    }

    public function processForm008HasDoctor($form008Identifier, $doctorIdentifier) {
        $da = new dataAccess\app\doctorDA();
        return $this->newEncode($da->processForm008HasDoctor($form008Identifier, $doctorIdentifier, $this->getSessionUserId()), $da->getLastNotice());
    }

    public function getDoctorById($identifier = null) {
        $da = new dataAccess\app\doctorDA();
        return $da->getDoctorById($this->nvl($identifier, $this->getIdentifiersFromPost(false)));
    }

    public function processDoctor() {
        $ent = new entities\app\doctorEntity();
        $ent->postCast();
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\app\doctorDA();
        return $this->newEncode($da->processDoctor($ent), $da->getLastNotice());
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="FUR">

    public function getFurByForm008Identifier($form008Identifier) {
        $da = new dataAccess\app\furDA();
        return $da->getFurByForm008Identifier($form008Identifier);
    }

    /**
     *
     * @param int $desde
     * @param int $hasta
     * @param string $item
     * @return app\furEntity[]
     */
    public function getFurByHealthCenterAdmisionReport($desde, $hasta, $item) {
        $da = new dataAccess\app\furDA();
        return $da->getFurByHealthCenterAdmisionReport($desde, $hasta, $item);
    }

    public function processFur() {
        $ent = new entities\app\furEntity();
        $ent->postCast();
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\app\furDA();
        return $this->newEncode($da->processFur($ent), $da->getLastNotice());
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="MEDICINE">

    public function getAllMedicine() {
        $da = new dataAccess\app\medicineDA();
        return $da->getAllMedicine();
    }

    /**
     *
     * @return entities\app\medicineEntity[]
     */
    public function getTariffAsMedicine() {
        $da = new dataAccess\app\medicineDA();
        return $da->getTariffAsMedicine();
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="EXPENSE FORM">

    public function processExpenseForm() {
        $ent = new entities\app\expenseFormEntity();
        $ent->postCast();
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\app\expenseFormDA();
        return $this->newEncode($da->processExpenseForm($ent), $da->getLastNotice());
    }

    public function getAllExpenseFormDetail($identifier) {
        $da = new dataAccess\app\expenseFormDetailDA();
        return $da->getAllExpenseFormDetail($identifier);
    }

    public function getExpenseFormByForm008Identifier($form008Identifier) {
        $da = new dataAccess\app\expenseFormDA();
        return $da->getExpenseFormByForm008Identifier($form008Identifier);
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="OBJECTION">

    public function getObjectionByForm008Identifier($form008Identifier) {
        $da = new dataAccess\app\objectionDA();
        return $da->getObjectionByForm008Identifier($form008Identifier);
    }

    public function processObjection() {
        $ent = new entities\app\objectionEntity();
        $ent->postCast();
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\app\objectionDA();

        $det = \filter_input(\INPUT_POST, "\$\$data", \FILTER_DEFAULT, \FILTER_REQUIRE_ARRAY);
        if (!$da->processObjection($ent)) {
            return $this->newEncode(false, "No se pudo actualizar la objecion");
        }

        return $this->updateObjecion($det["detail"]);
    }

    public function updateObjecion($det) {
        $da = new dataAccess\app\objectionDA();
        $ok = 0;
        foreach ($det as $a) {
            if ($da->updateObjection($a[0], $a[1], $a[2])) {
                $ok += 1;
            }
        }
        if ($ok == \count($det)) {
            return $this->newEncode(true, "Se actualizaron todos los items");
        }
        return $this->newEncode(false, "Se actualizaron $ok de " . \count($det) . " items");
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="REPORT">

    public function getMonthlyStatisticsByDate($year, $month) {
        $da = new dataAccess\app\monthlyStatisticsDA();
        return $da->getMonthlyStatisticsByDate($year, $month);
    }

    public function getOxigeno($desde, $hasta) {
        $da = new dataAccess\app\oxigenUseReportDA();
        return $da->getOxigeno($desde, $hasta);
    }

    public function getAmbulancia($desde, $hasta) {
        $da = new dataAccess\app\oxigenUseReportDA();
        return $da->getAmbulancia($desde, $hasta);
    }

    /**
     *
     * @return app\individualStatisticsEntity[]
     */
    public function getIndividualStatistic($desde, $hasta, $item, $tipo) {
        $da = new dataAccess\app\individualStatisticsDA();
        return $da->getIndividualStatistic($desde, $hasta, $item, $tipo);
    }
    
    public function get_reporte_estadistico_aseguradora($desde, $hasta){
        $da = new dataAccess\app\reportsDA();
        return $da->get_reporte_estadistico_aseguradora($desde, $hasta);
    }
    public function get_planillado_por_aseguradora($desde, $hasta){
        $da = new dataAccess\app\reportsDA();
        return $da->get_planillado_por_aseguradora($desde, $hasta);
    }
     public function get_monthly_statistics_dinamic($desde, $hasta){
        $da = new dataAccess\app\reportsDA();
        return $da->get_monthly_statistics_dinamic($desde, $hasta);
    }


// </editor-fold>
}

?>