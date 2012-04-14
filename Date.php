<?php
class Date {
     private $_denominationId;
     private $_holidayId;
     private $_start;
     private $_end;
     private $_title;
        $date->startDay = 1231231241;
        $date->startStamp = 1231231241;
        $date->endStamp = 1231231241;
        $date->name = 'ראש השנה';

    /**
     * The constructor takes the denominationId and th holidayId to identify the event
     * the start and end are float values in the RAF notation
     * the title is the title or name of the event
     */
    public function __construct($denominationId, $holidayId, $start, $end, $title) {
        $this->_denominationId = $denominationId;
        $this->_holidayId = $holidayId;
        $this->_start = $start;
        $this->_end = $end;
        $this->_title = $title;
    }

    public getDenominationId() {
        return $this->_denominationId;
    }

    public getHolidayId() {
        return $this->_holidayId;
    }

    public getStartDay() {
        // TODO calculate
        return $this->_start;
    }

    public getStartStamp() {
        // TODO calculate
        return $this->_start;
    }

    public getEndStamp() {
        // TODO calculate
        return $this->_end;
    }
}
?>
