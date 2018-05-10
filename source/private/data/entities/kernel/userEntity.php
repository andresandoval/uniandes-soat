<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-17:25:48
 * Contact: andresandoval992@gmail.com
 *
 * userEntity, part of app
 */

namespace app\data\entities\kernel;

require_once './data/entities/myEntity.php';

use app\data\entities;

class userEntity extends entities\myEntity {

    private $login;
    private $profile_identifier;
    private $department_identifier;
    private $name;
    private $last_name;
    private $email;
    private $password;
    //
    private $profile_name;
    private $department_name;

    public function __construct() {
        $this->login = null;
        $this->profile_identifier = null;
        $this->department_identifier = null;
        $this->profile_name = null;
        $this->name = null;
        $this->last_name = null;
        $this->email = null;
        $this->password = null;
        $this->department_name = null;
        $this->setPostParamName("user");
        $this->setLastUpdateDate(\date("d-m-Y"));
    }

//
// <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getLogin() {
        return $this->login;
    }

    public function getProfileIdentifier() {
        return $this->profile_identifier;
    }

    public function getProfileName() {
        return $this->profile_name;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDepartmentIdentifier() {
        return (int) $this->department_identifier;
    }

    public function getFullName() {
        return "{$this->name} {$this->last_name}";
    }

    public function getDepartmentName() {
        return $this->department_name;
    }

// </editor-fold>
//
// <editor-fold defaultstate="collapsed" desc="SETTER">

    public function setProfileName($profile_name) {
        $this->profile_name = $profile_name;
    }

    public function setDepartmentName($value) {
        $this->department_name = $value;
    }

// </editor-fold>
//

    public function changePasswordCast() {
        $post = $this->getArrayFromPost();
        $this->password = (string) $post["password"];
        unset($post);
    }

    public function loginCast() {
        $post = $this->getArrayFromPost();
        $this->login = \substr($post[0], 0, 32);
        $this->password = \substr($post[0], 32, 32);
        unset($post);
    }

    public function arrayCast($array) {
        $this->login = (string) $array["login"];
        $this->profile_identifier = isset($array["profile_identifier"]) ? (int) $array["profile_identifier"] : null;
        $this->department_identifier = isset($array["department_identifier"]) ? (int) $array["department_identifier"] : null;
        $this->name = (string) $array["name"];
        $this->last_name = isset($array["last_name"]) ? (string) $array["last_name"] : null;
        $this->email = (string) $array["email"];
        $this->password = isset($array["password"]) ? (string) $array["password"] : null;
        $this->profile_name = isset($array["profile_name"]) ? (string) $array["profile_name"] : null;
        $this->department_name = isset($array["department_name"]) ? (string) $array["department_name"] : null;
        parent::arrayCast($array);
    }

    public function toListHeader() {
        return [
            "x01" => $this->hasBasicFilter("Login"),
            "x02" => $this->hasBasicFilter("Nombres"),
            "x03" => $this->hasBasicFilter("Perfíl"),
            "x04" => $this->hasBasicFilter("Departamento"),
            "x05" => $this->hasBasicFilter("Email"),
            "x06" => $this->hasAdvancedFilter("!")
        ];
    }

    public function toListRow() {
        return [
            "x01" => $this->login,
            "x02" => $this->name,
            "x03" => $this->profile_name,
            "x04" => $this->department_name,
            "x05" => $this->email,
            "x06" => $this->getStateIcon()
        ];
    }

    public function arrayContent() {
        return [
            "login" => $this->login,
            "profile_identifier" => $this->profile_identifier,
            "profile_name" => $this->profile_name,
            "department_identifier" => $this->department_identifier,
            "department_name" => $this->department_name,
            "name" => $this->name,
            "last_name" => $this->last_name,
            "full_name" => "{$this->name} {$this->last_name}",
            "email" => $this->email,
            "last_update_date" => $this->getLastUpdateDate()
        ];
    }

}

?>