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
require_once './data/entities/app/expenseFormDetailEntity.php';

use app\data\dataAccess;
use app\data\entities\app;

final class expenseFormDetailDA extends dataAccess\myDA {

    /**
     *
     * @param int $identifier
     * @return app\expenseFormDetailEntity[]
     */
    public function getAllExpenseFormDetail($identifier) {
        return $this->castVectorQuery($this->query("select * from soat.get_all_expense_form_detail('{$identifier}'::int4)"));
    }

    protected function rowCast($row) {
        $ent = new app\expenseFormDetailEntity();
        $ent->arrayCast($row);
        return $ent;
    }

}

?>