<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * cageDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/patientEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class patientDA extends dataAccess\myDA {

    /**
     *
     * @param \app\data\entities\listParametersEntity $parameters
     * @return app\patientEntity[]
     */
    public function getPatient($parameters) {
        return $this->castVectorQuery($this->query("select * from soat.get_patient({$parameters->getQueryString()})"));
    }

    /**
     *
     * @param app\patientEntity $patient
     * @return bool
     */
    public function processPatient($patient) {
        return (bool) $this->castScalarQuery($this->query("select soat.process_patient('{$patient->getIdentificacion()}'::varchar(64), '{$patient->getPrimerNombre()}'::varchar(64), '{$patient->getSegundoNombre()}'::varchar(64), '{$patient->getApellidoMaterno()}'::varchar(64), '{$patient->getApellidoPaterno()}'::varchar(64), '{$patient->getDireccion()}'::varchar(128), '{$patient->getBarrio()}'::varchar(64), '{$patient->getParroquia()}'::varchar(64), '{$patient->getCanton()}'::varchar(64), '{$patient->getProvincia()}'::varchar(64), '{$patient->getZona()}'::varchar(64), '{$patient->getTelefono()}'::varchar(64), '{$patient->getFechaNacimiento()}'::date, '{$patient->getLugarNacimiento()}'::varchar(64), '{$patient->getNacionalidad()}'::varchar(64), '{$patient->getGrupoCultural()}'::varchar(64), '{$patient->getEdad()}'::int2, '{$patient->getGenero()}'::char(1), '{$patient->getEstadoCivil()}'::varchar(64), '{$patient->getInstruccion()}'::varchar(64), '{$patient->getFechaAdmision()}'::date, '{$patient->getOcupacion()}'::varchar(64), '{$patient->getEmpresaTrabajo()}'::varchar(64), '{$patient->getTipoSeguroSalud()}'::varchar(64), '{$patient->getReferidoDe()}'::varchar(64), '{$patient->getContactoEmergencia()}'::varchar(64), '{$patient->getParentezcoContactoEmergencia()}'::varchar(64), '{$patient->getDireccionContactoEmergencia()}'::varchar(128), '{$patient->getTelefonoContactoEmergencia()}'::varchar(64), '{$patient->getDescription()}'::text, '{$patient->getLastUpdater()}'::int4)::int4"));
    }

    /**
     *
     * @param string $identificacion
     * @return app\patientEntity
     */
    public function getPatientById($identificacion) {
        return $this->castSingleVectorQuery($this->query("select * from soat.get_patient_by_id('$identificacion'::varchar(64))"));
    }
    /**
     *
     * @param string $identificacion
     * @return app\patientEntity
     */
    public function getPatientById2($identificacion) {
        return $this->castSingleVectorQuery($this->query("select * from soat.get_patient_by_id2('$identificacion'::varchar(64))"));
    }

    /**
     *
     * @return app\patientEntity[]
     */
    public function getActivePatient() {
        return $this->castVectorQuery($this->query("select * from soat.get_active_patient()"));
    }

    protected function rowCast($row) {
        $ent = new app\patientEntity();
        $ent->arrayCast($row);
        return $ent;
    }


}

?>