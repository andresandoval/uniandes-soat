<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 09/09/2015-10:50:44
 * Contact: andresandoval992@gmail.com
 *
 * accessBL, part of app
 */

namespace app\businessLogic;

require_once "./businessLogic/myBL.php";
require_once "./data/dataAccess/kernel/accessDA.php";

use app\data\dataAccess;

final class accessBL extends myBL {


    public function validateAccess($actionIdentifier, $setError = true) {

        /* @var $validate \app\data\entities\kernel\accessEntity */

        $session = $this->isSessionAlive();
        $da = new dataAccess\kernel\accessDA();
        $validate = $da->validateAccess($actionIdentifier, $session ? $this->getSessionUserId() : 0, $session ? $this->getSessionProfileId() : 0, $session ? $this->getSessionDepartmentId() : 0, $this->getCurrentAppId(), $session ? 1 : 0);
        if (\is_null($validate)) {
            return $setError ? $this->setError(500, "Error de aplicación no controlado") : false;
        }
        if ($validate->success) {
            return true;
        }
        $frontEndCallback = null;
        switch ($validate->callback) {
            case "logout":
                $this->simpleLogOutUser();
                $frontEndCallback = "window.location.reload();";
                break;
        }
        return $setError ? $this->setError(404, $validate->content) : false;
    }

}

?>