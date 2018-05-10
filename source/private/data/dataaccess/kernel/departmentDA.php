<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * departmentDA, part of app
 */

namespace app\data\dataAccess\kernel;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/kernel/departmentEntity.php';

use app\data\dataAccess;
use app\data\entities\kernel;

final class departmentDA extends dataAccess\myDA {

    /**
     *
     * @param int $enterpriseIdentifier
     * @param \app\data\entities\listParametersEntity $parameters
     * @return kernel\departmentEntity[]
     */
    public function getDepartment($enterpriseIdentifier, $parameters) {
        return $this->castVectorQuery($this->query("select * from kernel.get_department('$enterpriseIdentifier'::int4, {$parameters->getQueryString()})"));
    }

    public function getCoordination($enterpriseIdentifier) {
        return $this->castVectorQuery($this->query("select * from kernel.get_coordination('{$enterpriseIdentifier}'::int4)"));
    }

    public function getDepartmentByEnterpriseId($enterpriseIdentifier) {
        return $this->castVectorQuery($this->query("select * from kernel.get_department_by_enterprise_id('$enterpriseIdentifier'::int4)"));
    }

    /**
     * <p>Procesar departamento</p>
     *
     * @param kernel\departmentEntity $department
     * @return bool
     */
    public function processCoordination($department) {
        return (bool) $this->castScalarQuery($this->query("select kernel.process_department('{$department->getIdentifier("int")}'::int4, '{$department->getEnterpriseIdentifier()}'::int4, '{$department->getCoordinationIdentifier()}'::int4, '{$department->getName()}'::varchar(64), '{$department->getDescription()}'::text, '{$department->getState()}'::int2, '{$department->getLastUpdater()}'::int4)::int4"));
    }

    public function getDepartmentByCoordinationId($coordinationId) {
        return $this->castVectorQuery($this->query("select * from kernel.get_department_by_coordination('$coordinationId'::int4)"));
    }

    public function getControlDepartment($appIdentifier) {
        return $this->castVectorQuery($this->query("select * from kernel.get_control_department('{$appIdentifier}'::int4)"));
    }

    public function getAllDepartment($appIdentifier) {
        return $this->castVectorQuery($this->query("select * from kernel.get_all_department('{$appIdentifier}'::int4)"));
    }

    public function getDepartmentByName($name) {
        return $this->castVectorQuery($this->query("select * from kernel.get_department_by_name('$name'::varchar(64))"));
    }

    public function getDepartmentById($identifier) {
        $ret = $this->castVectorQuery($this->query("select * from kernel.get_department_by_id('$identifier'::int4)"));
        return \is_null($ret) || \count($ret) != 1 ? null : $ret[0];
    }

    public function insertDepartment($department) {
        /* @var $department kernel\departmentEntity */
        return (bool) $this->castScalarQuery($this->query("select true from kernel.insert_department('{$department->getEnterpriseIdentifier()}'::int4, '{$department->getCoordinationIdentifier()}'::int4, '{$department->getControl(true)}'::int2, '{$department->getName()}'::varchar(64), '{$department->getDescription()}'::text, '{$department->getActive(true)}'::int2, '{$department->getAuthor(true)}'::varchar(64))"));
    }

    protected function rowCast($row) {
        $ent = new kernel\departmentEntity();
        $ent->arrayCast($row);
        return $ent;
    }
    
}

?>