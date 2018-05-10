<?php

namespace app\data\dataAccess;

class myDA {

    private $host;
    private $user;
    private $password;
    private $dbName;
    private $port;
    private $lastNotice;

    public function __construct() {
        $this->host = \DB_HOST_NAME;
        $this->port = \DB_PORT;
        $this->dbName = \DB_NAME;
        $this->user = \DB_USER_NAME;
        $this->password = \DB_PASSWORD;
        $this->lastNotice = null;
    }

    private function setLastNotice($value) {
        $this->lastNotice = \str_replace(["DEBUG:", "LOG:", "INFO:", "NOTICE:", "WARNING:", "EXCEPTION:", "ERROR:"], null, $value);
        $this->lastNotice = \trim($this->lastNotice);
    }

    private function connect() {
        $conn = \pg_connect("host='{$this->host}' port='{$this->port}' dbname='{$this->dbName}' user='{$this->user}' password='{$this->password}'");
        return $conn;
    }

    protected final function query($query) {
        //echo $query;
        $conn = $this->connect();
        $result = null;
        if ($conn != false) {
            $result = \pg_query($conn, $query);
        }
        $this->setLastNotice(\pg_last_notice($conn));
        \pg_close($conn);
        return $result;
    }

    protected final function multiQuery($queries) {
        /* @var $queries array */
        /* @var $results array */

        $conn = $this->connect();
        $results = array();
        if ($conn != false) {
            foreach ($queries as $query) {
                $results[] = \pg_query($conn, $query);
            }
            if (\count($results) == 0) {
                $results = null;
            }
        }
        \pg_close($conn);
        return $results;
    }

    protected final function castVectorQuery($result) {
        if (\pg_num_rows($result) > 0) {
            $ents = array();
            while ($row = \pg_fetch_array($result, null, \PGSQL_ASSOC)) {
                $ents[] = $this->rowCast($row);
            }
            return $ents;
        }
        \pg_free_result($result);
        return null;
    }

    protected final function castSingleVectorQuery($result) {
        $ents = $this->castVectorQuery($result);
        if (!\is_array($ents) || \count($ents) != 1) {
            return null;
        }
        return $ents[0];
    }

    protected final function castScalarQuery($result) {
        if ($result == false) {
            return false;
        }
        if (\pg_num_rows($result) != 1 || \pg_num_fields($result) != 1) {
            return false;
        }
        $row = \pg_fetch_array($result, 0, \PGSQL_NUM);
        if ($row != FALSE) {
            return $row[0];
        }
        \pg_free_result($result);
        return false;
    }

    protected function toPgArray($set) {
        //print_r($set);
        $result = array();
        foreach ($set as $t) {
            if (\is_array($t)) {
                $result[] = $this->toPgArray($t);
            } else {
                $t = \str_replace("'", "\\'", $t); // escape double quote
//                if (!\is_numeric($t)) { // quote only non-numeric values
//                    $t = "'" . $t . "'";
//                }
                $result[] = $t;
            }
        }
        return "{" . \implode(",", $result) . "}"; // format
    }

    protected function rowCast($row) {
        return $row;
    }

    public final function getLastNotice() {
        return $this->lastNotice;
    }

}

?>