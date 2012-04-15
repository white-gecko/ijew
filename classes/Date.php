<?php
class Date {
     private static $unixBegin = 719529;

     /**
      * The amount of seconds of a 'normal' day
      * 24*60*60
      */
     private static $secPerDay = 86400;

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
        return floor($this->_start);
    }

    public function getStartStamp() {
        return Date::_serialToUnixTime($this->_start);
    }

    public function getEndStamp() {
        return Date::_serialToUnixTime($this->_end);
    }

    /**
     * Converts the days since year 0 to seconds since January 1st 1970
     */
    private static function _serialToUnixTime($serialDate) {
        // TODO fix leapseconds
        $serialDate-= Date::$unixBegin;
        return $serialDate * Date::$secPerDay;
    }
}
?>
