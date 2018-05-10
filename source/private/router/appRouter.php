<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 15/07/2015-9:56:01
 * Contact: andresandoval992@gmail.com
 *
 * appRouter, part of app
 */

namespace app\router;

require_once "./handler/kernel/userHandler.php";
require_once "./handler/kernel/actionHandler.php";
require_once "./handler/kernel/profileHandler.php";
require_once "./handler/kernel/enterpriseHandler.php";
require_once "./handler/kernel/departmentHandler.php";
require_once "./handler/kernel/catalogHandler.php";
require_once "./handler/kernel/systemHandler.php";
//app
require_once "./handler/app/patientHandler.php";
require_once "./handler/app/form008Handler.php";
require_once "./handler/app/reportHandler.php";
require_once "./handler/app/doctorHandler.php";

use app\handler;
use app\handler\kernel;

final class appRouter {

    // <editor-fold defaultstate="collapsed" desc="CORE">

    private $request = null;
    private $handler = null;
    private $action = null;

    public function __construct() {
        $request = \filter_input(\INPUT_POST, "$\$request", \FILTER_DEFAULT);
        if (\is_null($request)) {
            $request = \filter_input(\INPUT_GET, "$\$request", \FILTER_DEFAULT);
        }
        if (!\is_null($request) && \strlen($request) == 64) {
            $this->request = $request;
            $this->handler = \substr($request, 0, 32);
            $this->action = \substr($request, 32, 32);
        }
    }

    private function error404() {
        $serverProtocol = \filter_input(\INPUT_SERVER, "SERVER_PROTOCOL", \FILTER_DEFAULT);
        \header("$serverProtocol 404 - No se pudo resolver el manejador de la peticion");
        return \json_encode(["success" => false, "content" => "No se puede resolver la petición!!"]);
    }

    public function go() {
        $__handler__ = $this->routeHandler();
        echo \is_null($__handler__) ? $this->error404() : $__handler__->handleRequest($this->request);
        return null;
    }

    //</editor-fold>

    private function routeHandler() {
        switch ($this->handler) {
            case handler\routeHandler::userHandler(): return new kernel\userHandler();
            case handler\routeHandler::actionHandler():return new kernel\actionHandler();
            case handler\routeHandler::profileHandler(): return new kernel\profileHandler();
            case handler\routeHandler::enterpriseHandler(): return new kernel\enterpriseHandler();
            case handler\routeHandler::departmentHandler(): return new kernel\departmentHandler();
            case handler\routeHandler::catalogHandler(): return new kernel\catalogHandler();
            case handler\routeHandler::systemHandler(): return new kernel\systemHandler();
            //app
            case handler\routeHandler::patientHandler(): return new handler\app\patientHandler();
            case handler\routeHandler::form008Handler(): return new handler\app\form008Handler();
            case handler\routeHandler::reportHandler(): return new handler\app\reportHandler();
            case handler\routeHandler::doctorHandler(): return new handler\app\doctorHandler();
        }
    }

}

?>