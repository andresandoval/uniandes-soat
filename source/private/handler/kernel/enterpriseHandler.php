<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-17:42:23
 * Contact: andresandoval992@gmail.com
 *
 * enterpriseHandler, part of app
 */

namespace app\handler\kernel;

require_once "./handler/myHandler.php";
require_once "./businessLogic/kernelBL.php";

use app\handler;
use app\businessLogic;
use app\data\entities;

final class enterpriseHandler extends handler\myHandler {

    private $logic;

    public function __construct() {
        $this->logic = new businessLogic\kernelBL();
    }

    private function showData(){
        $operations = [
            "process" => handler\routeHandler::enterpriseHandler_processData(),
        ];
        $ent = $this->logic->getEnterprise();
        if(\is_null($ent)){
            $ent = new entities\kernel\enterpriseEntity();
        }

        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => $ent->toArray()
        ];
    }



    protected function routeAction($action) {
        switch ($action) {
            case handler\routeHandler::enterpriseHandler_showData(): return $this->showData();
            case handler\routeHandler::enterpriseHandler_processData(): return $this->logic->processEnterprise();
        }
    }

}

?>