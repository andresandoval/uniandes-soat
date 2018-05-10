<?php

/**
 * Developed by: Andres Sandoval Montoya
 * Date: 26-abr-2015-16:50:52
 * Contact: andresandoval992@gmail.com
 *
 * listParameters, myBL, part of app_facig
 */

namespace app\businessLogic;

class myBL {

    const SESSION_ID_KEY = "INVENTARIO DE CUYES 1.0";
    const CURRENT_APP = 1;
    const CURRENT_ENTERPRISE = 1;
    const USER_ID_KEY = "USER_ID";
    const DEPARTMENT_ID_KEY = "DEPARTMENT_ID";
    const PROFILE_ID_KEY = "PROFILE_ID";


    // <editor-fold defaultstate="collapsed" desc="SESSION FUNCTIONS">

    protected final function getSessionId() {
        $md5 = \md5(self::SESSION_ID_KEY);
        return isset($_SESSION[$md5]) ? $_SESSION[$md5] : null;
    }

    protected final function getCurrentAppId() {
        return (int) self::CURRENT_APP;
    }

    protected final function getCurrentEnterpriceId() {
        return (int) self::CURRENT_ENTERPRISE;
    }

    protected final function getSessionUserId() {
        return (int) $_SESSION[\md5(self::USER_ID_KEY)];
    }

    protected final function getSessionDepartmentId() {
        return (int) $_SESSION[\md5(self::DEPARTMENT_ID_KEY)];
    }

    protected final function getSessionProfileId() {
        return (int) $_SESSION[\md5(self::PROFILE_ID_KEY)];
    }

    protected final function initSession($userId, $profileId, $departmentId) {
        \session_start();
        $_SESSION[\md5(self::SESSION_ID_KEY)] = \md5((string) \session_id());
        $_SESSION[\md5(self::USER_ID_KEY)] = $userId;
        $_SESSION[\md5(self::DEPARTMENT_ID_KEY)] = $departmentId;
        $_SESSION[\md5(self::PROFILE_ID_KEY)] = $profileId;
    }

    public final function simpleLogOutUser() {
        if (\session_destroy()) {
            return true;
        }
        return false;
    }

    public function isSessionAlive() {
        if (\session_status() != \PHP_SESSION_ACTIVE) {
            if (!\session_start()) {
                return false;
            }
        }
        if (!\is_null($this->getSessionId())) {
            return true;
        }
        \session_destroy();
        return false;
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="FORMS">

    /**
     *
     * Obtiene los identificadores recibidos del parametro $$data[$key][] $_POST
     *
     * @param string $key  (default = null) El valor asociativo del array contenido en $_POST['$$data'][], en caso de ser null devolvera el array $_POST['$$data'] raiz completo
     * @param bool $multiple (default = false) Indica si se deben retornar todos los elementos del array recuperado o solo el primero
     * @return mixed En caso de no existir elementos, de que las claves asociaticas de los arrays no existan, o cualquier otra anomalía, se retorna NULL
     */
    public final function getDataFromPost($key = null, $multiple = false){
        $__data__ = \filter_input(\INPUT_POST, "$\$data", \FILTER_DEFAULT, \FILTER_REQUIRE_ARRAY);
        if(\is_null($key)){
            return $__data__;
        }
        if (!isset($__data__[$key])) {
            return null;
        }
        $__values__ = $__data__[$key];
        if(!\is_array($__values__)){
            return $__values__;
        }
        if (\count($__values__) <= 0) {
            return null;
        }
        return $multiple ? $__values__ : $__values__[0];

    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="LIST FORM">

    /**
     *
     * Crear una matriz de las acciones para context menú con todos los posibles estados a los que pueden ser aplicadas
     *
     * @param array[actionEntity] $actions Array de acciones a agrupar por los estados validos
     * @return array
     */
    private function groupActionsByContextState($actions) {
        /* @var $action \app\data\entities\kernel\actionEntity */
        /* @var $tmpContextStates array */
        /* @var $contextActionsByState array */

        $contextActionsByState = [];
        foreach ($actions as $action) {
            $tmpContextStates = $action->getContextStates(true);

            foreach ($tmpContextStates as $s) {
                if (!isset($contextActionsByState[$s])) {
                    $contextActionsByState[$s] = [];
                }
                $contextActionsByState[$s][$action->getIdentifier()] = $action->toActionData();
            }
        }
        return $contextActionsByState;
    }

    /**
     *
     * @param type $actions
     * @param type $rowStates
     * @return type
     */
    private function getContextActionsByRowStates($actions, $rowStates) {
        if (\count($actions) <= 0) {
            return null;
        }
        $resultArr = [];
        foreach ($rowStates as $s) {
            if (isset($actions[$s])) {
                foreach ($actions[$s] as $key => $value) {
                    if (!isset($resultArr[$key])) {
                        $resultArr[$key] = $value;
                    }
                }
            }
        }
        return \count($resultArr) <= 0 ? null : $resultArr;
    }

    /**
     *
     * Genera una lista a partir de entidades de entrada y acciones para el contexto de cada entidad
     *
     * @param type $data
     * @param type $contextActions
     * @return array
     */
    public final function generateList($data, $contextActions) {
        //var_dump($contextActions);
        /* @var $entity \app\data\entities\myEntity */
        /* @var $action \app\data\entities\kernel\actionEntity */
        if (\is_null($data)) {
            return $this->successEncode([
                        "head" => [],
                        "rows" => [],
                        "status" => "No se encontraron registros",
            ]);
        }
        $contextActionsByState = $this->groupActionsByContextState($contextActions);
        $tmpRow = null;
        $rows = array();
        foreach ($data as $entity) {
            $tmpRow = array(
                "checked" => false,
                "identifier" => $entity->getIdentifier(),
                "entity" => $entity->toListRow(),
                "context" => $this->getContextActionsByRowStates($contextActionsByState, $entity->getRowState())
            );
            $rows[] = $tmpRow;
        }
        $content = [
            "head" => $data[0]->toListHeader(),
            "rows" => $rows,
            "count" => $data[0]->getCount()
        ];
        return $this->successEncode($content);
    }

    /**
     *
     * Obtiene los identificadores recibidos del parametro $$data[$$rowIdentifier][] $_POST, normalmente de un formulario tipo lista en Front End
     * Esta funcion es un acceso directo a la function getDataFromPost de este mimos objeto
     *
     * @param bool $multiple Indica si se deben devolver multiples identificadores como un array, o solo el primero como un valor escalar
     * @return mixed Retorna un array de valores ($multiple = true) o un solo valor ($multiple = false), en caso de error o de no existir elementos en el array de entrada $_POST devuelve NULL
     */
    public final function getIdentifiersFromPost($multiple) {
        return $this->getDataFromPost("$\$rowIdentifier", $multiple);
    }

    // </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="ENCODES">

    public final function newEncode($success, $content, $options = 0) {
        return [$success, $content, $options];
    }

    public final function successEncode($content, $options = 0) {
        return $this->newEncode(true, $content, $options);
    }

    public final function failEncode($content, $options = 0) {
        return $this->newEncode(false, $content, $options);
    }

    public final function setError($nro, $msg) {
        $serverProtocol = \filter_input(\INPUT_SERVER, "SERVER_PROTOCOL", \FILTER_DEFAULT);
        \header("$serverProtocol $nro - $msg");
        return $msg;
    }



    // </editor-fold>

    protected function nvl($value_1, $value_2){
        return \is_null($value_1) ? $value_2 : $value_1;
    }
}

?>