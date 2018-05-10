<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 03-feb-2016-20:13:20
 * Contact: andresandoval992@gmail.com
 *
 * patientHandler, part of soat
 */

namespace app\handler\app;

require_once "./handler/myHandler.php";
require_once "./businessLogic/appBL.php";

use app\handler;
use app\businessLogic;
use app\data\entities;

final class doctorHandler extends handler\myHandler {

    private $logic;

    public function __construct() {
        $this->logic = new businessLogic\appBL();
    }

    private function listDoctor() {
        $request = ["retrieveList" => handler\routeHandler::doctorHandler_retrieveList()];
        $batch = [
//            handler\routeHandler::actionHandler_addAction(),
//            handler\routeHandler::actionHandler_generatePhpActionCode(),
//            handler\routeHandler::actionHandler_activateAction(),
//            handler\routeHandler::actionHandler_removeAction()
        ];
        $filters = [
            "state" => $this->createFilterElement("Estado (!)", ["" => "Todos", "0" => "Activo", "1" => "Inactivo", "2" => "En papelera"], "0")
        ];
        return [
            "request" => $request,
            "batch" => $this->normalizeActionAccess($batch, true),
            "filters" => $filters
        ];
    }

    private function retrieveDoctorList() {
        $data = $this->logic->getDoctor();
        $contextActions = null;
        if (!\is_null($data)) {
            $contextActions = $this->normalizeActionAccess([
                handler\routeHandler::doctorHandler_add(),
                handler\routeHandler::doctorHandler_edit()
            ]);
        }
        return $this->logic->generateList($data, $contextActions);
    }

    private function addNewDoctor() {
        $operations = [
            "process" => handler\routeHandler::doctorHandler_save()
        ];
        $ent = new entities\app\doctorEntity();
        $kl = new businessLogic\kernelBL();

        $especialidad = $kl->getCatalogByType("DOCTOR_SPECIALTY");
        $esrr = [];
        foreach ($especialidad as $e) {
            $esrr[$e->getIdentifier()] = $e->getName();
        }

        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray(),
            "specialities" => $esrr
        ];
    }

    private function editDoctor() {
        /* @var $ent entities\kernel\actionEntity */
        $operations = [
            "process" => handler\routeHandler::doctorHandler_update()
        ];
        $ent = $this->logic->getDoctorById();
        $kl = new businessLogic\kernelBL();

        $especialidad = $kl->getCatalogByType("DOCTOR_SPECIALTY");
        $esrr = [];
        foreach ($especialidad as $e) {
            $esrr[$e->getIdentifier()] = $e->getName();
        }

        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray(),
            "specialities" => $esrr
        ];
    }

    protected function routeAction($action) {

        switch ($action) {
            case handler\routeHandler::doctorHandler_list(): return $this->listDoctor();
            case handler\routeHandler::doctorHandler_retrieveList(): return $this->retrieveDoctorList();

            case handler\routeHandler::doctorHandler_save():
            case handler\routeHandler::doctorHandler_update(): return $this->logic->processDoctor();

            case handler\routeHandler::doctorHandler_add(): return $this->addNewDoctor();
            case handler\routeHandler::doctorHandler_edit(): return $this->editDoctor();
        }
    }

}

?>