<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-17:42:23
 * Contact: andresandoval992@gmail.com
 *
 * departmentHandler, part of app
 */

namespace app\handler\kernel;

require_once "./handler/myHandler.php";
require_once "./businessLogic/kernelBL.php";

use app\handler;
use app\businessLogic;
use app\data\entities;

final class departmentHandler extends handler\myHandler {

    private $logic;

    public function __construct() {
        $this->logic = new businessLogic\kernelBL();
    }

    private function listDepartment() {
        $request = ["retrieveList" => handler\routeHandler::departmentHandler_retrieveListDepartment()];
        $batch = [
            handler\routeHandler::departmentHandler_addDepartment()
        ];
        $coordinations = $this->logic->getCoordination();
        $coordArray = ["" => "Todas", "-1" => "Ninguna"];
        if (!\is_null($coordinations)) {
            foreach ($coordinations as $c) {
                $coordArray[$c->getIdentifier()] = $c->getName();
            }
        }

        $filters = [
            "coordination" => $this->createFilterElement("Coordinacion", $coordArray, ""),
            "state" => $this->createFilterElement("Estado (!)", ["" => "Todos", "0" => "Activo", "1" => "Inactivo", "2" => "En papelera"], "0")
        ];
        return [
            "request" => $request,
            "batch" => $this->normalizeActionAccess($batch, true),
            "filters" => $filters
        ];
    }

    private function retrieveListDepartment() {
        $data = $this->logic->getDepartment();
        $contextActions = [
            handler\routeHandler::departmentHandler_addDepartment(),
            handler\routeHandler::departmentHandler_editDepartment()
        ];
        return $this->logic->generateList($data, \is_null($data) ? null : $this->normalizeActionAccess($contextActions));
    }

    private function addDepartament() {
        $operations = [
            "process" => handler\routeHandler::departmentHandler_saveNewDepartment(),
            "retrieveCoordinationList" => handler\routeHandler::departmentHandler_addDepartmentRetrieveCoordinationList()
        ];
        $ent = new entities\kernel\departmentEntity();
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray()
        ];
    }

    private function editDepartament() {
        $operations = [
            "process" => handler\routeHandler::departmentHandler_updateDepartment(),
            "retrieveCoordinationList" => handler\routeHandler::departmentHandler_editDepartmentRetrieveCoordinationList()
        ];
        $ent = $this->logic->getDepartmentByRowIdentifier();
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray()
        ];
    }

    private function retrieveCoordinationList() {
        $coordinations = $this->logic->getCoordination();
        $coordArray = [];
        if (!\is_null($coordinations)) {
            foreach ($coordinations as $c) {
                $coordArray[] = $c->toArray();
            }
        }
        return $this->logic->successEncode($coordArray);
    }

    protected function routeAction($action) {
        switch ($action) {
            case handler\routeHandler::departmentHandler_listDepartment(): return $this->listDepartment();
            case handler\routeHandler::departmentHandler_retrieveListDepartment(): return $this->retrieveListDepartment();

            case handler\routeHandler::departmentHandler_addDepartment(): return $this->addDepartament();
            case handler\routeHandler::departmentHandler_editDepartment(): return $this->editDepartament();

            case handler\routeHandler::departmentHandler_addDepartmentRetrieveCoordinationList():
            case handler\routeHandler::departmentHandler_editDepartmentRetrieveCoordinationList(): return $this->retrieveCoordinationList();

            case handler\routeHandler::departmentHandler_saveNewDepartment():
            case handler\routeHandler::departmentHandler_updateDepartment(): return $this->logic->processDepartment();
        }
    }

}

?>