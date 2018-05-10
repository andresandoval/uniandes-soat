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
require_once './data/entities/app/monthlyStatisticsEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class monthlyStatisticsDA extends dataAccess\myDA {

    /**
     *
     * @param int $year
     * @param int $month
     * @return app\monthlyStatisticsEntity[]
     */
    public function getMonthlyStatisticsByDate($year, $month){
        return $this->castVectorQuery($this->query("select * from soat.monthly_statistics where extract(year from \"FECHA\") = $year and extract(month from \"FECHA\") = $month"));
    }

    protected function rowCast($row) {
        $ent = new app\monthlyStatisticsEntity();
        $ent->arrayCast($row);
        return $ent;
    }


}

?>