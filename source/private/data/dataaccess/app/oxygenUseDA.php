<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * oxygenUseDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/oxygenUseEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class oxygenUseDA extends dataAccess\myDA {

    /**
     *
     * @param app\oxygenUseEntity $ent
     * @return bool
     */
    public function processOxygenUse($ent) {
        return (bool) $this->castScalarQuery($this->query("select soat.process_oxygen_use('{$ent->getForm008Identifier()}'::int4, '{$ent->getStartDate()}'::date, '{$ent->getStartHour()}'::int4, '{$ent->getStartMinute()}'::int4, '{$ent->getEndDate()}'::date, '{$ent->getEndHour()}'::int4, '{$ent->getEndMinute()}'::int4, '{$ent->getDiffHour()}'::int4, '{$ent->getDiffMinute()}'::int4, '{$ent->getTotalMinute()}'::int4, '{$ent->getLm()}'::decimal(19,5), '{$ent->getOxygenCode()}'::numeric, '{$ent->getOxygenDescription()}'::varchar(360), '{$ent->getUvr()}'::decimal(19,5), '{$ent->getFcm()}'::decimal(19,5), '{$ent->getValue()}'::decimal(19,5), '{$ent->getTotal()}'::decimal(19,5), '{$ent->getDescription()}'::text, '{$ent->getLastUpdater()}'::int4)::int4"));
    }

    /**
     *
     * @param int $form008_identifier
     * @return app\oxygenUseEntity[]
     */
    public function getOxygenUseByForm008Identifier($form008_identifier) {
        return $this->castVectorQuery($this->query("select * from soat.get_oxygen_use_by_form008_identifier('{$form008_identifier}'::int4)"));
    }

    protected function rowCast($row) {
        $ent = new app\oxygenUseEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}

?>