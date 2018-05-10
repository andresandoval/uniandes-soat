<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * monthlyStatisticsDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/oxigenUseReportEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class oxigenUseReportDA extends dataAccess\myDA {

    /**
     *
     * @param int $year
     * @param int $month
     * @return app\monthlyStatisticsEntity[]
     */
    public function getOxigeno($desde, $hasta){
        return $this->castVectorQuery($this->query("select * from soat.oxygen_use a where \"FECHA\" between to_timestamp($desde/1000) and to_timestamp($hasta/1000)"));
    }
    public function getAmbulancia($desde, $hasta){
        return $this->castVectorQuery($this->query("select * from soat.ambulance_use a where \"FECHA\" between to_timestamp($desde/1000) and to_timestamp($hasta/1000)"));
    }

    protected function rowCast($row) {
        $ent = new app\oxigenUseReportEntity();
        $ent->arrayCast($row);
        return $ent;
    }


}

?>