<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * objectionDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/objectionEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class objectionDA extends dataAccess\myDA {

    /**
     *
     * @param int $form008Identifier
     * @return app\objectionEntity
     */
    public function getObjectionByForm008Identifier($form008Identifier) {
        return $this->castSingleVectorQuery($this->query("select * from soat.get_objection_by_form008_identifier('{$form008Identifier}'::int4)"));
    }

    /**
     *
     * @param app\objectionEntity $ent
     * @return boolean
     */
    public function processObjection($ent) {
        return (bool) $this->castScalarQuery($this->query("select soat.process_objection('{$ent->getForm008Identifier()}'::int4, '{$ent->getNumber()}'::varchar(64), '{$ent->getValue()}'::decimal(19,5), '{$ent->getInvoice()}'::varchar(64), '{$ent->getDescription()}'::text, '{$ent->getLastUpdater()}'::int4)::int4"));
    }
    
    /**
     *
     * @return boolean
     */
    public function updateObjection($identifier, $type, $value) {
        return (bool) $this->castSingleVectorQuery($this->query("select soat.update_objecion('$identifier'::int4, '$type'::varchar(360), '$value'::decimal(19,5))::int4"));
    }

    protected function rowCast($row) {
        $ent = new app\objectionEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}

?>