<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-17:42:23
 * Contact: andresandoval992@gmail.com
 *
 * userHandler, part of app
 */

namespace app\handler\kernel;

require_once "./handler/myHandler.php";
require_once "./businessLogic/kernelBL.php";

use app\handler;
use app\businessLogic;
use app\data\entities;

final class userHandler extends handler\myHandler {

    private $logic;

    public function __construct() {
        $this->logic = new businessLogic\kernelBL();
    }

    private function listUser() {
        $request = ["retrieveList" => handler\routeHandler::userHandler_retreiveListUser()];
        $batch = [
            handler\routeHandler::userHandler_addUser()
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

    private function addUser() {
        $operations = [
            "process" => handler\routeHandler::userHandler_saveNewUser(),
            "retrieveProfileList" => handler\routeHandler::userHandler_addUserRetrieveProfileList(),
            "retrieveDepartmentList" => handler\routeHandler::userHandler_addUserRetrieveDepartmentList()
        ];
        $ent = new entities\kernel\userEntity();

        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray()
        ];
    }

    private function editUser() {
        $operations = [
            "process" => handler\routeHandler::userHandler_updateUser(),
            "retrieveProfileList" => handler\routeHandler::userHandler_editUserRetrieveProfileList(),
            "retrieveDepartmentList" => handler\routeHandler::userHandler_editUserRetrieveDepartmentList()
        ];
        $ent = $this->logic->getUserByRowIdentifier();
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray()
        ];
    }

    private function retrieveProfileList() {
        /* @var $__p__ entities\kernel\profileEntity */
        $__profiles__ = $this->logic->getProfileByAppId();
        $__array__ = [];
        if (!\is_null($__profiles__)) {
            foreach ($__profiles__ as $__p__) {
                $__array__[$__p__->getIdentifier()] = $__p__->getName();
            }
        }
        return $this->logic->successEncode($__array__);
    }

    private function retrieveDepartmentList() {
        /* @var $__d__ entities\kernel\profileEntity */
        $__departments__ = $this->logic->getDepartmentByEnterpriseId();
        $__array__ = [];
        if (!\is_null($__departments__)) {
            foreach ($__departments__ as $__d__) {
                $__array__[$__d__->getIdentifier()] = $__d__->getName();
            }
        }
        return $this->logic->successEncode($__array__);
    }

    private function retrieveListUser() {
        $data = $this->logic->getUser();
        $contextActions = [
            handler\routeHandler::userHandler_addUser(),
            handler\routeHandler::userHandler_editUser()
        ];
        return $this->logic->generateList($data, \is_null($data) ? null : $this->normalizeActionAccess($contextActions));
    }

    private function printReport() {
        $operations = [
            "retrievePdf" => handler\routeHandler::userHandler_retrievePrintPdf(),
            "retrieveCsv" => handler\routeHandler::userHandler_retrievePrintCsv()
        ];

        return [
            "operations" => $this->normalizeActionAccess($operations, true)
        ];
    }

    private function retrievePrintReport() {
        \ob_start();
        $records = $this->logic->getUserByAppId();
        if (!\is_null($records)) {
            foreach ($records as $r) {
                $tmpProfile = $this->logic->getProfileById($r->getProfileIdentifier());
                if (!\is_null($tmpProfile)) {
                    $r->setProfileName($tmpProfile->getName());
                }
            }
        }
        require_once './template/kernel/user-print-tmpl.php';
        return \ob_get_clean();
    }

    private function retrieveCsvFile() {
        \ob_start();
        $records = $this->logic->getUserByAppId();
        if (!\is_null($records)) {
            foreach ($records as $r) {
                $tmpProfile = $this->logic->getProfileById($r->getProfileIdentifier());
                if (!\is_null($tmpProfile)) {
                    $r->setProfileName($tmpProfile->getName());
                }
            }
        }

        $df = \fopen("php://output", 'w');
        \fputcsv($df, ["NOMBRES", "USUARIO", "PERFIL", "EMAIL", "ACTIVO"], ";");
        foreach ($records as $r) {
            $tmp = $r->getActive() ? 'SI' : 'NO';
            \fputcsv($df, [$r->getFullName(), $r->getLogin(), $r->getProfileName(), $r->getEmail(), $tmp], ";");
        }
        \fclose($df);

        $this->forceFileDownloadHeader("reporte.csv");
        return ob_get_clean();
    }

    protected function routeAction($action) {
        switch ($action) {
            case handler\routeHandler::userHandler_initApp(): return $this->logic->initApp();
            case handler\routeHandler::userHandler_login(): return $this->logic->loginUser();
            case handler\routeHandler::userHandler_logout(): return $this->logic->logoutUser();
            case handler\routeHandler::userHandler_retrieveUserMenu(): return $this->logic->getAssignedMenuActionByProfileIdRootId();

            case handler\routeHandler::userHandler_listUser(): return $this->listUser();
            case handler\routeHandler::userHandler_retreiveListUser(): return $this->retrieveListUser();

            case handler\routeHandler::userHandler_addUser(): return $this->addUser();
            case handler\routeHandler::userHandler_editUser(): return $this->editUser();

            case handler\routeHandler::userHandler_addUserRetrieveProfileList():
            case handler\routeHandler::userHandler_editUserRetrieveProfileList(): return $this->retrieveProfileList();
            case handler\routeHandler::userHandler_addUserRetrieveDepartmentList():
            case handler\routeHandler::userHandler_editUserRetrieveDepartmentList(): return $this->retrieveDepartmentList();

            case handler\routeHandler::userHandler_saveNewUser():
            case handler\routeHandler::userHandler_updateUser(): return $this->logic->processUser();


            case handler\routeHandler::userHandler_print(): return $this->printReport();
            case handler\routeHandler::userHandler_retrievePrintPdf(): return $this->retrievePrintReport();
            case handler\routeHandler::userHandler_retrievePrintCsv(): return $this->retrieveCsvFile();
        }
    }

}

?>