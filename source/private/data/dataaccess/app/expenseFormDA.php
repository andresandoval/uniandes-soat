<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-18:04:39
 * Contact: andresandoval992@gmail.com
 *
 * expenseFormDA, part of app
 */

namespace app\data\dataAccess\app;

require_once './data/dataAccess/myDA.php';
require_once './data/entities/app/expenseFormEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class expenseFormDA extends dataAccess\myDA {

    private function toPgJsonArray($set) {
        if (!\is_array($set) || \count($set) <= 0) {
            return "ARRAY[]::json[]";
        }
        $__result = [];
        foreach ($set as $s) {
            $__result[] = \json_encode($s);
        }
        return "ARRAY['" . \implode("', '", $__result) . "']::json[]";
    }

    /**
     *
     * @param app\expenseFormEntity $ent
     * @return bool
     */
    public function processExpenseForm($ent) {
        return $this->castScalarQuery($this->query("select soat.process_expense_form('{$ent->getForm008Identifier()}'::int4, '{$ent->getDiagnostic()}'::text, '{$ent->getTotal()}'::decimal(19,5), '{$ent->getSppat()}'::decimal(19,5), '{$ent->getBalance()}'::decimal(19,5), '{$ent->getDescription()}'::text, '{$ent->getLastUpdater()}'::int4, {$this->toPgJsonArray($ent->getTariffDetail(true))}, {$this->toPgJsonArray($ent->getMedicineDetail(true))})::int4"));
    }

    /**
     *
     * @param int $form008Identifier
     * @return app\expenseFormEntity
     */
    public function getExpenseFormByForm008Identifier($form008Identifier) {
        return $this->castSingleVectorQuery($this->query("select * from soat.get_expense_form_by_form008_identifier('{$form008Identifier}')"));
    }

    protected function rowCast($row) {
        $ent = new app\expenseFormEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}

?>