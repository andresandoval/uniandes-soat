<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 17/11/2015-11:29:12
 * Contact: andresandoval992@gmail.com
 *
 * listParametersEntity, part of app
 */

namespace app\data\entities;

final class listParametersEntity {

    private $pattern;
    private $limit;
    private $offset;
    private $filters;

    public function __construct() {

        $params = \filter_input(\INPUT_POST, "$\$filter", \FILTER_DEFAULT, \FILTER_REQUIRE_ARRAY);

        $this->pattern = isset($params["__pattern__"]) ? \trim((string)$params["__pattern__"]) : "";
        $this->limit = isset($params["__limit__"]) ? (int) $params["__limit__"] : 10;
        $this->offset = isset($params["__offset__"]) ? (int) $params["__offset__"] : 0;
        $this->filters = isset($params["__filters__"]) ? $params["__filters__"] : "{}";

    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    /**
     * Filtro básico del formulario, en caso de no existir sera asignado [string ""]
     *
     * @return string
     */
    public function getPattern() {
        return $this->pattern;
    }

    /**
     * Numero de registros a mostrar por cada pagina de la consulta, en caso de no existir sera asignado [int 10]
     *
     * @return int
     */
    public function getLimit() {
        return $this->limit;
    }

    /**
     * Numero de registros en contrapeso a mostrar por cada pagina de la consulta, en caso de no existir sera asignado [int 0]
     *
     * @return int
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * Filtros avanzados cargados al formulario, en caso de no existir sera asignado [json {}}
     *
     * @return json
     */
    public function getFilters() {
        return $this->filters;
    }

    /**
     * Devuelve un string de los filtros comunes para una consulta, añadido el cast de cada tipo:
     * en el orden:
     * filters, pattern, limit, offset
     * con los tipos
     * json, text, int4, int4
     *
     * @return string
     */
    public function getQueryString(){
        return "'{$this->filters}'::json, '{$this->pattern}'::text, '{$this->limit}'::int4, '{$this->offset}'::int4";
    }

// </editor-fold>

}

?>