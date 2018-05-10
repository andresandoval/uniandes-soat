<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-8:58:55
 * Contact: andresandoval992@gmail.com
 *
 * myEntity, part of app
 */

namespace app\data\entities;

require_once './data/entities/listParametersEntity.php';

class myEntity {

    private $count = null;
    private $identifier = null;
    private $app_identifier = null;
    private $description = null;
    private $state = true;
    private $last_updater = null;
    private $last_update_date = null;
    private $postParamName = null;

//
// <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getCount() {
        return $this->count;
    }

    public function getIdentifier($castType = null) {
        if (\is_null($castType)) {
            return $this->identifier;
        }
        $__new__ = $this->identifier;
        if (\settype($__new__, $castType)) {
            return $__new__;
        }
        return $this->identifier;
    }

    public function getAppIdentifier() {
        return $this->app_identifier;
    }

    public function getDescription() {
        return $this->description;
    }

    /**
     * Retorna : 0 = activo, 1 = inactivo, 2 = en papelera
     * @return int
     */
    public function getState() {
        return $this->state;
    }

    public final function getStateLabel() {
        $label = ["Activo", "Inactivo", "En papelera"];
        return $label[$this->state];
    }

    public final function getStateIcon() {
        $icon = ["fa-check", "fa-times", "fa-trash"];
        $color = ["#5cb85c", "#f00", "#f00"];
        return "<div class='icon'><i class='fa {$icon[$this->state]} fa-lg' style='color: {$color[$this->state]}' title='{$this->getStateLabel()}'></i></div>";
    }

    public function getLastUpdater() {
        return $this->last_updater;
    }

    public function getLastUpdateDate($string = false) {
        if ($string) {
            return \date_format(\date_create($this->last_update_date), "Y-m-d");
        }
        return $this->last_update_date;
    }

    protected function getPostParamName() {
        return $this->postParamName;
    }

    public function getActive() {
        return $this->state == 0;
    }

    public function getTrashed() {
        return $this->state == 2;
    }

    /**
     * Devuelve un array correspondiente a los estados de la entidad aplicables a una fila del List Form
     *
     * Valores por defecto: array(1) -> 0=activo, 1 = inactivo, 2 = en papelera
     *
     * @return array
     */
    public function getRowState() {
        return [$this->state];
    }

// </editor-fold>
//
// <editor-fold defaultstate="collapsed" desc="SETTER">

    protected function setPostParamName($postParamName) {
        $this->postParamName = $postParamName;
    }

    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setState($value) {
        $this->state = $value;
    }

    public function setActive($value) {
        $this->state = $value ? 0 : 1;
    }

    public function setTrashed() {
        $this->state = 2;
    }

    public function setLastUpdater($value) {
        $this->last_updater = $value;
    }

    public function setLastUpdateDate($last_update_date) {
        $this->last_update_date = $last_update_date;
    }


    public function setAppIdentifier($value) {
        $this->app_identifier = $value;
    }

// </editor-fold>
//

    /**
     * Evalúa si la clave existe en el array ingresado, si es asi, devuelve el valor asociado a dicha clave, caso contrario retorna NULL
     *
     * @param string $key La clave a buscar en el array
     * @param array $array El array a ser buscado
     * @return mixed
     */
    protected function __arrayElement($key, $array) {
        if (\array_key_exists($key, $array)) {
            return $array[$key];
        }
        return null;
    }

    protected function arrayCast($array) {
        $this->count = (int) $this->__arrayElement("count", $array);
        $this->identifier = $this->__arrayElement("identifier", $array);
        $this->app_identifier = (int) $this->__arrayElement("app_identifier", $array);
        $this->description = (string) $this->__arrayElement("description", $array);
        $tmpState = $this->__arrayElement("state", $array);
        $tmpActive = $this->__arrayElement("active", $array);
        if (!\is_null($tmpState)) {
            $this->state = (int) $tmpState;
        } else if (!\is_null($tmpActive)) {
            $this->state = ((bool) $tmpActive) ? 0 : 1;
        } else {
            $this->state = 1;
        }
        unset($tmpState);
        unset($tmpActive);
        $this->last_updater = $this->__arrayElement("last_updater", $array);
        $this->last_update_date = $this->__arrayElement("last_update_date", $array);
    }

    protected final function getArrayFromPost() {
        $post = \filter_input(\INPUT_POST, "$\$data", \FILTER_DEFAULT, \FILTER_REQUIRE_ARRAY);
        return isset($post[$this->postParamName]) ? $post[$this->postParamName] : [];
    }

    private function hasFilter($columnName, $filter = -1) {

        $hasFilter = ($filter >= 0);
        $filterClass = ["fa-search", "fa-filter"];
        $filterTitle = ["Según filtro básico", "Según filtro detallado"];
        $highlightMatch = [true, false];

        return [
            "columnName" => $columnName,
            "hasFilter" => $hasFilter,
            "filterClass" => $hasFilter ? $filterClass[$filter] : null,
            "filterTitle" => $hasFilter ? $filterTitle[$filter] : null,
            "highlightMatch" => $hasFilter ? $highlightMatch[$filter] : false
        ];
    }

    protected final function hasBasicFilter($columnName) {
        return $this->hasFilter($columnName, 0);
    }

    protected final function hasAdvancedFilter($columnName) {
        return $this->hasFilter($columnName, 1);
    }

    protected final function hasNoFilter($columnName) {
        return $this->hasFilter($columnName);
    }

    public final function postCast($customArray = null) {
        $array = \is_null($customArray) ? $this->getArrayFromPost() : $customArray;
        $this->arrayCast($array);
        unset($array);
    }

    protected final function toBooleanIcon($val) {
        $type = $val ? 'check' : 'close';
        $color = $val ? '#5cb85c' : '#f00';
        return "<div class='icon'><i class='fa fa-$type fa-lg' style='color: $color'></i></div>";
    }

    public function toListHeader() {
        return null;
    }

    public function toListRow() {
        return null;
    }

    protected function arrayContent() {
        return [];
    }

    public final function toArray() {
        $array = [
            "identifier" => $this->identifier,
            "app_identifier" => $this->app_identifier,
            "description" => $this->description,
            "active" => $this->getActive(),
            "trashed" => $this->getTrashed()
        ];
        return \array_merge($array, $this->arrayContent());
    }

    protected final function castNullStringToDb($value) {
        if (\is_null($value) || \strlen($value) <= 0) {
            return "null";
        }
        return "'$value'";
    }

}

?>