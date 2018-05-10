<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * furDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/furEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class furDA extends dataAccess\myDA {

    /**
     *
     * @param int $form008Identifier
     * @return app\furEntity
     */
    public function getFurByForm008Identifier($form008Identifier) {
        return $this->castSingleVectorQuery($this->query("select * from soat.get_fur_by_form008_identifier('$form008Identifier'::int4)"));
    }

    /**
     *
     * @param int $desde
     * @param int $hasta
     * @param string $item
     * @return app\furEntity[]
     */
    public function getFurByHealthCenterAdmisionReport($desde, $hasta, $item) {
        return $this->castVectorQuery($this->query("select * from soat.get_fur_by_health_center_admision_report('$desde'::int8, '$hasta'::int8, '$item'::text)"));
    }

    /**
     *
     * @param app\furEntity $ent
     * @return bool
     */
    public function processFur($ent){
        //echo (int)$ent->getInsuredDead() . "++++++";
        return (bool) $this->castScalarQuery($this->query("select soat.process_fur('{$ent->getForm008Identifier()}'::int4, '{$ent->getPatientConditionWalker(true)}'::int2, '{$ent->getPatientConditionOccupant(true)}'::int2, '{$ent->getAccidentAddress()}'::text, '{$ent->getAccidentProvince()}'::varchar(64), '{$ent->getAccidentCanton()}'::varchar(64), '{$ent->getAccidentParish()}'::varchar(64), '{$ent->getAccidentNeighborhood()}'::varchar(64), '{$ent->getAccidentDate()}'::date, '{$ent->getAccidentHour()}'::int4, '{$ent->getAccidentMinute()}'::int4, '{$ent->getAccidentReport()}'::text, '{$ent->getVehicleInsured(true)}'::int2, '0'::int2, '{$ent->getVehicleNotIdentified(true)}'::int2, 'NULL'::varchar(64), '{$ent->getVehicleLicensePlate()}'::varchar(64), 'NULL'::varchar(64), 'NULL'::varchar(64), NULL::date, NULL::date, now()::date, '0'::int4, '0'::int4, '{$ent->getHealthCenterHistoryNumber()}'::varchar(64), {$ent->getHealthCenterEgressDate(true)}::date, '{$ent->getHealthCenterAmbulatoryCare(true)}'::int2, '{$ent->getHealthCenterHospCare(true)}'::int2, '{$ent->getHealthCenterHospCareDays()}'::int4, '{$ent->getHealthCenterAdmisionReport()}'::text, '{$ent->getHealthCenterEgressReport()}'::text, '{$ent->getHealthCenterReferredFr()}'::varchar(64), '{$ent->getHealthCenterReferredFrCity()}'::varchar(64), {$ent->getHealthCenterReferredFrDate(true)}::date, '{$ent->getHealthCenterReferredTo()}'::varchar(64), '{$ent->getHealthCenterReferredToCity()}'::varchar(64), {$ent->getHealthCenterReferredToDate(true)}::date, '{$ent->getInsuredDead(true)}'::int2, '{$ent->getInsuredDeadBasicReazon()}'::text, '{$ent->getInsuredDeadDirectReazon()}'::text, {$ent->getInsuredDeadDate()}::date, '{$ent->getInsuredDeadHour()}'::int4, '{$ent->getInsuredDeadMinute()}'::int4, {$ent->getInsuredDeadInChargeDoctor()}::int4, {$ent->getInsuredDeadAuthorizerDoctor()}::int4, '{$ent->getLastUpdater()}'::int4, '{$ent->getDescription()}'::text)::int4"));
    }

    protected function rowCast($row) {
        $ent = new app\furEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}

?>