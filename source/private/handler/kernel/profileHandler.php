<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-17:42:23
 * Contact: andresandoval992@gmail.com
 *
 * profileHandler, part of app
 */

namespace app\handler\kernel;

require_once "./handler/myHandler.php";
require_once "./businessLogic/kernelBL.php";

use app\handler;
use app\businessLogic;
use app\data\entities;

final class profileHandler extends handler\myHandler {

    private $logic;

    public function __construct() {
        $this->logic = new businessLogic\kernelBL();
    }

    private function addProfile() {
        $operations = [
            "process" => handler\routeHandler::profileHandler_saveNewProfile(),
            "retrieveActionList" => handler\routeHandler::profileHandler_addProfileRetrieveActionList()
        ];
        $ent = new entities\kernel\profileEntity();
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray()
        ];
    }

    private function editProfile() {
        /* @var $ent entities\kernel\actionEntity */
        $operations = [
            "process" => handler\routeHandler::profileHandler_updateProfile(),
            "retrieveActionList" => handler\routeHandler::profileHandler_editProfileRetrieveActionList()
        ];
        $ent = $this->logic->getProfileByRowIdentifier();
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => \is_null($ent) ? null : $ent->toArray()
        ];
    }

    private function listProfile() {
        $request = ["retrieveList" => handler\routeHandler::profileHandler_retrieveListProfile()];
        $batch = [
            handler\routeHandler::profileHandler_addProfile()
        ];
        $filters = [
            "state" => $this->createFilterElement("Estado", ["" => "Todos", "0" => "Activo", "1" => "Inactivo", "2" => "En papelera"], "0")
        ];
        return [
            "request" => $request,
            "batch" => $this->normalizeActionAccess($batch, true),
            "filters" => $filters
        ];
    }

    private function retrieveListProfile() {

        $data = $this->logic->getProfile();
        $contextActions = [
            handler\routeHandler::profileHandler_addProfile(),
            handler\routeHandler::profileHandler_editProfile(),
            handler\routeHandler::profileHandler_activateProfile(),
            handler\routeHandler::profileHandler_desactivateProfile(),
            handler\routeHandler::profileHandler_removeProfile(),
            handler\routeHandler::profileHandler_recoverProfile()
        ];
        return $this->logic->generateList($data, \is_null($data) ? null : $this->normalizeActionAccess($contextActions));
    }

    protected function routeAction($action) {
        switch ($action) {
            case handler\routeHandler::profileHandler_addProfile(): return $this->addProfile();
            case handler\routeHandler::profileHandler_editProfile(): return $this->editProfile();

            case handler\routeHandler::profileHandler_saveNewProfile(): return $this->logic->saveProfile();
            case handler\routeHandler::profileHandler_updateProfile(): return $this->logic->updateProfile();

            case handler\routeHandler::profileHandler_listProfile(): return $this->listProfile();
            case handler\routeHandler::profileHandler_retrieveListProfile(): return $this->retrieveListProfile();

            case handler\routeHandler::profileHandler_editProfileRetrieveActionList():
            case handler\routeHandler::profileHandler_addProfileRetrieveActionList(): return $this->logic->getAllMenuActionByProfileIdRootId();

            case handler\routeHandler::profileHandler_activateProfile(): return $this->logic->changeProfileState(self::APP_ACTIVE);
            case handler\routeHandler::profileHandler_desactivateProfile(): return $this->logic->changeProfileState(self::APP_INACTIVE);
            case handler\routeHandler::profileHandler_removeProfile(): return $this->logic->changeProfileState(self::APP_REMOVED);
            case handler\routeHandler::profileHandler_recoverProfile(): return $this->logic->changeProfileState(self::APP_ACTIVE);
        }
    }

}

?>