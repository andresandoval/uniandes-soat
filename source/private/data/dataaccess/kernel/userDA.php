<?php

namespace app\data\dataAccess\kernel;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/kernel/userEntity.php';

use app\data\dataAccess;
use app\data\entities\kernel;

class userDA extends dataAccess\myDA {

    public function loginUser($user, $appIdentifier) {
        /* @var $user kernel\userEntity */
        $result = $this->castVectorQuery($this->query("select * from kernel.login_user('{$user->getLogin()}'::varchar(32), '{$user->getPassword()}'::varchar(32), '{$appIdentifier}'::int4)"));
        return (\is_null($result) || \count($result) != 1) ? null : $result[0];
    }

    public function getUserById($identifier, $appIdentifier) {
        $result = $this->castVectorQuery($this->query("select * from kernel.get_user_by_id({$identifier}, {$appIdentifier})"));
        return (\is_null($result) || \count($result) != 1) ? null : $result[0];
    }

    /**
     *
     * @param \app\data\entities\listParametersEntity $parameters
     * @return kernel\userEntity[]
     */
    public function getUser($parameters) {
        return $this->castVectorQuery($this->query("select * from kernel.get_user({$parameters->getQueryString()})"));
    }


    /**
     *
     * @param int $appId
     * @return kernel\userEntity[]
     */
    public function getUserByAppId($appId) {
        return $this->castVectorQuery($this->query("select * from kernel.get_user_by_app_id('$appId'::int4)"));
    }

    public function processUser($user){
        /* @var $user kernel\userEntity */
        return (bool) $this->castScalarQuery($this->query("select kernel.process_user('{$user->getIdentifier('int')}'::int4, '{$user->getLogin()}'::varchar(64), '{$user->getProfileIdentifier()}'::int4, '{$user->getDepartmentIdentifier()}'::int4, '{$user->getName()}'::varchar(64), '{$user->getLastName()}'::varchar(64), '{$user->getEmail()}'::varchar(64), '{$user->getPassword()}'::varchar(32), '{$user->getDescription()}'::text, '{$user->getState()}'::int2, '{$user->getLastUpdater()}'::int4)::int4"));
    }

    public function changeUserPassword($user) {
        /* @var $user kernel\userEntity */
        return (bool) $this->castScalarQuery($this->query("select kernel.change_user_password('{$user->getIdentifier()}'::int4, '{$user->getPassword()}'::varchar(32), '{$user->getLastUpdater(true)}'::varchar(64))::int4"));
    }

    public function changeUserState($identifiers, $status, $lastUpdater){
        return (bool) $this->castScalarQuery($this->query("select kernel.change_user_state('{$this->toPgArray($identifiers)}'::int4[], '$status'::int2, '$lastUpdater'::int4)::int4"));
    }

    protected function rowCast($row) {
        $ent = new kernel\userEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}

?>