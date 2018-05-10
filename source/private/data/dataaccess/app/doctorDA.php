<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * doctorDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/doctorEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class doctorDA extends dataAccess\myDA {

    /**
     *
     * @param \app\data\entities\listParametersEntity $parameters
     * @return app\doctorEntity[]
     */
    public function getDoctor($parameters) {
        return $this->castVectorQuery($this->query("select * from soat.get_doctor({$parameters->getQueryString()})"));
    }


    /**
     * Retorna todos los medicos activos
     * @return app\doctorEntity
     */
    public function getAllDoctor(){
        return $this->castVectorQuery($this->query("select * from soat.get_all_doctor()"));
    }

    /**
     *
     * @param int $form008Identifier
     * @return app\doctorEntity
     */
    public function getDoctorByForm008Identifier($form008Identifier){
        return $this->castSingleVectorQuery($this->query("select * from soat.get_doctor_by_form008_identifier('$form008Identifier'::int4)"));
    }
    /**
     *
     * @param int $identifier
     * @return app\doctorEntity
     */
    public function getDoctorById($identifier){
        return $this->castSingleVectorQuery($this->query("select * from soat.get_doctor_by_id('$identifier'::int4)"));
    }

    /**
     * Procesar el medico asignado al form-008
     *
     * @param int $form008Identifier
     * @param int $doctorIdentifier
     * @param int $lastUpdater
     * @return bool
     */
    public function processForm008HasDoctor($form008Identifier, $doctorIdentifier, $lastUpdater){
        return $this->castScalarQuery($this->query("select soat.process_form008_has_doctor('$form008Identifier'::int4, '$doctorIdentifier'::int4, '$lastUpdater'::int4)::int4"));
    }


    /**
     *
     * @param app\doctorEntity $doctor
     * @return bool
     */
    public function processDoctor($doctor) {
        return (bool) $this->castScalarQuery($this->query("select soat.process_doctor('{$doctor->getIdentifier('int')}'::int4, '{$doctor->getSpecialityIdentifier()}'::int4, '{$doctor->getIdentityNumber()}'::char(10), '{$doctor->getFirstName()}'::varchar(64), '{$doctor->getLastName()}'::varchar(64), '{$doctor->getState()}'::int2, '{$doctor->getDescription()}'::text, '{$doctor->getLastUpdater()}'::int4)::int4"));
    }



    protected function rowCast($row) {
        $ent = new app\doctorEntity();
        $ent->arrayCast($row);
        return $ent;
    }


}

?>