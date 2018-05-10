<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-17:31:54
 * Contact: andresandoval992@gmail.com
 *
 * kernelBL, part of app
 */

namespace app\businessLogic;

require_once "./businessLogic/myBL.php";
require_once "./data/dataAccess/kernel/appDA.php";
require_once "./data/dataAccess/kernel/actionDA.php";
require_once "./data/dataAccess/kernel/userDA.php";
require_once "./data/dataAccess/kernel/profileDA.php";
require_once "./data/dataAccess/kernel/enterpriseDA.php";
require_once "./data/dataAccess/kernel/departmentDA.php";
require_once "./data/dataAccess/kernel/catalogDA.php";

use app\data\dataAccess;
use app\data\entities;

final class kernelBL extends myBL {

    //
    // <editor-fold defaultstate="collapsed" desc="ACTION">

    private function getHandlerRegexp($__handler) {
        $handler = \strtoupper($__handler);
        return "/\/\/<editor-fold defaultstate=\"collapsed\" desc=\"$handler\">.*\/\/<\/editor-fold>\s-\s$handler/s";
    }

    private function getCodeReplacement($__code, $__handler, $__new) {
        $handler = \strtoupper($__handler);

        $ret = "//<editor-fold defaultstate=\"collapsed\" desc=\"$handler\">\n\n $__code \n\n//</editor-fold> - $handler";
        if ($__new) {
            $ret .= "\n\n//<editor-fold defaultstate=\"collapsed\" desc=\"EMPTY-HANDLER\">\n\n// new code goes here \n\n//</editor-fold> - EMPTY-HANDLER";
        }

        return $ret;
    }

    private function generateRouteHandlerFile($handler) {
        $da = new dataAccess\kernel\actionDA();
        $actions = $da->getActionByHandler($this->getCurrentAppId(), $handler);
        if (\is_null($actions)) {
            return false;
        }
        $filePath = "handler/routeHandler.php";
        if (!\file_exists($filePath)) {
            $newFilehandler = \fopen($filePath, "w");
            if ($newFilehandler == FALSE) {
                return false;
            }
            \fwrite($newFilehandler, $actions[0]->getRouteHandlerCode());
            \fclose($newFilehandler);
        }
        if (!\file_exists($filePath)) {
            return false;
        }
        $fileContent = \file_get_contents($filePath);
        $regExp = $this->getHandlerRegexp($handler);
        $new = null;

        if (\preg_match($regExp, $fileContent) == 1) {
            $new = false;
        } else {
            $regExp = $this->getHandlerRegexp("empty-handler");
            if (\preg_match($regExp, $fileContent) == 1) {
                $new = true;
            }
        }
        if (\is_null($new)) {

            return false;
        }

        $theCode = $actions[0]->getHandlerCode();
        foreach ($actions as $a) {
            $theCode .= $a->getActionCode();
        }
        $newFileContent = \preg_replace($regExp, $this->getCodeReplacement($theCode, $handler, $new), $fileContent);
        return \file_put_contents($filePath, $newFileContent) != FALSE;
    }

    /**
     * Acciones en base a los parametros de búsqueda
     *
     * @return entities\kernel\actionEntity[]
     */
    public function getAction() {
        $da = new dataAccess\kernel\actionDA();
        return $da->getAction($this->getCurrentAppId(), new entities\listParametersEntity());
    }

    /**
     * Obtiene una accion en base a su identificador
     *
     * @param type string
     * @return entities\kernel\actionEntity
     */
    public function getActionById($identifier) {
        $da = new dataAccess\kernel\actionDA();
        return $da->getActionById($identifier, $this->getCurrentAppId());
    }

    /**
     *
     * @return entities\kernel\actionEntity[]
     */
    public function getAssignedMenuActionByProfileIdRootId() {
        /* @var $a entities\kernel\actionEntity */

        $rootIdentifier = (string) $this->getDataFromPost("__js_root__");
        $da = new dataAccess\kernel\actionDA();
        $actions = $da->getAssignedMenuActionByProfileIdRootId($this->getSessionProfileId(), $this->getCurrentAppId(), $rootIdentifier);
        if (\is_null($actions)) {
            return null;
        }
        $all = [];
        foreach ($actions as $a) {
            $tmp = $a->toMenuTreeNode();
            $all[] = $tmp;
        }
        return $this->successEncode($all);
    }

    /**
     *
     * @return entities\kernel\actionEntity[]
     */
    public function getAllMenuActionByProfileIdRootId() {
        /* @var $a entities\kernel\actionEntity */
        /* @var $root entities\kernel\actionEntity */

        $rootIdentifier = (string) $this->getDataFromPost("root_identifier");
        $profileIdentifier = (int) $this->getDataFromPost("profile_identifier");

        $root = $this->getActionById($rootIdentifier);
        if (\is_null($root)) {
            $root = new entities\kernel\actionEntity();
        }

        $da = new dataAccess\kernel\actionDA();
        $children = $da->getAllMenuActionByProfileIdRootId($profileIdentifier, $this->getCurrentAppId(), $root->getIdentifier());
        $childrenArray = [];
        if (!\is_null($children)) {
            foreach ($children as $a) {
                $childrenArray[] = $a->toProfileFormTreeNode();
            }
        }
        return $this->successEncode($root->toProfileFormTreeNode($childrenArray));
    }

    /**
     *
     * @return entities\kernel\actionEntity[]
     */
    public function getActionByRowIdentifier($multiple = false) {
        $da = new dataAccess\kernel\actionDA();
        $identifiers = $this->getIdentifiersFromPost($multiple);
        if (!$multiple) {
            return $da->getActionById($identifiers, $this->getCurrentAppId());
        }
        $actions = [];
        foreach ($identifiers as $id) {
            $actions[] = $da->getActionById($id, $this->getCurrentAppId());
        }
        return $actions;
    }

    /**
     *
     * @return entities\kernel\actionEntity[]
     */
    public function getActionByAppId() {
        $da = new dataAccess\kernel\actionDA();
        return $da->getActionByAppId($this->getCurrentAppId());
    }

    public function saveAction() {
        $action = new entities\kernel\actionEntity();
        $action->postCast();
        $action->setAppIdentifier($this->getCurrentAppId());
        $action->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\kernel\actionDA();
        $succes = $da->insertAction($action);
        $msg = $da->getLastNotice();

        if ($succes) {
            $msg .= "<br/>";
            $msg .= $this->generateRouteHandlerFile($action->getHandler()) ? "Se actualizó el archivo de rutas" : "No se pudo hacer cambios en el archivo de rutas";
        }

        if ($succes && ($action->getType() == 1 || $action->getType() == 2) && $action->getRunMode() != 2) {
            $filePath = "template/" . $action->getTemplate();
            if (!\file_exists($filePath)) {
                $newFilehandler = \fopen($filePath, "w");
                if ($newFilehandler !== FALSE) {
                    \fclose($newFilehandler);
                }
            }
        }
        return $this->newEncode($succes, $msg);
    }

    public function updateAction() {
        $action = new entities\kernel\actionEntity();
        $action->postCast();
        $action->setAppIdentifier($this->getCurrentAppId());
        $action->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\kernel\actionDA();
        $succes = $da->updateAction($action);
        $msg = $da->getLastNotice();
        if ($succes && $action->hasChangedIdentifier()) {
            $msg .= "<br/>";
            $msg .= $this->generateRouteHandlerFile($action->getHandler()) ? "Se actualizó el archivo de rutas" : "No se pudo hacer cambios en el archivo de rutas";
        }
        if ($succes && ($action->getType() == 1 || $action->getType() == 2) && $action->getRunMode() != 2) {
            $filePath = "template/" . $action->getTemplate();
            if (!\file_exists($filePath)) {
                $newFilehandler = \fopen($filePath, "w");
                if ($newFilehandler !== FALSE) {
                    \fclose($newFilehandler);
                }
            }
        }
        return $this->newEncode($succes, $msg);
    }

    public function changeActionState($status) {
        $__da__ = new dataAccess\kernel\actionDA();
        $__identifier__ = $this->getIdentifiersFromPost(true);
        return $this->newEncode($__da__->changeActionState($__identifier__, $status, $this->getSessionUserId()), $__da__->getLastNotice());
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="APP">

    /**
     *
     * @return entities\kernel\appEntity
     */
    private function getCurrentApp() {
        $da = new dataAccess\kernel\appDA();
        return $da->getAppById($this->getCurrentAppId());
    }

    public function initApp() {
        /* @var $app \app\data\entities\kernel\appEntity */
        /* @var $user entities\kernel\userEntity */

        $session = $this->isSessionAlive();
        $app = $this->getCurrentApp();
        $user = $session ? $this->getSessionUser() : null;
        $operations = [];
        if ($session) {
            $__logout = $this->getActionById(\app\handler\routeHandler::userHandler_logout());
            $operations["logout"] = \is_null($__logout) ? null : $__logout->toActionData();
            $operations["appMenu"] = \app\handler\routeHandler::userHandler_retrieveUserMenu();
        } else {
            $__login = $this->getActionById(\app\handler\routeHandler::userHandler_login());
            $operations["login"] = \is_null($__login) ? null : $__login->toActionData();
        }
        return $this->successEncode([
                    "access" => $session,
                    "app" => $app->toArray(),
                    "user" => \is_null($user) ? null : $user->toArray(),
                    "title" => $session ? "Principal" : "Inicio de sesión",
                    "operations" => $operations
        ]);
    }

    // </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="PROFILE">

    /**
     *
     * @param type $identifier
     * @return entities\kernel\profileEntity
     */
    public function getProfileById($identifier) {
        $da = new dataAccess\kernel\profileDA();
        return $da->getProfileById($identifier, $this->getCurrentAppId());
    }

    public function getProfile() {
        $da = new dataAccess\kernel\profileDA();
        return $da->getProfile($this->getCurrentAppId(), new entities\listParametersEntity());
    }

    public function getProfileByRowIdentifier($multiple = false) {
        $da = new dataAccess\kernel\profileDA();
        $identifiers = $this->getIdentifiersFromPost($multiple);
        if (!$multiple) {
            return $da->getProfileById($identifiers, $this->getCurrentAppId());
        }
        $profiles = [];
        foreach ($identifiers as $id) {
            $profiles[] = $da->getActionById($id, $this->getCurrentAppId());
        }
        return $profiles;
    }

    public function getProfileByAppId() {
        $da = new dataAccess\kernel\profileDA();
        return $da->getProfileByAppId($this->getCurrentAppId());
    }

    public function saveProfile() {
        $profile = new entities\kernel\profileEntity();
        $profile->postCast();
        $profile->setAppIdentifier($this->getCurrentAppId());
        $profile->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\kernel\profileDA();
        return $this->newEncode($da->insertProfile($profile), $da->getLastNotice());
    }

    public function updateProfile() {
        $profile = new entities\kernel\profileEntity();
        $profile->postCast();
        $profile->setAppIdentifier($this->getCurrentAppId());
        $profile->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\kernel\profileDA();
        return $this->newEncode($da->updateProfile($profile), $da->getLastNotice());
    }

    public function changeProfileState($status) {
        $__da__ = new dataAccess\kernel\profileDA();
        $__identifier__ = $this->getIdentifiersFromPost(false);
        return $this->newEncode($__da__->changeProfileState($__identifier__, $status, $this->getSessionUserId()), $__da__->getLastNotice());
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="USER">

    public function loginUser() {
        /* @var $user entities\kernel\userEntity */
        /* @var $app entities\kernel\appEntity */
        /* @var $loginResult entities\kernel\userEntity */
        /* @var $profile entities\kernel\profileEntity */

        $user = new entities\kernel\userEntity();
        $user->loginCast();
        if (\is_null($user->getLogin()) || \is_null($user->getPassword())) {
            return $this->failEncode("Error de parametros de entrada!");
        }
        $userDA = new dataAccess\kernel\userDA();
        $loginResult = $userDA->loginUser($user, $this->getCurrentAppId());
        unset($userDA);
        if (\is_null($loginResult)) {
            return $this->failEncode("La combinación de usuario y contraseña es incorrecta");
        } elseif (!$loginResult->getActive()) {
            return $this->failEncode("El usuario solicitado esta inactivo");
        }
        $profile = $this->getProfileById($loginResult->getProfileIdentifier());
        if (\is_null($profile)) {
            return $this->failEncode("El perfil de usuario solicitado no responde");
        } elseif (!$profile->getActive()) {
            return $this->failEncode("El perfil de usuario solicitado esta inactivo");
        }
        $this->initSession($loginResult->getIdentifier(), $loginResult->getProfileIdentifier(), $loginResult->getDepartmentIdentifier());
        unset($user);
        unset($profile);
        return $this->successEncode("Bienvenido {$loginResult->getName()}..!!");
    }

    public function logoutUser() {
        return $this->simpleLogOutUser() ? $this->successEncode("Se ha cerrado la sesión!!") : $this->failEncode("No se pudo cerrar la sesión");
    }

    public function getUserById($identifier) {
        $da = new dataAccess\kernel\userDA();
        return $da->getUserById($identifier, $this->getCurrentAppId());
    }

    public function getSessionUser() {
        return $this->getUserById($this->getSessionUserId());
    }

    public function getUser() {
        $da = new dataAccess\kernel\userDA();
        return $da->getUser(new entities\listParametersEntity());
    }

    public function processUser() {
        $ent = new entities\kernel\userEntity();
        $ent->postCast();
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\kernel\userDA();
        return $this->newEncode($da->processUser($ent), $da->getLastNotice());
    }

    public function changeUserPassword() {
        $ent = new entities\kernel\userEntity();
        $ent->changePasswordCast();
        $ent->setLastUpdater($this->getSessionUserId());
        $ent->setIdentifier($this->getSessionUserId());
        $da = new dataAccess\kernel\userDA();
        return $this->newEncode($da->changeUserPassword($ent), $da->getLastNotice());
    }

    public function changeUserState($status) {
        $__da__ = new dataAccess\kernel\userDA();
        $__identifier__ = $this->getIdentifiersFromPost(true);
        return $this->newEncode($__da__->changeUserState($__identifier__, $status, $this->getSessionUserId()), $__da__->getLastNotice());
    }

    /**
     *
     * @param bool $multiple
     * @return entities\kernel\userEntity[]
     */
    public function getUserByRowIdentifier($multiple = false) {
        $da = new dataAccess\kernel\userDA();
        $identifiers = $this->getIdentifiersFromPost($multiple);
        if (!$multiple) {
            return $da->getUserById($identifiers, $this->getCurrentAppId());
        }
        $users = [];
        foreach ($identifiers as $id) {
            $users[] = $da->getUserById($id, $this->getCurrentAppId());
        }
        return $users;
    }

    /**
     *
     * @param int $appId
     * @return kernel\userEntity[]
     */
    public function getUserByAppId($appId = null) {
        $da = new dataAccess\kernel\userDA();
        return $da->getUserByAppId($this->nvl($appId, $this->getCurrentAppId()));
    }

    // </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="ENTERPRICE">

    /**
     * Obtiene la empresa a la que esta asociada la aplicación
     *
     * @return entities\kernel\enterpriseEntity
     */
    public function getEnterprise() {
        $da = new dataAccess\kernel\enterpriseDA();
        return $da->getEnterprise();
    }

    public function processEnterprise() {
        $ent = new entities\kernel\enterpriseEntity();
        $ent->postCast();
        $ent->setAppIdentifier($this->getCurrentAppId());
        $ent->setLastUpdater($this->getSessionUserId());
        if (\is_null($ent->getIdentifier())) {
            $ent->setIdentifier($this->getCurrentEnterpriceId());
        }
        $da = new dataAccess\kernel\enterpriseDA();
        return $this->newEncode($da->processEnterprise($ent), $da->getLastNotice());
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="DEPARTMENT">

    /**
     *
     * @return entities\kernel\departmentEntity[]
     */
    public function getDepartment() {
        $da = new dataAccess\kernel\departmentDA();
        return $da->getDepartment($this->getCurrentEnterpriceId(), new entities\listParametersEntity());
    }

    /**
     *
     * Todas las coordinaciones registradas
     *
     * @return entities\kernel\departmentEntity[]
     */
    public function getCoordination() {
        $da = new dataAccess\kernel\departmentDA();
        return $da->getCoordination($this->getCurrentEnterpriceId());
    }

    public function processDepartment() {
        $ent = new entities\kernel\departmentEntity();
        $ent->postCast();
        $ent->setEnterpriseIdentifier($this->getCurrentEnterpriceId());
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\kernel\departmentDA();
        return $this->newEncode($da->processCoordination($ent), $da->getLastNotice());
    }

    /**
     *
     * @return entities\kernel\departmentEntity[]
     */
    public function getDepartmentByRowIdentifier($multiple = false) {
        $da = new dataAccess\kernel\departmentDA();
        $identifiers = $this->getIdentifiersFromPost($multiple);
        if (!$multiple) {
            return $da->getDepartmentById($identifiers);
        }
        $departments = [];
        foreach ($identifiers as $id) {
            $departments[] = $da->getDepartmentById($id);
        }
        return $departments;
    }

    /**
     *
     * @return entities\kernel\departmentEntity[]
     */
    public function getDepartmentByEnterpriseId() {
        $da = new dataAccess\kernel\departmentDA();
        return $da->getDepartmentByEnterpriseId($this->getCurrentEnterpriceId());
    }

// </editor-fold>
    //
    // <editor-fold defaultstate="collapsed" desc="CATALOG">

    /**
     * @return entities\kernel\catalogEntity[]
     */
    public function getCatalogType() {
        $da = new dataAccess\kernel\catalogDA();
        return $da->getCatalogType($this->getCurrentAppId());
    }

    public function getCatalog() {
        $da = new dataAccess\kernel\catalogDA();
        return $da->getCatalog($this->getCurrentAppId(), new entities\listParametersEntity());
    }

    public function getCatalogById($identifier) {
        $da = new dataAccess\kernel\catalogDA();
        return $da->getCatalogById($identifier);
    }

    /**
     *
     * @param type $type
     * @return entities\kernel\catalogEntity[]
     */
    public function getCatalogByType($type) {
        $da = new dataAccess\kernel\catalogDA();
        return $da->getCatalogByType($type);
    }

    /**
     *
     * @return entities\kernel\catalogEntity[]
     */
    public function getCatalogByRowIdentifier($multiple = false) {
        $identifiers = $this->getIdentifiersFromPost($multiple);
        if (!$multiple) {
            return $this->getCatalogById($identifiers);
        }
        $catalog = [];
        foreach ($identifiers as $id) {
            $catalog[] = $this->getCatalogById($id);
        }
        return $catalog;
    }

    public function processCatalog() {
        $ent = new entities\kernel\catalogEntity();
        $ent->postCast();
        $ent->setAppIdentifier($this->getCurrentAppId());
        $ent->setLastUpdater($this->getSessionUserId());
        $da = new dataAccess\kernel\catalogDA();
        return $this->newEncode($da->processCatalog($ent), $da->getLastNotice());
    }

    public function changeCatalogState($status) {
        $__da__ = new dataAccess\kernel\catalogDA();
        $__identifier__ = $this->getIdentifiersFromPost(true);

        return $this->newEncode($__da__->changeCatalogState($__identifier__, $status, $this->getSessionUserId()), $__da__->getLastNotice());
    }

// </editor-fold>
}

?>