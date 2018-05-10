<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-8:58:55
 * Contact: andresandoval992@gmail.com
 *
 * actionDA, part of app
 */

namespace app\data\dataAccess\kernel;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/kernel/actionEntity.php';

use app\data\dataAccess;
use app\data\entities\kernel;

class actionDA extends dataAccess\myDA {

    /**
     *
     * @param int $appIdentifier
     * @param \app\data\entities\listParametersEntity $parameters
     * @return kernel\actionEntity[]
     */
    public function getAction($appIdentifier, $parameters) {
        return $this->castVectorQuery($this->query("select * from kernel.get_action('$appIdentifier'::int4, {$parameters->getQueryString()})"));
    }

    public function getActionById($identifier, $appIdentifier) {
        $result = $this->castVectorQuery($this->query("select * from kernel.get_action_by_id('$identifier'::varchar(64), '$appIdentifier'::int4)"));
        return (\is_null($result) || \count($result) != 1) ? null : $result[0];
    }

    public function getAssignedMenuActionByProfileIdRootId($profileIdentifier, $appIdentifier, $rootIdentifier) {
        return $this->castVectorQuery($this->query("select * from kernel.get_asigned_menu_action_by_profile_id_root_id('$profileIdentifier'::int4, '$appIdentifier'::int4, '$rootIdentifier'::varchar(64))"));
    }

    public function getAllMenuActionByProfileIdRootId($profileIdentifier, $appIdentifier, $rootIdentifier) {
        return $this->castVectorQuery($this->query("select * from kernel.get_all_menu_action_by_profile_id_root_id('$profileIdentifier'::int4, '$appIdentifier'::int4, '$rootIdentifier'::varchar(64))"));
    }

    public function getActionByAppId($appIdentifier) {
        return $this->castVectorQuery($this->query("select * from kernel.get_action_by_app_id('$appIdentifier'::int4)"));
    }

    /**
     *
     * @param type $appIdentifier
     * @param type $handler
     * @return kernel\actionEntity[]
     */
    public function getActionByHandler($appIdentifier, $handler) {
        return $this->castVectorQuery($this->query("select * from kernel.get_action_by_handler('$appIdentifier'::int4, '$handler'::varchar(64))"));
    }

    public function insertAction($action) {
        /* @var $action kernel\actionEntity */
        return (bool) $this->castScalarQuery($this->query("select kernel.insert_action('{$action->getAppIdentifier()}'::int4, '{$action->getRootIdentifier()}'::varchar(64), '{$action->getType()}'::int2, '{$action->getHandler()}'::varchar(64), '{$action->getAction()}'::varchar(64), '{$action->getAccess()}'::int2, '{$action->getName()}'::varchar(32), '{$action->getTitle()}'::varchar(64), '{$action->getShowInMenu(true)}'::int2, '{$action->getIcon()}'::varchar(32), '{$action->getIconColor()}'::varchar(32), '{$action->getConfirm(true)}'::int2, '{$action->getRunMode()}'::int2, '{$action->getTemplate()}'::text, '{$action->getContextStates()}'::varchar(64), '{$action->getControllerName()}'::varchar(64), '{$action->getProperties()}'::text,  '{$action->getDescription()}'::text, '{$action->getState()}'::int2, '{$action->getLastUpdater()}'::int4)::int4"));
    }

    public function updateAction($action) {
        /* @var $action kernel\actionEntity */
        return (bool) $this->castScalarQuery($this->query("select kernel.update_action('{$action->getAppIdentifier()}'::int4, '{$action->getIdentifier()}'::varchar(64), '{$action->getRootIdentifier()}'::varchar(64), '{$action->getType()}'::int2, '{$action->getHandler()}'::varchar(64), '{$action->getAction()}'::varchar(64), '{$action->getAccess()}'::int2, '{$action->getName()}'::varchar(32), '{$action->getTitle()}'::varchar(64), '{$action->getShowInMenu(true)}'::int2, '{$action->getIcon()}'::varchar(32), '{$action->getIconColor()}'::varchar(32), '{$action->getConfirm(true)}'::int2, '{$action->getRunMode()}'::int2, '{$action->getTemplate()}'::text, '{$action->getContextStates()}'::varchar(64), '{$action->getControllerName()}'::varchar(64), '{$action->getProperties()}'::text,  '{$action->getDescription()}'::text, '{$action->getState()}'::int2, '{$action->getLastUpdater()}'::int4)::int4"));
    }

    public function changeActionState($identifiers, $status, $lastUpdater) {
        return (bool) $this->castScalarQuery($this->query("select kernel.change_action_state('{$this->toPgArray($identifiers)}'::varchar(64)[], '$status'::int2, '$lastUpdater'::int4)::int4"));
    }

    protected function rowCast($row) {
        $ent = new kernel\actionEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}

?>