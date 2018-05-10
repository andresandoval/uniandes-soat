<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * ambulanceUseDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/ambulanceUseEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class ambulanceUseDA extends dataAccess\myDA {

    /**
     *
     * @param app\ambulanceUseEntity $ent
     * @return bool
     */
    public function processAmbulanceUse($ent){
        return (bool) $this->castScalarQuery($this->query("select soat.process_ambulance_use('{$ent->getForm008Identifier()}'::int4, '{$ent->getAutorizationNumber()}'::varchar(64), '{$ent->getCity()}'::varchar(64), '{$ent->getKmOut()}'::decimal(19,5), '{$ent->getKmIn()}'::decimal(19,5), '{$ent->getKmDiff()}'::decimal(19,5), '{$ent->getStartingPointCode()}'::numeric, '{$ent->getStartingPointDescription()}'::varchar(360), '{$ent->getStartingPointUvr()}'::decimal(19,5), '{$ent->getStartingPointFcm()}'::decimal(19,5), '{$ent->getStartingPointValue()}'::decimal(19,5), '{$ent->getAmbulanceKmCode()}'::numeric, '{$ent->getAmbulanceKmDescription()}'::varchar(360), '{$ent->getAmbulanceKmUvr()}'::decimal(19,5), '{$ent->getAmbulanceKmFcm()}'::decimal(19,5), '{$ent->getAmbulanceKmValue()}'::decimal(19,5), '{$ent->getAmbulanceKmSubtotal()}'::decimal(19,5), '{$ent->getTotal()}'::decimal(19,5), '{$ent->getDescription()}'::text, '{$ent->getLastUpdater()}'::int4)::int4"));
    }


    /**
     *
     * @param int $form008_identifier
     * @return app\ambulanceUseEntity[]
     */
    public function getAmbulanceUseByForm008Identifier($form008_identifier){
        return $this->castVectorQuery($this->query("select * from soat.get_ambulance_use_by_form008_identifier('{$form008_identifier}'::int4)"));
    }

    protected function rowCast($row) {
        $ent = new app\ambulanceUseEntity();
        $ent->arrayCast($row);
        return $ent;
    }


}

?>