<?php

require_once 'Date.php';
require_once 'Template.php';

class CalBuilder {
    private $_denomination;
    private $_holiday;
    private $_startDate;
    private $_endDate;
    private $_dates;

    public function __construct($denomination, $holiday, $startDate, $endDate) {
        $this->_denomination = $denomination;
        $this->_startDate = $startDate;
        $this->_endDate = $endDate;
        $this->_holiday = $holiday;
    }

    public function build($db) {

        $query = 'SELECT ho.name, ho.denomination, da.id, da.start, da.end
                  FROM holidays ho, dates da
                  WHERE ho.id = da.holiday AND (da.start >= ' . $this->_startDate . ' AND da.start <= ' . $this->_endDate . ')';

        if ($this->_denomination != null) {
            $query.= ' AND ho.denomination = ' . $this->_denomination;
        }
        if ($this->_holiday != null) {
            $query.= ' AND da.holiday = ' . $this->_holiday;
        }

        $query.= ' ORDER BY da.start';
        $result = mysql_query($query, $db); 

        if (!$result) {
            throw new Exception('Problem with query: ' . mysql_error());
        }

        if (mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                $this->_dates[] = new Date($row['id'], $row['name'], $row['denomination'], $row['id'], $row['start'], $row['end']);
            }
        } else {
            $this->_dates = array();
        }
    }

    public function renderIcs() {

        $view = new Template('templates/ics.phtml');
        $view->dates = $this->_dates;
	//header('Content-Type: text/calendar; charset=utf-8');
	header('Content-Type: text/plain; charset=utf-8');
        $view->render();
    }

    public function renderHtml() {
        $view = new Template('templates/list.phtml');
        $view->dates = $this->_dates;
        $view->render();
    }
}

?>
