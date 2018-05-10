<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05/03/2015-11:00:27
 * Contact: andresandoval992@gmail.com
 *
 * myHandler, part of app
 */

namespace app\handler;

require_once './handler/routeHandler.php';
require_once "./businessLogic/accessBL.php";
require_once "./businessLogic/kernelBL.php";

use app\businessLogic;

class myHandler {

    const APP_ACTIVE = 0;
    const APP_INACTIVE = 1;
    const APP_REMOVED = 2;

    protected function forceFileDownloadHeader($filename) {
        // disable caching
        $now = gmdate("D, d M Y H:i:s");
        \header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
        \header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
        \header("Last-Modified: {$now} GMT");

        // force download
        \header("Content-Type: application/force-download");
        \header("Content-Type: application/octet-stream");
        \header("Content-Type: application/download");

        // disposition / encoding on response body
        \header("Content-Disposition: attachment;filename={$filename}");
        \header("Content-Transfer-Encoding: binary");
    }

    protected final function sanitizeOutput($buffer) {
        $search = array(
            '/\>[^\S ]+/s', // strip whitespaces after tags, except space
            '/[^\S ]+\</s', // strip whitespaces before tags, except space
            '/(\s)+/s'       // shorten multiple whitespace sequences
        );
        $replace = array(
            '>',
            '<',
            '\\1'
        );
        return \preg_replace($search, $replace, $buffer);
    }

    private function newEncode($success, $content, $options = 0) {
        return \json_encode([
            "success" => $success,
            "content" => $content
                ], $options);
    }

    private function isAssocArr($array) {
        // Keys of the array
        $keys = \array_keys($array);

        // If the array keys of the keys match the keys, then the array must
        // not be associative (e.g. the keys array looked like {0:0, 1:1...}).
        return \array_keys($keys) !== $keys;
    }

    /**
     *
     * Retorna una lista normalizada de acciones a las que el usuario actual tiene acceso
     *
     * @param array $actions Array asociativo o numérico con los identificadores de las acciones a normalizar
     * @param bool $toJson (opcional) Indica si las acciones deben devolvese como un objeto "actionEntity" o como una array "actionEntity->toActionData()"
     * @return array
     */
    protected final function normalizeActionAccess($actions, $toJson = false) {
        /* @var $tmpAction \app\data\entities\kernel\actionEntity */
        $accessBL = new businessLogic\accessBL();
        $kernelBL = new businessLogic\kernelBL();
        $result = [];
        $tmpAction = null;
        // $asoc = $this->isAssocArr($actions);
        foreach ($actions as $key => $a) {
            if ($accessBL->validateAccess($a, false) === true) {
                $tmpAction = $kernelBL->getActionById($a);
                $result[$key] = $toJson ? $tmpAction->toActionData() : $tmpAction;
            }
        }
        return $result;
    }

    /**
     * Formatéa el tipo de peticion, frontEnt, Backend:
     *
     * - Front end (objeto)
     *  Retorna un objeto, correspondiente al parametro "data" de "$scope.init(data)" del controlador
     *
     * - Back end (array)
     *  [0] (bool) = El estado success tras resolver la petición
     *  [1] (string) = El argumento de respuesta tras resolver la petición
     *
     * @param string $action
     * @return mixed
     */
    protected function routeAction($action) {
        unset($action);
        return null;
    }

    protected function getTemplate($path) {
        $basePath = "./template/";
        $fullPath = $basePath . $path;
        if (!\file_exists($fullPath)) {
            return "No existe el template '$path'";
        }
        return \file_get_contents($basePath . $path);
    }

    public final function handleRequest($request) {

        $accessBL = new businessLogic\accessBL();
        $validate = $accessBL->validateAccess($request);

        if ($validate !== true) {
            return $this->newEncode(false, $validate);
        }
        unset($accessBL);
        unset($validate);
        $kernelBL = new businessLogic\kernelBL();
        $actionEnt = $kernelBL->getActionById($request);
        unset($kernelBL);
        $runMode = $actionEnt->getRunMode();
        $routeResult = $this->routeAction($request);
        if ($runMode == 2) {
            if (\is_null($routeResult)) {
                return $this->newEncode(false, "No hay una respuesta implementada");
            } else if (!\is_array($routeResult)) {
                return $routeResult;
            }
            return $this->newEncode($routeResult[0], $routeResult[1], $routeResult[2]);
        } else {
            return $this->newEncode(true, [
                        "template" => $this->getTemplate($actionEnt->getTemplate()),
                        "controller" => $actionEnt->getControllerName(),
                        "controllerData" => \is_null($routeResult) ? null : $routeResult,
                        "properties" => $actionEnt->getProperties()
            ]);
        }
    }

    /**
     *
     * Genera el objeto para crear un elemento <select> en base a los parámetros
     *
     * @param string $title <p>Titulo del elemento</p>
     * @param array $options <p>Array asociativo de opciones a desplegar en el elemento select</p>
     * @param mixed $default <p>Clave del array <b>$options</b> que estará seleccionada por defecto</p>
     * @param bool $enabled [opcional] <p>El elemento estará habilitado o nó</p>
     * @return array
     */
    protected final function createFilterElement($title, $options, $default, $enabled = true) {
        return [
            "title" => $title,
            "required" => false,
            "options" => $options,
            "model" => $default,
            "enabled" => $enabled,
            "default" => $default
        ];
    }

}

?>