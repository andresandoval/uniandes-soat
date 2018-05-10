<?php

namespace app\data\dataAccess\kernel;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/kernel/enterpriseEntity.php';

use app\data\dataAccess;
use app\data\entities;

final class enterpriseDA extends dataAccess\myDA {

    public function getEnterprise() {
        $result = $this->castVectorQuery($this->query("select * from kernel.get_enterprise()"));
        return (\is_null($result) || \count($result) != 1) ? null : $result[0];
    }

    public function processEnterprise($ent) {
        /* @var $ent entities\kernel\enterpriseEntity */

        return (bool) $this->castScalarQuery($this->query("select kernel.process_enterprise('{$ent->getIdentifier()}'::int4, '{$ent->getAppIdentifier()}'::int4 ,'{$ent->getIdentityNumber()}'::varchar(13), '{$ent->getName()}'::varchar(64), '{$ent->getBusinessName()}'::varchar(64), '{$ent->getLawRepresentative()}'::varchar(64), '{$ent->getAddress()}'::varchar(64), '{$ent->getPhone()}'::varchar(64), '{$ent->getEmail()}'::varchar(64), '{$ent->getDescription()}'::text, '{$ent->getState()}'::int2, '{$ent->getLastUpdater()}'::int4)::int4"));
    }

    protected function rowCast($row) {
        $ent = new entities\kernel\enterpriseEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}

?>