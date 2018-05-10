<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-17:25:48
 * Contact: andresandoval992@gmail.com
 *
 * actionEntity, part of app
 */

namespace app\data\entities\kernel;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class actionEntity extends entities\myEntity {

    private $root_identifier;
    private $icon;
    private $icon_color;
    private $type;
    private $name;
    private $handler;
    private $action;
    private $run_mode;
    private $access;
    private $title;
    private $show_in_menu;
    private $confirm;
    private $controller_name;
    private $template;
    private $context_states;
    private $properties;
    //For profile form
    private $has_children;
    private $assigned;

    public function __construct() {
        $this->root_identifier = null;
        $this->type = "0";
        $this->handler = null;
        $this->action = null;
        $this->access = "0";
        $this->name = null;
        $this->title = null;
        $this->show_in_menu = false;
        $this->icon = "fa-gears";
        $this->icon_color = "#555555";
        $this->confirm = false;
        $this->run_mode = "1";
        $this->template = 'path/to_file.ext';
        $this->context_states = null;
        $this->controller_name = null;
        $this->properties = "{\"maximized\": false}";
        $this->setPostParamName("action");
        $this->setActive(true);

        //For profile form
        $this->has_children = false;
        $this->assigned = false;
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getRootIdentifier() {
        return $this->root_identifier;
    }

    /**
     * Retorna el tipo de accion, 0=TAg, 1=Acción, 2=Dependencia
     *
     * @return int
     */
    public function getType() {
        return (int) $this->type;
    }

    public function getNewIdentifier() {
        return \md5($this->handler) . \md5($this->action);
    }

    public function getTypeString() {
        $types = ["Etiqueta", "Accion", "Dependencia"];
        return $types[(int) $this->type];
    }

    public function getHandler($md5 = false) {
        if ($md5) {
            return \md5($this->handler);
        }
        return $this->handler;
    }

    public function getAction() {
        return $this->action;
    }

    /**
     * Nivel de acceso a la accion
     *
     * 0 = Privado, necesita ser asignado al perfil del usuario
     * 1 = Registrado, necesita haber iniciado sesion para accedes
     * 2 = Publico, cualquiera puede acceder
     *
     * @return int
     */
    public function getAccess($int = true) {
        if ($int) {
            return (int) $this->access;
        }
        $arr = ["Privado", "Registrado", "Heredado", "Público"];
        return $arr[$this->access];
    }

    public function getName() {
        return $this->name;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getShowInMenu($int = false) {
        if ($int) {
            return $this->show_in_menu ? 1 : 0;
        }
        return (bool) $this->show_in_menu;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function getIconColor() {
        return $this->icon_color;
    }

    public function getConfirm($int = false) {
        if ($int) {
            return $this->confirm ? 1 : 0;
        }
        return (bool) $this->confirm;
    }

    /**
     *
     * Retorna el tipo de ejecucion, 0=TAB, 1=Dialog, 2=Hidden
     *
     * @return int
     */
    public function getRunMode() {
        return (int) $this->run_mode;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function getContextStates($array = false) {
        if ($array) {
            return \preg_split("/,/", $this->context_states);
        }
        return (string) $this->context_states;
    }

    public function getControllerName() {
        return $this->controller_name;
    }

    public function getProperties() {
        return $this->properties;
    }

    //For profile form
    public function getHasChildren() {
        return $this->has_children;
    }

    public function getAssigned() {
        return $this->assigned;
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="SETTER">

    public function setRootIdentifier($value) {
        $this->root_identifier = $value;
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function setTitle($value) {
        $this->title = $value;
    }

// </editor-fold>


    public function arrayCast($array) {
        //print_r($array);
        $this->root_identifier = isset($array["root_identifier"]) ? (string) $array["root_identifier"] : null;
        $this->icon = (string) $array["icon"];
        $this->icon_color = (string) $array["icon_color"];
        $this->type = $array["type"];
        $this->name = (string) $array["name"];
        $this->handler = isset($array["handler"]) ? (string) $array["handler"] : null; //(string) $array["module"];
        $this->action = isset($array["action"]) ? (string) $array["action"] : null; //(string) $array["group"];
        $this->run_mode = isset($array["run_mode"]) ? $array["run_mode"] : null; //(string) $array["run_mode"];
        $this->access = $array["access"];
        $this->title = isset($array["title"]) ? (string) $array["title"] : null;
        $this->show_in_menu = isset($array["show_in_menu"]) ? (bool) $array["show_in_menu"] : null;
        $this->confirm = isset($array["confirm"]) ? (bool) $array["confirm"] : null;
        $this->controller_name = isset($array["controller_name"]) ? (string) $array["controller_name"] : null;
        $this->template = isset($array["template"]) ? (string) $array["template"] : null;
        $this->context_states = isset($array["context_states"]) ? (string) $array["context_states"] : null;
        if (isset($array["properties"])) {
            $this->properties = $array["properties"];
        } else {
            $this->properties = \json_encode([
                "maximized" => isset($array["maximized"]) ? (bool) $array["maximized"] : false
            ]);
        }

        //For profile form
        $this->has_children = isset($array["has_children"]) ? (bool) $array["has_children"] : false;
        $this->assigned = isset($array["assigned"]) ? (bool) $array["assigned"] : false;

        parent::arrayCast($array);
    }

    public function toMenuTreeNode() {
        $a_attr = array();
        //var_dump($props);
        $a_attr["style"] = "color: {$this->icon_color};";
        $a_attr["data-leaft"] = ($this->type != 0);
        $a_attr["data-identifier"] = $this->getIdentifier();
        if ($this->type != 0) { //action or dep
            $a_attr["title"] = "{$this->name}: {$this->title}";
            $a_attr["data-action-data"] = \json_encode($this->toActionData());
        }
        return [
            "a_attr" => $a_attr,
            "children" => ($this->type == 0),
            "icon" => "fa {$this->icon} fa-lg",
            "text" => "<txt>$this->name</txt>",
        ];
    }

    public function toProfileFormTreeNode($children = []) {
        if (\is_null($this->getIdentifier())) {
            return [
                "identifier" => null,
                "type" => 0,
                "access" => 0,
                "name" => "Acciones",
                "title" => "Acciones aplicables",
                "icon" => "fa-tree",
                "iconColor" => "#ff0000",
                "hasChildren" => true,
                "assigned" => true,
                "children" => $children
            ];
        }

        return [
            "identifier" => $this->getIdentifier(),
            "type" => (int) $this->type,
            "access" => (int) $this->access,
            "accessName" => $this->getAccess(false),
            "name" => $this->name,
            "title" => $this->title,
            "icon" => $this->icon,
            "iconColor" => $this->icon_color,
            "hasChildren" => (bool) $this->has_children,
            "assigned" => (bool) $this->assigned,
            "children" => $children
        ];
    }

    public function toListHeader() {
        return [
            "x01" => $this->hasNoFilter("!"),
            "x02" => $this->hasAdvancedFilter("Tipo"),
            "x03" => $this->hasBasicFilter("Nombre"),
            "x04" => $this->hasBasicFilter("Manejador"),
            "x05" => $this->hasBasicFilter("Accion"),
            "x06" => $this->hasBasicFilter("Titulo"),
            "x07" => $this->hasAdvancedFilter("Acceso"),
            "x08" => $this->hasAdvancedFilter("En menú"),
            "x09" => $this->hasAdvancedFilter("Ejecución"),
            "x10" => $this->hasAdvancedFilter("!")
        ];
    }

    public function toListRow() {
        return [
            "x01" => "<div class='icon'><i class='fa {$this->icon} fa-lg' style='color: {$this->icon_color};'></i></div>",
            "x02" => $this->type,
            "x03" => $this->name,
            "x04" => $this->handler,
            "x05" => $this->action,
            "x06" => $this->title,
            "x07" => $this->access,
            "x08" => $this->toBooleanIcon($this->show_in_menu),
            "x09" => $this->run_mode,
            "x10" => $this->getStateIcon()
        ];
    }

    protected function arrayContent() {
        return [
            "root_identifier" => $this->root_identifier,
            "icon" => $this->icon,
            "icon_color" => $this->icon_color,
            "type" => $this->type,
            "name" => $this->name,
            "handler" => $this->handler,
            "action" => $this->action,
            "run_mode" => $this->run_mode,
            "access" => $this->access,
            "title" => $this->title,
            "show_in_menu" => $this->show_in_menu,
            "confirm" => $this->confirm,
            "controller_name" => $this->controller_name,
            "template" => $this->template,
            "context_states" => $this->context_states,
            "properties" => $this->properties
        ];
    }

    public function toActionData() {
        return [
            "identifier" => $this->getIdentifier(),
            "name" => $this->name,
            "title" => $this->title,
            "icon" => $this->icon,
            "icon_color" => $this->icon_color,
            "confirm" => $this->confirm,
            "run_mode" => $this->run_mode
        ];
    }

    private function dashesToCamelCase($string) {
        $camel = \str_replace(' ', '', \ucwords(\str_replace('-', ' ', $string)));
        if (isset($camel[0])) {
            $camel[0] = \strtolower($camel[0]);
        }
        return $camel;
    }

    public function getHandlerCode() {
        if ($this->type == 0) {
            return <<<PHP

     /**
      * La etiqueta [{$this->getName()} : {$this->getTitle()}] no aplica a la generación de codigo PHP del manejador
      *
      * Identificador: {$this->getIdentifier()}
      *
      */


PHP;
        }

        $handlerFn = $this->dashesToCamelCase($this->handler);

        return <<<PHP

     /**
      * Manejador de grupo <b>{$this->handler}</b>
      * Devuelve un hash de 32 caracteres del manejador de la acción <b>{$this->handler}</b>, equivalente a <b>{$this->getHandler(true)}</b>
      *
      * @return string
      */
     public static function {$handlerFn}(){
         return "{$this->getHandler(true)}";
     }


PHP;
    }

    public function getActionCode() {
        if ($this->type == 0) {
            return <<<PHP

     /**
      * La etiqueta [{$this->getName()} : {$this->getTitle()}] no aplica a la generación de codigo PHP de la acción
      *
      * Identificador: {$this->getIdentifier()}
      *
      */


PHP;
        }

        $handlerFn = $this->dashesToCamelCase($this->handler);
        $actionFn = $this->dashesToCamelCase($this->action);

        return <<<PHP

     /**
      * Manejador de la acción <b>{$this->getName()} : {$this->getTitle()}</b>
      * Devuelve un hash de 64 caracteres del identificador de la acción <b>{$this->handler}{$this->action}</b>, equivalente a <b>{$this->getIdentifier()}</b>
      *
      * @return string
      */
     public static function {$handlerFn}_{$actionFn}(){
         return "{$this->getIdentifier()}";
     }


PHP;
    }

    public static function getClassCode($innerCode) {

        return <<<PHP
<?php

class FOO{
$innerCode
}

?>
PHP;
    }

    public function getRouteHandlerCode() {

        return <<<PHP
<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 03/09/2015-15:58:12
 * Contact: andresandoval992@gmail.com
 *
 * routeHandler, part of app
 */

namespace app\handler;

final class routeHandler {
    /*----<EMPTY-HANDLER>----*//*  NEW CODE GOES HERE!!!  *//*----</EMPTY-HANDLER>----*/
}

?>
PHP;
    }

    public function hasChangedIdentifier() {
        return $this->getIdentifier() != $this->getNewIdentifier();
    }

}

?>