<?php
/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-8:58:55
 * Contact: andresandoval992@gmail.com
 *
 * accessEntity, part of app
 */

namespace app\data\entities\kernel;

require_once './data/entities/myEntity.php';

use app\data\entities;

class accessEntity extends entities\myEntity {

    public $success;
    public $content;
    public $callback;

    public function arrayCast($array) {
        $this->success = (bool) $array["success"];
        $this->content = (string) $array["content"];
        $tmpCallback = \trim((string) $array["callback"]);
        $this->callback = \strlen($tmpCallback) <= 0 ? null : $tmpCallback;
        unset($tmpCallback);
    }

}

?>