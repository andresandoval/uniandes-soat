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

final class patientHandler extends handler\myHandler {

    private $logic;

    public function __construct() {
        $this->logic = new businessLogic\appBL();
    }

    private function listPatient() {
        $request = ["retrieveList" => handler\routeHandler::patientHandler_retrieveList()];
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

    private function retrievePatientList() {
        $data = $this->logic->getPatient();
        $contextActions = null;
        if (!\is_null($data)) {
            $contextActions = $this->normalizeActionAccess([
                handler\routeHandler::patientHandler_addNew(),
                handler\routeHandler::patientHandler_edit()
            ]);
        }
        return $this->logic->generateList($data, $contextActions);
    }

    private function addNewPatient() {
        $operations = [
            "process" => handler\routeHandler::patientHandler_saveNew()
        ];
        $ent = new entities\app\patientEntity();
        $kl = new businessLogic\kernelBL();

        //NACIONALIDAD
        $nacionality = $kl->getCatalogByType("NACIONALITY");
        $narr = [];
        foreach ($nacionality as $n) {
            $narr[$n->getName()] = $n->getName();
        }

        //GENERO
        $gender = $kl->getCatalogByType("SEX");
        $garr = [];
        foreach ($gender as $g) {
            $garr[$g->getValue()] = $g->getName();
        }

        //GRUPO CULTURAL
        $grupoCultural = $kl->getCatalogByType("CULTURAL_GROUP");
        $gcArr = [];
        foreach ($grupoCultural as $gc) {
            $gcArr[$gc->getName()] = $gc->getName();
        }

        //ESTADO CIVIL
        $estadoCivil = $kl->getCatalogByType("CIVIL_STATUS");
        $ecArr = [];
        foreach ($estadoCivil as $ec) {
            $ecArr[$ec->getName()] = $ec->getName();
        }

        //INSTRUCCION
        $instruction = $kl->getCatalogByType("INSTRUCTION_LEVEL");
        $iarr = [];
        foreach ($instruction as $i) {
            $iarr[$i->getName()] = $i->getName();
        }

        //SEGURO
        $insurance = $kl->getCatalogByType("FORM008_INSURANCE");
        $insarr = [];
        foreach ($insurance as $ins) {
            $insarr[$ins->getName()] = $ins->getName();
        }
        //OCUPACION
        $ocupation = $kl->getCatalogByType("OCUPATION");
        $oArr = [];
        foreach ($ocupation as $o) {
            $oArr[$o->getName()] = $o->getName();
        }

        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray(),
            "nacionality" => $narr,
            "gender" => $garr,
            "cultural_group" => $gcArr,
            "civil_state" => $ecArr,
            "instruction_level" => $iarr,
            "insurance_type" => $insarr,
            "ocupation" => $oArr
        ];
    }

    private function editPatient() {
        /* @var $ent entities\kernel\actionEntity */
        $operations = [
            "process" => handler\routeHandler::patientHandler_update()
        ];
        $ent = $this->logic->getPatientById();
        $kl = new businessLogic\kernelBL();

        //NACIONALIDAD
        $nacionality = $kl->getCatalogByType("NACIONALITY");
        $narr = [];
        foreach ($nacionality as $n) {
            $narr[$n->getName()] = $n->getName();
        }

        //GENERO
        $gender = $kl->getCatalogByType("SEX");
        $garr = [];
        foreach ($gender as $g) {
            $garr[$g->getValue()] = $g->getName();
        }

        //GRUPO CULTURAL
        $grupoCultural = $kl->getCatalogByType("CULTURAL_GROUP");
        $gcArr = [];
        foreach ($grupoCultural as $gc) {
            $gcArr[$gc->getName()] = $gc->getName();
        }

        //ESTADO CIVIL
        $estadoCivil = $kl->getCatalogByType("CIVIL_STATUS");
        $ecArr = [];
        foreach ($estadoCivil as $ec) {
            $ecArr[$ec->getName()] = $ec->getName();
        }

        //INSTRUCCION
        $instruction = $kl->getCatalogByType("INSTRUCTION_LEVEL");
        $iarr = [];
        foreach ($instruction as $i) {
            $iarr[$i->getName()] = $i->getName();
        }

        //SEGURO
        $insurance = $kl->getCatalogByType("FORM008_INSURANCE");
        $insarr = [];
        foreach ($insurance as $ins) {
            $insarr[$ins->getName()] = $ins->getName();
        }
        //OCUPACION
        $ocupation = $kl->getCatalogByType("OCUPATION");
        $oArr = [];
        foreach ($ocupation as $o) {
            $oArr[$o->getName()] = $o->getName();
        }
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => \is_null($ent) ? null : $ent->toArray(),
            "nacionality" => $narr,
            "gender" => $garr,
            "cultural_group" => $gcArr,
            "civil_state" => $ecArr,
            "instruction_level" => $iarr,
            "insurance_type" => $insarr,
            "ocupation" => $oArr
        ];
    }

    protected function routeAction($action) {

        switch ($action) {
            case handler\routeHandler::patientHandler_list(): return $this->listPatient();
            case handler\routeHandler::patientHandler_retrieveList(): return $this->retrievePatientList();

            case handler\routeHandler::patientHandler_saveNew():return $this->logic->processPatient(true);
            case handler\routeHandler::patientHandler_update(): return $this->logic->processPatient();

            case handler\routeHandler::patientHandler_addNew(): return $this->addNewPatient();
            case handler\routeHandler::patientHandler_edit(): return $this->editPatient();
        }
    }

}

?>