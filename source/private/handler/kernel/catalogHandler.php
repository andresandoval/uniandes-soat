<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-17:42:23
 * Contact: andresandoval992@gmail.com
 *
 * catalogHandler, part of app
 */

namespace app\handler\kernel;

require_once "./handler/myHandler.php";
require_once "./businessLogic/kernelBL.php";

use app\handler;
use app\businessLogic;
use app\data\entities;

final class catalogHandler extends handler\myHandler {

    private $logic;

    public function __construct() {
        $this->logic = new businessLogic\kernelBL();
    }

    private function listCatalog() {
        $request = ["retrieveList" => handler\routeHandler::catalogHandler_retrieveList()];
        $batch = [
            handler\routeHandler::catalogHandler_activate(),
            handler\routeHandler::catalogHandler_desactivate(),
            handler\routeHandler::catalogHandler_recover(),
            handler\routeHandler::catalogHandler_remove(),
        ];

        $catalogTypes = $this->logic->getCatalogType();
        $catalogTypesArr = ["" => "Todos"];
        if (!\is_null($catalogTypes)) {
            foreach ($catalogTypes as $ct) {
                $catalogTypesArr[$ct->getType()] = $ct->getType();
            }
        }

        $filters = [
            "state" => $this->createFilterElement("Estado", ["" => "Todos", "0" => "Activo", "1" => "Inactivo", "2" => "En papelera"], "0"),
            "type" => $this->createFilterElement("Tipo", $catalogTypesArr, "")
        ];
        return [
            "request" => $request,
            "batch" => $this->normalizeActionAccess($batch, true),
            "filters" => $filters
        ];
    }

    private function retrieveListCatalog() {
        $data = $this->logic->getCatalog();
        $contextActions = [
            handler\routeHandler::catalogHandler_add(),
            handler\routeHandler::catalogHandler_edit(),
            handler\routeHandler::catalogHandler_activate(),
            handler\routeHandler::catalogHandler_desactivate(),
            handler\routeHandler::catalogHandler_recover(),
            handler\routeHandler::catalogHandler_remove()
        ];
        return $this->logic->generateList($data, \is_null($data) ? null : $this->normalizeActionAccess($contextActions));
    }

    private function addCatalog() {
        $catalogTypes = $this->logic->getCatalogType();
        $catalogTypesArr = [];
        if (!\is_null($catalogTypes)) {
            foreach ($catalogTypes as $ct) {
                $catalogTypesArr[$ct->getType()] = $ct->getType();
            }
        }
        $operations = [
            "process" => handler\routeHandler::catalogHandler_saveNew()
        ];

        $rowIdentifier = $this->logic->getIdentifiersFromPost(false);
        $currentRow = \is_null($rowIdentifier) ? null : $this->logic->getCatalogById($rowIdentifier);
        $ent = new entities\kernel\catalogEntity();
        if (!\is_null($currentRow)) {
            $ent->setType($currentRow->getType());
        }
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "catalogTypes" => $catalogTypesArr,
            "entity" => $ent->toArray()
        ];
    }

    private function editCatalog() {
        $catalogTypes = $this->logic->getCatalogType();
        $catalogTypesArr = [];
        if (!\is_null($catalogTypes)) {
            foreach ($catalogTypes as $ct) {
                $catalogTypesArr[$ct->getType()] = $ct->getType();
            }
        }
        $operations = [
            "process" => handler\routeHandler::catalogHandler_update()
        ];
        $ent = $this->logic->getCatalogByRowIdentifier();
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "catalogTypes" => $catalogTypesArr,
            "entity" => \is_null($ent) ? null : $ent->toArray()
        ];
    }

    protected function routeAction($action) {
        switch ($action) {
            case handler\routeHandler::catalogHandler_list(): return $this->listCatalog();
            case handler\routeHandler::catalogHandler_retrieveList(): return $this->retrieveListCatalog();

            case handler\routeHandler::catalogHandler_add(): return $this->addCatalog();
            case handler\routeHandler::catalogHandler_edit(): return $this->editCatalog();

            case handler\routeHandler::catalogHandler_saveNew():
            case handler\routeHandler::catalogHandler_update(): return $this->logic->processCatalog();

            case handler\routeHandler::catalogHandler_activate():
            case handler\routeHandler::catalogHandler_recover(): return $this->logic->changeCatalogState(self::APP_ACTIVE);
            case handler\routeHandler::catalogHandler_desactivate(): return $this->logic->changeCatalogState(self::APP_INACTIVE);
            case handler\routeHandler::catalogHandler_remove(): return $this->logic->changeCatalogState(self::APP_REMOVED);
        }
    }

}

?>