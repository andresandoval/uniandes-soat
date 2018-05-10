<?php
/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-8:58:55
 * Contact: andresandoval992@gmail.com
 *
 * appDA, part of app
 */

namespace app\data\dataAccess\kernel;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/kernel/appEntity.php';

use app\data\dataAccess;
use app\data\entities\kernel;

class appDA extends dataAccess\myDA{

    public function getAppById($identifier){
        $result = $this->castVectorQuery($this->query("select * from kernel.get_app_by_id('$identifier'::int4)"));
        if(\is_null($result) || \count($result) != 1 ){
            return null;
        }
        return $result[0];
    }

    protected function rowCast($row) {
        $ent = new kernel\appEntity();
        $ent->arrayCast($row);
        return $ent;
    }



}

?>