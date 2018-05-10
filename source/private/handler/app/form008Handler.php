<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 03-feb-2016-20:13:20
 * Contact: andresandoval992@gmail.com
 *
 * form008Handler, part of soat
 */

namespace app\handler\app;

require_once "./handler/myHandler.php";
require_once "./businessLogic/appBL.php";

//require_once './resource/vendor/html2pdf_v4.03/html2pdf.class.php';

use app\handler;
use app\businessLogic;
use app\data\entities;

final class form008Handler extends handler\myHandler {

    private $logic;

    public function __construct() {
        $this->logic = new businessLogic\appBL();
    }

    private function addNewForm008() {
        /* @var $insurance entities\kernel\catalogEntity[] */
        $operations = [
            "process" => handler\routeHandler::form008Handler_saveNew(),
            "retrievePatientList" => handler\routeHandler::form008Handler_addNewRetrievePatientList(),
            "addPatient" => handler\routeHandler::patientHandler_addNew()
        ];
        $ent = new entities\app\form008Entity();
        $kLogic = new businessLogic\kernelBL();
        $insurance = $kLogic->getCatalogByType("FORM008_INSURANCE");
        //$insuranceArr = [NULL => "Ninguno"];

        if (!\is_null($insurance)) {
            foreach ($insurance as $i) {
                $insuranceArr[$i->getName()] = $i->getName();
            }
        }
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray(),
            "insuranceList" => $insuranceArr
        ];
    }

    private function addNewRetrievePatientList() {
        $patients = $this->logic->getActivePatient();
        $patArr = [];
        if (!\is_null($patients)) {
            foreach ($patients as $p) {
                $patArr[] = $p->toArray();
            }
        }
        return $this->logic->successEncode($patArr);
    }

    private function listForm008() {
        $request = ["retrieveList" => handler\routeHandler::form008Handler_retrieveList()];
        $batch = [];
        $filters = [
            "state" => $this->createFilterElement("Estado (!)", ["" => "Todos", "0" => "Activo", "1" => "Inactivo", "2" => "En papelera"], "0")
        ];
        return [
            "request" => $request,
            "batch" => $this->normalizeActionAccess($batch, true),
            "filters" => $filters
        ];
    }

    private function saveForm008() {
        $identifier = $this->logic->processForm008();
        $operations = [
            "retrievePdf" => handler\routeHandler::form008Handler_retrieveSavePdf()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => ["identifier" => $identifier]
        ];
    }

    private function retrieveForm008List() {
        $data = $this->logic->getForm008();
        $contextActions = null;
        if (!\is_null($data)) {
            $contextActions = $this->normalizeActionAccess([
                handler\routeHandler::form008Handler_print(),
                handler\routeHandler::form008Handler_tracing(),
                handler\routeHandler::form008Handler_printObjetion()
            ]);
        }
        return $this->logic->generateList($data, $contextActions);
    }

    private function printForm008() {
        $identifier = $this->logic->getIdentifiersFromPost(false);
        $operations = [
            "retrievePdf" => handler\routeHandler::form008Handler_printRetrievePdf()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => ["identifier" => $identifier]
        ];
    }

    private function retrieveForm008Pdf() {
        $identifier = \filter_input(\INPUT_GET, "\$\$identifier", \FILTER_DEFAULT);
        $form008 = $this->logic->getForm008ById($identifier);
        if (\is_null($form008)) {
            return 'Error al recuperar el formulario';
        }
        $patient = $this->logic->getPatientById2($form008->getPatientIdentifier());
        if (\is_null($form008)) {
            return 'Error al recuperar el paciente';
        }
        \ob_start();
        require_once './template/app/form-008-print-tmpl.php';
        return \ob_get_clean();
    }

    private function tracingForm008() {
        $form008 = $this->logic->getForm008ById();
        $patient = $this->logic->getPatientById2($form008->getPatientIdentifier());


        $operations = [
            "retrieve_list" => handler\routeHandler::form008Handler_retrieveTracingLists(),
            "ambulance" => handler\routeHandler::form008Handler_addAmbulanceUse(),
            "oxygen" => handler\routeHandler::form008Handler_addOxygenUse(),
            "process_assigned_doctor" => handler\routeHandler::form008Handler_processAssignedDoctor(),
            "generate_fur" => handler\routeHandler::form008Handler_generateFur(),
            "view_fur" => handler\routeHandler::form008Handler_viewFur(),
            "generate_expense_form" => handler\routeHandler::form008Handler_generateExpenseForm(),
            "view_expense_form" => handler\routeHandler::form008Handler_viewExpenseForm(),
            "update_objection" => handler\routeHandler::form008Handler_updateObjection(),
            "view_objection" => handler\routeHandler::form008Handler_viewObjection()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => [
                "form008" => $form008->toArray(),
                "patient" => $patient->toArray()
            ]
        ];
    }

    private function retrieveTracingLists() {

        $form008Identifier = (int) $this->logic->getDataFromPost('form008_identifier');
        if ($form008Identifier <= 0) {
            return $this->logic->failEncode("Error de parametros de entrada!!");
        }
        //AMBULANCE
        $ambulanceUse = $this->logic->getAmbulanceUseByForm008Identifier($form008Identifier);
        $ambulanceUseArr = [];
        if (!\is_null($ambulanceUse)) {
            foreach ($ambulanceUse as $au) {
                $ambulanceUseArr[] = $au->toArray();
            }
        }

        //OXYGEN
        $oxygenUse = $this->logic->getOxygenUseByForm008Identifier($form008Identifier);
        $oxygenUseArr = [];
        if (!\is_null($oxygenUse)) {
            foreach ($oxygenUse as $ou) {
                $oxygenUseArr[] = $ou->toArray();
            }
        }

        //DOCTOR LIST
        $kernelBl = new businessLogic\kernelBL();
        $tmpCatalog = NULL;
        $doctor = $this->logic->getAllDoctor();
        $doctorArr = [];
        if (!\is_null($doctor)) {
            foreach ($doctor as $d) {
                $tmpCatalog = $kernelBl->getCatalogById($d->getSpecialityIdentifier());
                $d->setSpecialityName(\is_null($tmpCatalog) ? 'S/N' : $tmpCatalog->getName());
                $doctorArr[] = $d->toArray();
            }
        }

        //DOCTOR IDENTIFIER
        $doctorId = $this->logic->getDoctorByForm008Identifier($form008Identifier);

        //FUR
        $fur = $this->logic->getFurByForm008Identifier($form008Identifier);

        //EXPENSE_FORM
        $expenseForm = $this->logic->getExpenseFormByForm008Identifier($form008Identifier);

        //OBJECTION
        $objection = $this->logic->getObjectionByForm008Identifier($form008Identifier);
//        if (\is_null($objection)) {
//            $objection = new entities\app\objectionEntity();
//            $objection->setForm008Identifier($form008Identifier);
//        }
        //insurance
        $form008 = $this->logic->getForm008ById($form008Identifier);

        return $this->logic->successEncode([
                    "ambulance_use" => $ambulanceUseArr,
                    "oxygen_use" => $oxygenUseArr,
                    "doctor" => $doctorArr,
                    "doctorIdentifier" => \is_null($doctorId) ? null : $doctorId->getIdentifier(),
                    "fur" => \is_null($fur) ? null : "Formulario unico de reclamaciones generado el <span class='label'>" . $fur->getLastUpdateDate(true) . '</span>',
                    "expense_form" => \is_null($expenseForm) ? null : $expenseForm->toArray(),
                    "objection" => is_null($objection) ? null : $objection->toArray(),
                    "insurance" => is_null($form008) ? "SEGURO" : $form008->getInsurance()
        ]);
    }

    private function addAmbulanceUse() {

        $operations = [
            "process" => handler\routeHandler::form008Handler_processAmbulanceUse(),
            "retrieveAmbulanceUseTariffList" => handler\routeHandler::form008Handler_retrieveAmbulanceUseTariffList()
        ];
        $ent = new entities\app\ambulanceUseEntity();
        $ent->setForm008Identifier((int) $this->logic->getDataFromPost('form008_identifier'));
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray()
        ];
    }

    private function addOxygenUse() {

        $operations = [
            "process" => handler\routeHandler::form008Handler_processOxygenUse()
        ];
        $oxygenTariff = $this->logic->getOxygenUseTariff();

        $ent = new entities\app\oxygenUseEntity();
        if (!\is_null($oxygenTariff)) {
            $ent->setOxygenCode($oxygenTariff->getCode());
            $ent->setOxygenDescription($oxygenTariff->getDescription());
            $ent->setUvr($oxygenTariff->getUvr());
            $ent->setFcm($oxygenTariff->getFcm());
            $ent->setValue($oxygenTariff->getValue());
        }
        $ent->setForm008Identifier((int) $this->logic->getDataFromPost('form008_identifier'));
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray()
        ];
    }

    private function retrieveAmbulanceUseTariffList() {
        /* @var $tarif tariffEntity */

        $tarif = $this->logic->getAmbulanceUseTariff();
        $tArr = [];
        if (!\is_null($tarif)) {
            foreach ($tarif as $t) {
                $tArr[] = $t->toArray();
            }
        }
        return $this->logic->successEncode($tArr);
    }

    private function processForm008HasDoctor() {

        $form008Identifier = (int) $this->logic->getDataFromPost('form008_identifier');
        $doctorIdentifier = (int) $this->logic->getDataFromPost('doctor_identifier');
        return $this->logic->processForm008HasDoctor($form008Identifier, $doctorIdentifier);
    }

    private function generateFur() {
        $operations = [
            "process" => handler\routeHandler::form008Handler_processFur(),
            "retrieveDoctorList" => handler\routeHandler::form008Handler_retrieveDoctorList()
        ];
        $ent = new entities\app\furEntity();
        $f008 = $this->logic->getForm008ById((int) $this->logic->getDataFromPost('form008_identifier'));
        $ent->setForm008Identifier((int) $this->logic->getDataFromPost('form008_identifier'));
        $ent->sethealth_center_history_number("H-" . $f008->getPatientIdentifier());
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray()
        ];
    }

    private function retrieveFurDoctorList() {
        $doctor = $this->logic->getAllDoctor();
        $dArr = [];
        if (!\is_null($doctor)) {
            foreach ($doctor as $t) {
                $dArr[] = $t->toArray();
            }
        }
        return $this->logic->successEncode($dArr);
    }

    private function printFur() {
        $identifier = $this->logic->getDataFromPost("form008_identifier");
        $operations = [
            "retrievePdf" => handler\routeHandler::form008Handler_retrieveViewFurPdf()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => ["identifier" => $identifier]
        ];
    }

    private function retrieveFurPdf() {
        \ob_start();
        $identifier = \filter_input(\INPUT_GET, "\$\$identifier", \FILTER_DEFAULT);
        $form008 = $this->logic->getForm008ById((int) $identifier);
        $patient = $this->logic->getPatientById2($form008->getPatientIdentifier());

        //$patientCity = $this->logic->
        $fur = $this->logic->getFurByForm008Identifier($identifier);
        $doctor1 = $this->logic->getDoctorById($fur->getInsuredDeadInChargeDoctor(true));
        $doctor2 = $this->logic->getDoctorById($fur->getInsuredDeadAuthorizerDoctor(true));
        require_once './template/app/fur-print-tmpl.php';
        return \ob_get_clean();
    }

    private function generateExpenseForm() {
        $operations = [
            "process" => handler\routeHandler::form008Handler_processExpenseForm(),
            "retrieveTarifOrMedicineList" => handler\routeHandler::form008Handler_retrieveTarifOrMedicineList()
        ];
        $ent = new entities\app\expenseFormEntity();
        $fur = $this->logic->getFurByForm008Identifier((int) $this->logic->getDataFromPost('form008_identifier'));
        $ent->setForm008Identifier((int) $this->logic->getDataFromPost('form008_identifier'));
        $ent->setDiagnostic($fur->getHealthCenterAdmisionReport());

        $form008 = $this->logic->getForm008ById((int) $this->logic->getDataFromPost('form008_identifier'));

        $patient = $this->logic->getPatientById($form008->getPatientIdentifier());
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray(),
            "insurance" => $form008->getInsurance()
        ];
    }

    private function retrieveTarifOrMedicineList() {
        $tariff = $this->logic->getTariffAsMedicine();
        $medicine = $this->logic->getAllMedicine();
        $tariffArr = [];
        $medicineArr = [];
        if (!\is_null($tariff)) {
            foreach ($tariff as $t) {
                $tariffArr[] = $t->toArray();
            }
        }
        if (!\is_null($medicine)) {
            foreach ($medicine as $m) {
                $medicineArr[] = $m->toArray();
            }
        }
        return $this->logic->successEncode([
                    "tariff" => $tariffArr,
                    "medicine" => $medicineArr
        ]);
    }

    private function printExpenseForm() {
        $identifier = $this->logic->getDataFromPost("form008_identifier");
        $operations = [
            "retrievePdf" => handler\routeHandler::form008Handler_retrieveViewExpenseFormPdf()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => ["identifier" => $identifier]
        ];
    }

    private function retrieveExpenseFormPdf() {
        \ob_start();
        $identifier = \filter_input(\INPUT_GET, "\$\$identifier", \FILTER_DEFAULT);
        $form008 = $this->logic->getForm008ById((int) $identifier);
        $patient = $this->logic->getPatientById($form008->getPatientIdentifier());
        $fur = $this->logic->getFurByForm008Identifier($identifier);
        $expenseForm = $this->logic->getExpenseFormByForm008Identifier($identifier);

        $expenseFormDetail = \is_null($expenseForm) ? null : $this->logic->getAllExpenseFormDetail($expenseForm->getIdentifier());

        $__detailArray = [];

        if (!\is_null($expenseFormDetail)) {
            foreach ($expenseFormDetail as $efd) {
                $__detailArray[$efd->getItemType()][] = [
                    "item_code" => $efd->getItemCode(),
                    "item_description" => $efd->getItemDescription(),
                    "quantity" => $efd->getQuantity(),
                    "unit_value" => $efd->getUnitValue(),
                    "total_value" => $efd->getTotalValue()
                ];
            }
        }
        require_once './template/app/expense-form-print-tmpl.php';
//        echo '<pre>';
//        print_r($__detailArray);
//        echo '</pre>';
        return \ob_get_clean();
    }

    private function updateObjection() {
        $operations = [
            "process" => handler\routeHandler::form008Handler_processObjection()
        ];
        $form008Identifier = (int) $this->logic->getDataFromPost('form008_identifier');
        $ent = $this->logic->getObjectionByForm008Identifier($form008Identifier);
        if (\is_null($ent)) {
            $ent = new entities\app\objectionEntity();
            $ent->setForm008Identifier($form008Identifier);
        }
        
        $expenseForm = $this->logic->getExpenseFormByForm008Identifier($form008Identifier);
        
        $detail = $this->logic->getAllExpenseFormDetail($expenseForm->getIdentifier());
        
        $detArr = [];
        foreach ($detail as $d) {
            $detArr[] = $d->toArray();
        }

        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray(),
            "detail" => $detArr,
            "valorPlanillado" => $expenseForm->getTotal()
        ];
    }

    private function viewObjection() {
        $identifier = $this->logic->getDataFromPost("form008_identifier");
        $operations = [
            "retrievePdf" => handler\routeHandler::form008Handler_retrieveViewObjectionPdf()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => ["identifier" => $identifier]
        ];
    }

    private function retrieveObjectionPdf() {
        \ob_start();
        $form008Identifier = \filter_input(\INPUT_GET, "\$\$identifier", \FILTER_DEFAULT);
        $form008 = $this->logic->getForm008ById($form008Identifier);
        $objection = $this->logic->getObjectionByForm008Identifier($form008Identifier);
        
        if (\is_null($objection)) {
            echo "<h3>No hay datos para mostrar...!!!</h3>";
        } else {
            $fur = $this->logic->getFurByForm008Identifier($form008Identifier);
        $expenseForm = $this->logic->getExpenseFormByForm008Identifier($form008Identifier);
        $patient = $this->logic->getPatientById2($form008->getPatientIdentifier());        
        $detail = $this->logic->getAllExpenseFormDetail($expenseForm->getIdentifier());
            
            require_once './template/app/objection-print-tmpl.php';
        }
        return \ob_get_clean();
    }

    private function printObjection() {
        $identifier = $this->logic->getIdentifiersFromPost(false);
        $operations = [
            "retrievePdf" => handler\routeHandler::form008Handler_retrievePrintObjetionPdf()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => ["identifier" => $identifier]
        ];
    }

    protected function routeAction($action) {

        switch ($action) {
            case handler\routeHandler::form008Handler_list(): return $this->listForm008();
            case handler\routeHandler::form008Handler_retrieveList(): return $this->retrieveForm008List();

            case handler\routeHandler::form008Handler_addNew(): return $this->addNewForm008();
            case handler\routeHandler::form008Handler_addNewRetrievePatientList(): return $this->addNewRetrievePatientList();
            case handler\routeHandler::form008Handler_saveNew(): return $this->saveForm008();

            case handler\routeHandler::form008Handler_print(): return $this->printForm008();
            case handler\routeHandler::form008Handler_retrieveSavePdf():
            case handler\routeHandler::form008Handler_printRetrievePdf(): return $this->retrieveForm008Pdf();

            case handler\routeHandler::form008Handler_tracing(): return $this->tracingForm008();
            case handler\routeHandler::form008Handler_retrieveTracingLists(): return $this->retrieveTracingLists();

            case handler\routeHandler::form008Handler_addAmbulanceUse(): return $this->addAmbulanceUse();
            case handler\routeHandler::form008Handler_retrieveAmbulanceUseTariffList(): return $this->retrieveAmbulanceUseTariffList();
            case handler\routeHandler::form008Handler_processAmbulanceUse(): return $this->logic->processAmbulanceUse();

            case handler\routeHandler::form008Handler_addOxygenUse(): return $this->addOxygenUse();
            case handler\routeHandler::form008Handler_processOxygenUse(): return $this->logic->processOxygenUse();

            case handler\routeHandler::form008Handler_processAssignedDoctor(): return $this->processForm008HasDoctor();

            case handler\routeHandler::form008Handler_generateFur(): return $this->generateFur();
            case handler\routeHandler::form008Handler_retrieveDoctorList(): return $this->retrieveFurDoctorList();
            case handler\routeHandler::form008Handler_processFur(): return $this->logic->processFur();

            case handler\routeHandler::form008Handler_viewFur(): return $this->printFur();
            case handler\routeHandler::form008Handler_retrieveViewFurPdf():return $this->retrieveFurPdf();

            case handler\routeHandler::form008Handler_generateExpenseForm(): return $this->generateExpenseForm();
            case handler\routeHandler::form008Handler_retrieveTarifOrMedicineList(): return $this->retrieveTarifOrMedicineList();
            case handler\routeHandler::form008Handler_processExpenseForm(): return $this->logic->processExpenseForm();

            case handler\routeHandler::form008Handler_viewExpenseForm(): return $this->printExpenseForm();
            case handler\routeHandler::form008Handler_retrieveViewExpenseFormPdf():return $this->retrieveExpenseFormPdf();

            case handler\routeHandler::form008Handler_updateObjection(): return $this->updateObjection();
            case handler\routeHandler::form008Handler_processObjection(): return $this->logic->processObjection();

            case handler\routeHandler::form008Handler_viewObjection(): return $this->viewObjection();
            case handler\routeHandler::form008Handler_retrievePrintObjetionPdf() :
            case handler\routeHandler::form008Handler_retrieveViewObjectionPdf() :return $this->retrieveObjectionPdf();


            case handler\routeHandler::form008Handler_printObjetion(): return $this->printObjection();
        }
    }

}

?>