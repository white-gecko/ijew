<?php

require_once 'Date.php';
require_once 'Template.php';

class CalBuilder {
    private $denomination;
    private $startDate;
    private $endDate;

    public function __construct($denomination, $startDate, $endDate) {
        $this->denomination = $denomination;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function buildIcs() {

        $date = new Date();
        $date->denomination = $this->denomination;
        $date->holiday = 1;
        $date->startDay = 1231231241;
        $date->startStamp = 1231231241;
        $date->endStamp = 1231231241;
        $date->name = 'ראש השנה';

        $view = new Template('templates/ics.phtml');
        $view->dates = array(
            $date, $date
        );
	//header('Content-Type: text/calendar; charset=utf-8');
	header('Content-Type: text/plain; charset=utf-8');
        $view->render();
    }
}

?>
