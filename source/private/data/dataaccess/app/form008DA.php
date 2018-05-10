<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * form008DA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/form008Entity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class form008DA extends dataAccess\myDA {

    /**
     *
     * @param \app\data\entities\listParametersEntity $parameters
     * @return app\form008Entity[]
     */
    public function getForm008($parameters) {
        return $this->castVectorQuery($this->query("select * from soat.get_form008({$parameters->getQueryString()})"));
    }

    /**
     *
     * @param app\form008Entity $form008
     * @return int
     */
    public function processForm008($form008) {
        return (int) $this->castScalarQuery($this->query("select soat.process_form008('{$form008->getPatientIdentifier()}'::varchar(64), '{$form008->getLastUpdater()}'::int4, '{$form008->getInsurance()}'::varchar(64))::int4"));
    }

    /**
     *
     * @param int $identifier
     * @return app\form008Entity
     */
    public function getForm008ById($identifier) {
        return $this->castSingleVectorQuery($this->query("select * from soat.get_form008_by_id('$identifier'::int4)"));
    }
    /**
     *
     * @return app\form008Entity[]
     */
    public function get_form008_by_date($desde, $hasta) {
        return $this->castVectorQuery($this->query("select * from soat.get_form008_by_date('$desde'::int8, '$hasta'::int8)"));
    }

    protected function rowCast($row) {
        $ent = new app\form008Entity();
        $ent->arrayCast($row);
        return $ent;
    }


}

?>