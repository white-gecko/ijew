<?php

require_once 'CalBuilder.php';
require_once 'CalEditor.php';

class Application {
    private $_db;
    private $_mode;

    public function __construct($d = null, $h = null, $m = null, $o = null, $f = null) {
        // TODO read params
        $this->_mode = $m;
        $this->_denomination = $d;
        $this->_holiday = $h;
        $this->_fileFormat = $f;
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
        // edit
        if ($this->_mode == 'e') {
            $editor = new CalEditor();
            $editor->setDb($this->_db);
            $editor->renderForm();
        // add
        } else if ($this->_mode == 'a') {
            $id = isset($_POST['holiday']) ? $_POST['holiday'] : null;
            $start = isset($_POST['start']) ? $_POST['start'] : null;
            $startDate = isset($_POST['startDate']) ? $_POST['startDate'] : null;
            //$end = isset($_POST['end']) ? $_POST['end'] : null;
            $duration = isset($_POST['duration']) ? $_POST['duration'] : null;

            if (!$start) {
                $start = Date::stringToSerial($startDate);
            }

            $editor = new CalEditor();
            $editor->setDb($this->_db);
            $editor->addDate($id, $start, ($start + $duration));
        // show
        } else {
            $builder = new CalBuilder(null, $this->_holiday, 734973, 800000);
            $builder->build($this->_db);
            if ($this->_fileFormat == 'html') {
                $builder->renderHtml();
            } else {
                $builder->renderIcs();
            }
        }
    }
}

?>
