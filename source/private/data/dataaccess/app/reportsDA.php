<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * cageDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';

use app\data\dataAccess;
use app\data\entities\app;

final class reportsDA extends dataAccess\myDA {

    public function get_reporte_estadistico_aseguradora($desde, $hasta) {
        return $this->castVectorQuery($this->query("select * from soat.get_reporte_estadistico_aseguradora('$desde'::int8, '$hasta'::int8)"));
    }
    public function get_planillado_por_aseguradora($desde, $hasta) {
        return $this->castVectorQuery($this->query("select * from soat.get_planillado_por_aseguradora('$desde'::int8, '$hasta'::int8)"));
    }
    
    public function get_monthly_statistics_dinamic($desde, $hasta){
        //where ef.last_update_date between to_timestamp(_desde/1000) and to_timestamp(_hasta/1000)
        return $this->castVectorQuery($this->query("select * from soat.monthly_statistics where \"FECHA\" between to_timestamp($desde/1000) and to_timestamp($hasta/1000)"));
    }

    


}

?>