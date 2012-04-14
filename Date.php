<?php
class Date {
     private $_title;
     private $_denominationId;
     private $_holidayId;
     private $_start;
     private $_end;

    /**
     * The constructor takes the denominationId and th holidayId to identify the event
     * the start and end are float values in the RAF notation
     * the title is the title or name of the event
     */
    public function __construct($title, $denominationId, $holidayId, $start, $end) {
        $this->_title = $title;
        $this->_denominationId = $denominationId;
        $this->_holidayId = $holidayId;
        $this->_start = $start;
        $this->_end = $end;
    }

    public function getTitle() {
        return $this->_title;
    }

    public function getDenominationId() {
        return $this->_denominationId;
    }

    public function getHolidayId() {
        return $this->_holidayId;
    }

    public function getStartDay() {
        // TODO calculate
        return $this->_start;
    }

    public function getStartStamp() {
        // TODO calculate
        return $this->_start;
    }

    public function getEndStamp() {
        // TODO calculate
        return $this->_end;
    }
}
?>
