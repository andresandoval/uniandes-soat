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
require_once './data/entities/app/tariffEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class tariffDA extends dataAccess\myDA {

    /**
     *
     * @return app\tariffEntity[]
     */
    public function getAmbulanceUseTariff() {
        return $this->castVectorQuery($this->query("select * from soat.get_ambulance_use_tariff()"));
    }

    /**
     *
     * @return app\tariffEntity[]
     */
    public function getOxygenUseTariff() {
        return $this->castSingleVectorQuery($this->query("select * from soat.get_oxygen_use_tariff()"));
    }

    protected function rowCast($row) {
        $ent = new app\tariffEntity();
        $ent->arrayCast($row);
        return $ent;
    }


}

?>