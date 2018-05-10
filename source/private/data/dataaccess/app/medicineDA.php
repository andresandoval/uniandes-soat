<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * medicineDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/medicineEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class medicineDA extends dataAccess\myDA {

    /**
     *
     * @return app\medicineEntity[]
     */
    public function getAllMedicine(){
        return $this->castVectorQuery($this->query("select * from soat.get_all_medicine()"));
    }

    /**
     *
     * @return app\medicineEntity[]
     */
    public function getTariffAsMedicine(){
        return $this->castVectorQuery($this->query("select * from soat.get_tariff_as_medicine()"));
    }

    protected function rowCast($row) {
        $ent = new app\medicineEntity();
        $ent->arrayCast($row);
        return $ent;
    }


}

?>