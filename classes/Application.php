<?php

require_once 'CalBuilder.php';

class Application {
    private $_db;

    public function __construct($d = null, $s = null) {
        // TODO read params
    }

    public function __destruct() {
        $this->closeDb();
    }

    public function initDb($dbHost, $dbName, $dbUser, $dbPass) {
        $this->_db = mysql_connect($dbHost, $dbUser, $dbPass);
        if (!$this->_db) {
            throw new Exception('Connection to database not possible: ' . mysql_error());
        }

        mysql_set_charset('utf8', $this->_db);

        $success = mysql_select_db($dbName, $this->_db);
        if (!$success) {
            throw new Exception('Not possible to select db "' . $dbName . '": ' . mysql_error());
        }
    }

    public function closeDb() {
        mysql_close($this->_db);
    }

    public function run() {
       
        $builder = new CalBuilder('j', 734973, 800000);
        $builder->build($this->_db);
        $builder->renderIcs();
    }
}

?>
