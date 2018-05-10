<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-17:42:23
 * Contact: andresandoval992@gmail.com
 *
 * systemHandler, part of app
 */

namespace app\handler\kernel;

require_once "./handler/myHandler.php";
require_once "./businessLogic/kernelBL.php";

use app\handler;
use app\businessLogic;
use app\data\entities;

final class systemHandler extends handler\myHandler {

    private $logic;

    public function __construct() {
        //$this->logic = new businessLogic\kernelBL();
    }

    private function backupDB() {
        $operations = [
            "downloadFile" => handler\routeHandler::systemHandler_downloadDatabaseBackup()
        ];
        $curdate = \date("\[Y-m-d\]\[H-i-s\]");
        $backupFile = "db-backup\\app_$curdate.backup";
        $logFile = "db-backup\\app_$curdate.log";

        \putenv("PGPASSWORD=" . \DB_PASSWORD);

        $dump = \DB_DUMP;
        $hostName = \DB_HOST_NAME;
        $port = \DB_PORT;
        $username = \DB_USER_NAME;
        $dbName = \DB_NAME;
        $shell = "$dump --host $hostName --port $port --username \"$username\" --role \"$username\" --no-password  --format custom --blobs --encoding UTF8 --verbose --file \"$backupFile\" \"$dbName\" 2> $logFile";
        $output = shell_exec($shell);

        $success = (\file_exists($backupFile) && \file_exists($logFile));
        \putenv("PGPASSWORD");
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "layout" => [
                "success" => $success,
                "backupFile" => "..\\private\\$backupFile",
                "logFile" => "..\\private\\$logFile"
            ]
        ];
    }

    private function help() {
        $operations = [
            "retrievePdf" => handler\routeHandler::systemHandler_retrieveHelpPdf()
        ];
        return [
            "operations" => $this->normalizeActionAccess($operations, true),
            "entity" => ["identifier" => 0]
        ];
    }

    private function retrieveHelpPdf() {
        header("Content-type:application/pdf");
        //header("Content-Disposition:attachment;filename='ayuda.pdf'");

        echo $this->getTemplate("kernel\sys-help.pdf");
        return true;
    }

    protected function routeAction($action) {
        switch ($action) {
            case handler\routeHandler::systemHandler_databaseBackup(): return $this->backupDB();
            case handler\routeHandler::systemHandler_help(): return $this->help();
            case handler\routeHandler::systemHandler_retrieveHelpPdf(): return $this->retrieveHelpPdf();
        }
    }

}

?>