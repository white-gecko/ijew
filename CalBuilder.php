<?php

require_once 'Date.php';
require_once 'Template.php';

class CalBuilder {
    private $_denomination;
    private $_startDate;
    private $_endDate;
    private $_dates;

    public function __construct($denomination, $startDate, $endDate) {
        $this->_denomination = $denomination;
        $this->_startDate = $startDate;
        $this->_endDate = $endDate;
    }

    public function build() {
        $date1 = new Date('ראש השנה', $this->_denomination, 1, 12351231, 123412341234);
        $date2 = new Date('Ostern', $this->_denomination, 2, 15551231, 165542341234);

        $this->_dates = array(
            $date1, $date2
        );
    }

    public function renderIcs() {

        $view = new Template('templates/ics.phtml');
        $view->dates = $this->_dates;
	//header('Content-Type: text/calendar; charset=utf-8');
	header('Content-Type: text/plain; charset=utf-8');
        $view->render();
    }
}

?>
