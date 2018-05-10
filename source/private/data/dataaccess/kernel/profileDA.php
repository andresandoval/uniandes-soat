<?php

namespace app\data\dataAccess\kernel;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/kernel/profileEntity.php';

use app\data\dataAccess;
use app\data\entities\kernel;

final class profileDA extends dataAccess\myDA {

    public function getProfileById($identifier, $appIdentifier) {
        $result = $this->castVectorQuery($this->query("select * from kernel.get_profile_by_id('$identifier'::int4, '$appIdentifier'::int4)"));
        return (\is_null($result) || \count($result) != 1) ? null : $result[0];
    }

    /**
     *
     * @param int $appIdentifier
     * @param \app\data\entities\listParametersEntity $parameters
     * @return kernel\profileEntity[]
     */
    public function getProfile($appIdentifier, $parameters) {
        return $this->castVectorQuery($this->query("select * from kernel.get_profile('$appIdentifier'::int4, {$parameters->getQueryString()})"));
    }

    public function insertProfile($profile) {
        /* @var $profile kernel\profileEntity */
        return (bool) $this->castScalarQuery($this->query("select kernel.insert_profile('{$profile->getAppIdentifier()}'::int4, '{$profile->getName()}'::varchar(64), '{$profile->getDescription()}'::text, '{$profile->getState()}'::int2, '{$profile->getLastUpdater()}'::int4, '{$this->toPgArray($profile->getActions())}'::varchar(64)[])::int4"));
    }

    public function updateProfile($profile) {
        /* @var $profile kernel\profileEntity */
        return (bool) $this->castScalarQuery($this->query("select kernel.update_profile('{$profile->getIdentifier()}'::int4, '{$profile->getName()}'::varchar(64), '{$profile->getDescription()}'::text, '{$profile->getState()}'::int2, '{$profile->getLastUpdater()}'::int4, '{$this->toPgArray($profile->getActions())}'::varchar(64)[])::int4"));
    }

    public function getProfileByAppId($appIdentifier) {
        return $this->castVectorQuery($this->query("select * from kernel.get_profile_by_app_id('$appIdentifier'::int4)"));
    }

    public function changeProfileState($identifier, $status, $lastUpdater) {
        return (bool) $this->castScalarQuery($this->query("select kernel.change_profile_state('$identifier'::int4, '$status'::int2, '$lastUpdater'::int4)::int4"));
    }

    protected function rowCast($row) {
        $ent = new kernel\profileEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}

?>