<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * tariffDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/individualStatisticsEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class individualStatisticsDA extends dataAccess\myDA {

    /**
     *
     * @return app\individualStatisticsEntity[]
     */
    public function getIndividualStatistic($desde, $hasta, $item, $tipo) {
        return $this->castVectorQuery($this->query("select * from soat.get_individual_statistic('$desde'::int8, '$hasta'::int8, '$item'::int4, '$tipo'::char(1))"));
    }

   

    protected function rowCast($row) {
        $ent = new app\individualStatisticsEntity();
        $ent->arrayCast($row);
        return $ent;
    }


}

?>