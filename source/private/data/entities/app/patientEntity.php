<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-17:25:48
 * Contact: andresandoval992@gmail.com
 *
 * cageEntity, part of app
 */

namespace app\data\entities\app;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class patientEntity extends entities\myEntity {

    private $identificacion;
    private $primer_nombre;
    private $segundo_nombre;
    private $apellido_materno;
    private $apellido_paterno;
    private $direccion;
    private $barrio;
    private $parroquia;
    private $canton;
    private $provincia;
    private $zona;
    private $telefono;
    private $fecha_nacimiento;
    private $lugar_nacimiento;
    private $nacionalidad;
    private $grupo_cultural;
    private $edad;
    private $genero;
    private $estado_civil;
    private $instruccion;
    private $fecha_admision;
    private $ocupacion;
    private $empresa_trabajo;
    private $tipo_seguro_salud;
    private $referido_de;
    private $contacto_emergencia;
    private $parentezco_contacto_emergencia;
    private $direccion_contacto_emergencia;
    private $telefono_contacto_emergencia;

    public function __construct() {
        $this->identificacion = null;
        $this->primer_nombre = null;
        $this->segundo_nombre = null;
        $this->apellido_materno = null;
        $this->apellido_paterno = null;
        $this->direccion = null;
        $this->barrio = null;
        $this->parroquia = null;
        $this->canton = null;
        $this->provincia = null;
        $this->zona = null;
        $this->telefono = null;
        $this->fecha_nacimiento = null;
        $this->lugar_nacimiento = null;
        $this->nacionalidad = null;
        $this->grupo_cultural = null;
        $this->edad = null;
        $this->genero = null;
        $this->estado_civil = null;
        $this->instruccion = null;
        $this->fecha_admision = null;
        $this->ocupacion = null;
        $this->empresa_trabajo = null;
        $this->tipo_seguro_salud = null;
        $this->referido_de = null;
        $this->contacto_emergencia = null;
        $this->parentezco_contacto_emergencia = null;
        $this->direccion_contacto_emergencia = null;
        $this->telefono_contacto_emergencia = null;
        $this->setPostParamName("patient");
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function getPrimerNombre() {
        return $this->primer_nombre;
    }

    public function getSegundoNombre() {
        return $this->segundo_nombre;
    }

    public function getApellidoMaterno() {
        return $this->apellido_materno;
    }

    public function getApellidoPaterno() {
        return $this->apellido_paterno;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getBarrio() {
        return $this->barrio;
    }

    public function getParroquia() {
        return $this->parroquia;
    }

    public function getCanton() {
        return $this->canton;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getZona() {
        return $this->zona;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getFechaNacimiento() {
        return $this->fecha_nacimiento;
    }

    public function getLugarNacimiento() {
        return $this->lugar_nacimiento;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function getGrupoCultural() {
        return $this->grupo_cultural;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getEstadoCivil() {
        return $this->estado_civil;
    }

    public function getInstruccion() {
        return $this->instruccion;
    }

    public function getFechaAdmision() {
        return $this->fecha_admision;
    }

    public function getOcupacion() {
        return $this->ocupacion;
    }

    public function getEmpresaTrabajo() {
        return $this->empresa_trabajo;
    }

    public function getTipoSeguroSalud() {
        return $this->tipo_seguro_salud;
    }

    public function getReferidoDe() {
        return $this->referido_de;
    }

    public function getContactoEmergencia() {
        return $this->contacto_emergencia;
    }

    public function getParentezcoContactoEmergencia() {
        return $this->parentezco_contacto_emergencia;
    }

    public function getDireccionContactoEmergencia() {
        return $this->direccion_contacto_emergencia;
    }

    public function getTelefonoContactoEmergencia() {
        return $this->telefono_contacto_emergencia;
    }

        public function getFullName() {
        return "{$this->primer_nombre} {$this->segundo_nombre} {$this->apellido_paterno} {$this->apellido_materno}";
    }

// </editor-fold>

    public function arrayCast($array) {
        parent::arrayCast($array);
        $this->identificacion = (string) $this->__arrayElement("identificacion", $array);
        $this->setIdentifier((string) $this->__arrayElement("identificacion", $array));
        $this->primer_nombre = (string) $this->__arrayElement("primer_nombre", $array);
        $this->segundo_nombre = (string) $this->__arrayElement("segundo_nombre", $array);
        $this->apellido_materno = (string) $this->__arrayElement("apellido_materno", $array);
        $this->apellido_paterno = (string) $this->__arrayElement("apellido_paterno", $array);
        $this->direccion = (string) $this->__arrayElement("direccion", $array);
        $this->barrio = (string) $this->__arrayElement("barrio", $array);
        $this->parroquia = (string) $this->__arrayElement("parroquia", $array);
        $this->canton = (string) $this->__arrayElement("canton", $array);
        $this->provincia = (string) $this->__arrayElement("provincia", $array);
        $this->zona = (string) $this->__arrayElement("zona", $array);
        $this->telefono = (string) $this->__arrayElement("telefono", $array);
        $this->fecha_nacimiento = (string) $this->__arrayElement("fecha_nacimiento", $array);
        $this->lugar_nacimiento = (string) $this->__arrayElement("lugar_nacimiento", $array);
        $this->nacionalidad = (string) $this->__arrayElement("nacionalidad", $array);
        $this->grupo_cultural = (string) $this->__arrayElement("grupo_cultural", $array);
        $this->edad = (int) $this->__arrayElement("edad", $array);
        $this->genero = (string) $this->__arrayElement("genero", $array);
        $this->estado_civil = (string) $this->__arrayElement("estado_civil", $array);
        $this->instruccion = (string) $this->__arrayElement("instruccion", $array);
        $this->fecha_admision = (string) $this->__arrayElement("fecha_admision", $array);
        $this->ocupacion = (string) $this->__arrayElement("ocupacion", $array);
        $this->empresa_trabajo = (string) $this->__arrayElement("empresa_trabajo", $array);
        $this->tipo_seguro_salud = (string) $this->__arrayElement("tipo_seguro_salud", $array);
        $this->referido_de = (string) $this->__arrayElement("referido_de", $array);
        $this->contacto_emergencia = (string) $this->__arrayElement("contacto_emergencia", $array);
        $this->parentezco_contacto_emergencia = (string) $this->__arrayElement("parentezco_contacto_emergencia", $array);
        $this->direccion_contacto_emergencia = (string) $this->__arrayElement("direccion_contacto_emergencia", $array);
        $this->telefono_contacto_emergencia = (string) $this->__arrayElement("telefono_contacto_emergencia", $array);
    }

    public function toListHeader() {
        return [
            "x01" => $this->hasBasicFilter("Identificación"),
            "x02" => $this->hasBasicFilter("Nombres"),
            "x03" => $this->hasAdvancedFilter("!")
        ];
    }

    public function toListRow() {
        return [
            "x01" => $this->identificacion,
            "x02" => $this->primer_nombre,
            "x03" => $this->getStateIcon()
        ];
    }

    protected function arrayContent() {
        return [
            "identificacion" => $this->identificacion,
            "primer_nombre" => $this->primer_nombre,
            "segundo_nombre" => $this->segundo_nombre,
            "apellido_materno" => $this->apellido_materno,
            "apellido_paterno" => $this->apellido_paterno,
            "direccion" => $this->direccion,
            "barrio" => $this->barrio,
            "parroquia" => $this->parroquia,
            "canton" => $this->canton,
            "provincia" => $this->provincia,
            "zona" => $this->zona,
            "telefono" => $this->telefono,
            "fecha_nacimiento" => $this->fecha_nacimiento,
            "lugar_nacimiento" => $this->lugar_nacimiento,
            "nacionalidad" => $this->nacionalidad,
            "grupo_cultural" => $this->grupo_cultural,
            "edad" => $this->edad,
            "genero" => $this->genero,
            "estado_civil" => $this->estado_civil,
            "instruccion" => $this->instruccion,
            "fecha_admision" => $this->fecha_admision,
            "ocupacion" => $this->ocupacion,
            "empresa_trabajo" => $this->empresa_trabajo,
            "tipo_seguro_salud" => $this->tipo_seguro_salud,
            "referido_de" => $this->referido_de,
            "contacto_emergencia" => $this->contacto_emergencia,
            "parentezco_contacto_emergencia" => $this->parentezco_contacto_emergencia,
            "direccion_contacto_emergencia" => $this->direccion_contacto_emergencia,
            "telefono_contacto_emergencia" => $this->telefono_contacto_emergencia,
            "description" => $this->getDescription()
        ];
    }

}

?>