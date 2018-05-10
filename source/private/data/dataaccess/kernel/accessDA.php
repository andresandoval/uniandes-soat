<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 23-abr-2015-21:20:43
 * Contact: andresandoval992@gmail.com
 *
 * validateActionAccessDA, part of app_pg
 */

namespace app\data\dataAccess\kernel;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/kernel/accessEntity.php';

use app\data\dataAccess;
use app\data\entities\kernel;

class accessDA extends dataAccess\myDA {

    public function validateAccess($actionIdentifier, $userIdentifier, $profileIdentifier, $departmentIdentifier, $appIdentifier, $session) {
        /* @var $param kernel\validateActionAccessEntity */
        $result = $this->castVectorQuery($this->query("select * from kernel.validate_action_access('$actionIdentifier'::varchar(64), '$userIdentifier'::int4, '$profileIdentifier'::int4, '$departmentIdentifier'::int4, '$appIdentifier'::int4, '$session'::int2)"));
        return (\is_null($result) || \count($result) != 1) ? null : $result[0];
    }

    protected function rowCast($row) {
        $ent = new kernel\accessEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}

?>