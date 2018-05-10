<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-17:42:23
 * Contact: andresandoval992@gmail.com
 *
 * actionHandler, part of app
 */

namespace app\handler\kernel;

require_once "./handler/myHandler.php";
require_once "./businessLogic/kernelBL.php";

use app\handler;
use app\businessLogic;
use app\data\entities;

final class actionHandler extends handler\myHandler {

    private $logic;

    public function __construct() {
        $this->logic = new businessLogic\kernelBL();
    }

    private function addAction() {
        $operations = [
            "process" => handler\routeHandler::actionHandler_saveNewAction(),
            "retrieveRootList" => handler\routeHandler::actionHandler_addActionRetrieveRootList(),
            "retrieveIconList" => handler\routeHandler::actionHandler_addActionRetrieveIconList()
        ];
        $__rootIdentifier__ = $this->logic->getIdentifiersFromPost(false);
        $ent = new entities\kernel\actionEntity();
        $ent->setRootIdentifier($__rootIdentifier__);
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray()
        ];
    }

    private function editAction() {
        /* @var $ent entities\kernel\actionEntity */
        $operations = [
            "process" => handler\routeHandler::actionHandler_updateAction(),
            "retrieveRootList" => handler\routeHandler::actionHandler_editActionRetrieveRootList(),
            "retrieveIconList" => handler\routeHandler::actionHandler_editActionRetrieveIconList()
        ];
        $ent = $this->logic->getActionByRowIdentifier();
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => \is_null($ent) ? null : $ent->toArray()
        ];
    }

    private function duplicateAction() {
        /* @var $ent entities\kernel\actionEntity */
        $operations = [
            "process" => handler\routeHandler::actionHandler_saveDuplicateAction(),
            "retrieveRootList" => handler\routeHandler::actionHandler_duplicateActionRetrieveRootList(),
            "retrieveIconList" => handler\routeHandler::actionHandler_duplicateActionRetrieveIconList()
        ];
        $ent = $this->logic->getActionByRowIdentifier();
        $ent->setIdentifier(null);
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => \is_null($ent) ? null : $ent->toArray()
        ];
    }

    private function listAction() {
        $request = ["retrieveList" => handler\routeHandler::actionHandler_retrieveListAction()];
        $batch = [
            handler\routeHandler::actionHandler_addAction(),
            handler\routeHandler::actionHandler_generatePhpActionCode(),
            handler\routeHandler::actionHandler_activateAction(),
            handler\routeHandler::actionHandler_removeAction()
        ];
        $filters = [
            "type" => $this->createFilterElement("Tipo", ["" => "Todos", "0" => "Etiqueta", "1" => "Acción", "2" => "Dependencia"], ""),
            "access" => $this->createFilterElement("Acceso", ["" => "Todos", "0" => "Privado", "1" => "Registrado","2" => "Heredado", "3" => "Público"], ""),
            "show_in_menu" => $this->createFilterElement("En menú", ["" => "Todos", "1" => "Si", "0" => "No"], ""),
            "run_mode" => $this->createFilterElement("Modo de ejecución", ["" => "Todos", "0" => "Pestaña", "1" => "Dialogo", "2" => "Oculto"], ""),
            "state" => $this->createFilterElement("Estado (!)", ["" => "Todos", "0" => "Activo", "1" => "Inactivo", "2" => "En papelera"], "0")
        ];
        return [
            "request" => $request,
            "batch" => $this->normalizeActionAccess($batch, true),
            "filters" => $filters
        ];
    }

    private function rootList() {
        /* @var $a \app\data\entities\kernel\actionEntity */
        $actions = $this->logic->getActionByAppId();
        $arrReturn = [];
        if (!\is_null($actions)) {
            foreach ($actions as $a) {
                $arrReturn[] = $a->toArray();
            }
        }
        return $this->logic->successEncode($arrReturn);
    }

    private function retrieveListAction() {
        $data = $this->logic->getAction();
        $contextActions = [
            handler\routeHandler::actionHandler_addAction(),
            handler\routeHandler::actionHandler_editAction(),
            handler\routeHandler::actionHandler_generatePhpFullCode(),
            handler\routeHandler::actionHandler_duplicateAction(),
            handler\routeHandler::actionHandler_activateAction(),
            handler\routeHandler::actionHandler_desactivateAction(),
            handler\routeHandler::actionHandler_removeAction(),
            handler\routeHandler::actionHandler_recoverAction()
        ];
        return $this->logic->generateList($data, \is_null($data) ? null : $this->normalizeActionAccess($contextActions));
    }

    private function generatePhpFullCode() {
        /* @var $__action__ entities\kernel\actionEntity */
        $__action__ = $this->logic->getActionByRowIdentifier();
        $__innerCode__ = $__action__->getHandlerCode() . $__action__->getActionCode();

        return entities\kernel\actionEntity::getClassCode($__innerCode__);
    }

    private function generatePhpActionCode() {
        /* @var $__a__ entities\kernel\actionEntity */
        $__actions__ = $this->logic->getActionByRowIdentifier(true);
        $__innerCode__ = "";
        foreach ($__actions__ as $__a__) {
            $__innerCode__ .= $__a__->getActionCode();
        }
        return entities\kernel\actionEntity::getClassCode($__innerCode__);
    }

    protected function routeAction($action) {
        switch ($action) {

            case handler\routeHandler::actionHandler_addAction(): return $this->addAction();
            case handler\routeHandler::actionHandler_editAction(): return $this->editAction();
            case handler\routeHandler::actionHandler_duplicateAction(): return $this->duplicateAction();

            case handler\routeHandler::actionHandler_addActionRetrieveRootList():
            case handler\routeHandler::actionHandler_editActionRetrieveRootList():
            case handler\routeHandler::actionHandler_duplicateActionRetrieveRootList(): return $this->rootList();

            case handler\routeHandler::actionHandler_addActionRetrieveIconList():
            case handler\routeHandler::actionHandler_editActionRetrieveIconList():
            case handler\routeHandler::actionHandler_duplicateActionRetrieveIconList(): return $this->logic->successEncode($this->getTemplate("kernel/font-awesome-icons.json"));

            case handler\routeHandler::actionHandler_saveNewAction():
            case handler\routeHandler::actionHandler_saveDuplicateAction(): return $this->logic->saveAction();
            case handler\routeHandler::actionHandler_updateAction(): return $this->logic->updateAction();

            case handler\routeHandler::actionHandler_listAction(): return $this->listAction();
            case handler\routeHandler::actionHandler_retrieveListAction(): return $this->retrieveListAction();

            case handler\routeHandler::actionHandler_generatePhpFullCode(): return $this->generatePhpFullCode();
            case handler\routeHandler::actionHandler_generatePhpActionCode(): return $this->generatePhpActionCode();

            case handler\routeHandler::actionHandler_activateAction(): return $this->logic->changeActionState(self::APP_ACTIVE);
            case handler\routeHandler::actionHandler_desactivateAction(): return $this->logic->changeActionState(self::APP_INACTIVE);
            case handler\routeHandler::actionHandler_removeAction(): return $this->logic->changeActionState(self::APP_REMOVED);
            case handler\routeHandler::actionHandler_recoverAction(): return $this->logic->changeActionState(self::APP_ACTIVE);
        }
    }

}

?>