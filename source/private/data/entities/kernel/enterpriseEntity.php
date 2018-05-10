<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 27/07/2015-17:25:48
 * Contact: andresandoval992@gmail.com
 *
 * enterpriseEntity, part of app
 */

namespace app\data\entities\kernel;

require_once './data/entities/myEntity.php';

use app\data\entities;

final class enterpriseEntity extends entities\myEntity {

    private $identity_number;
    private $name;
    private $business_name;
    private $law_representative;
    private $address;
    private $phone;
    private $email;

    public function __construct() {
        $this->app_identifier = NULL;
        $this->identity_number = NULL;
        $this->name = NULL;
        $this->business_name = NULL;
        $this->law_representative = NULL;
        $this->address = NULL;
        $this->phone = NULL;
        $this->email = NULL;
        $this->setPostParamName("enterprise");
    }

    // <editor-fold defaultstate="collapsed" desc="GETTER">

    public function getIdentityNumber() {
        return $this->identity_number;
    }

    public function getName() {
        return $this->name;
    }

    public function getBusinessName() {
        return $this->business_name;
    }

    public function getLawRepresentative() {
        return $this->law_representative;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

// </editor-fold>

    public function arrayCast($array) {
        $this->identity_number = (string) $array["identity_number"];
        $this->name = (string) $array["name"];
        $this->business_name = (string) $array["business_name"];
        $this->law_representative = (string) $array["law_representative"];
        $this->address = (string) $array["address"];
        $this->phone = (string) $array["phone"];
        $this->email = (string) $array["email"];
        parent::arrayCast($array);
    }

    protected function arrayContent() {
        return [
            "identity_number" => $this->identity_number,
            "name" => $this->name,
            "business_name" => $this->business_name,
            "law_representative" => $this->law_representative,
            "address" => $this->address,
            "phone" => $this->phone,
            "email" => $this->email
        ];
    }

}

?>