<?php

namespace app\data\dataAccess\kernel;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/kernel/catalogEntity.php';

use app\data\dataAccess;
use app\data\entities\kernel;

class catalogDA extends dataAccess\myDA {


    /**
     *
     * @param int $appIdentifier
     * @return kernel\catalogEntity[]
     */
    public function getCatalogType($appIdentifier) {
        return $this->castVectorQuery($this->query("select * from kernel.get_catalog_type('$appIdentifier'::int4)"));
    }

    /**
     *
     * @param int $appIdentifier
     * @param \app\data\entities\listParametersEntity $parameters
     * @return kernel\catalogEntity[]
     */
    public function getCatalog($appIdentifier, $parameters) {
        return $this->castVectorQuery($this->query("select * from kernel.get_catalog('$appIdentifier'::int4, {$parameters->getQueryString()})"));
    }

    /**
     *
     * @param kernel\catalogEntity $catalog
     */
    public function processCatalog($catalog){
        return (bool) $this->castScalarQuery($this->query("select kernel.process_catalog('{$catalog->getIdentifier('integer')}'::int4, '{$catalog->getAppIdentifier()}'::int4, '{$catalog->getType()}'::varchar(32), '{$catalog->getName()}'::varchar(64), '{$catalog->getValue()}'::text,'{$catalog->getDescription()}'::text, '{$catalog->getState()}'::int2, '{$catalog->getLastUpdater()}'::int4)::int4"));
    }

    /**
     *
     * @param int $identifier
     * @return kernel\catalogEntity
     */
    public function getCatalogById($identifier) {
        return $this->castSingleVectorQuery($this->query("select * from kernel.get_catalog_by_id('$identifier'::int4)"));
    }

    /**
     *
     * @param int[] $identifiers
     * @param int $status
     * @param int $lastUpdater
     * @return boolean
     */
    public function changeCatalogState($identifiers, $status, $lastUpdater) {
        return (bool) $this->castScalarQuery($this->query("select kernel.change_catalog_state('{$this->toPgArray($identifiers)}'::int4[], '$status'::int2, '$lastUpdater'::int4)::int4"));
    }

    public function getCatalogByType($type) {
        return $this->castVectorQuery($this->query("select * from kernel.get_catalog_by_type('{$type}'::varchar(32))"));
    }



    public function getCatalogByTypeAndName($type, $name, $appIdentifier) {
        $ret = $this->castVectorQuery($this->query("select * from kernel.get_catalog_by_type_and_name('$type'::varchar(32), '$name'::varchar(64), '$appIdentifier'::int4)"));
        return \is_null($ret) || \count($ret) != 1 ? null : $ret[0];
    }

    public function insertCatalog($catalog) {
        /* @var $catalog kernel\catalogEntity */
        return (bool) $this->castScalarQuery($this->query("select true from kernel.insert_catalog('{$catalog->getAppIdentifier(true)}'::int4, '{$catalog->getType()}'::varchar(32), '{$catalog->getName()}'::varchar(64), '{$catalog->getDescription()}'::text, '{$catalog->getActive(true)}'::int2, '{$catalog->getAuthor(true)}'::varchar(64))"));
    }

    public function updateCatalog($catalog) {
        /* @var $catalog kernel\catalogEntity */
        return (bool) $this->castScalarQuery($this->query("select true from kernel.update_catalog('{$catalog->getIdentifier()}'::int4, '{$catalog->getName()}'::varchar(64), '{$catalog->getDescription()}'::text, '{$catalog->getActive(true)}'::int2, '{$catalog->getLastUpdater(true)}'::varchar(64))"));
    }

    public function changeActiveStatus($identifier, $active, $lastUpdater) {
        return $this->castScalarQuery($this->query("select true from kernel.change_active_catalog_status('{$identifier}'::int4, '{$active}'::int2, '{$lastUpdater}'::varchar(64) )"));
    }

    public function changeTrashedStatus($identifier, $trashed, $dustman) {
        return $this->castScalarQuery($this->query("select true from kernel.change_trashed_catalog_status('{$identifier}'::int4, '{$trashed}'::int2, '{$dustman}'::varchar(64) )"));
    }



    protected function rowCast($row) {
        $ent = new kernel\catalogEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}
