<?php
include_once('Enum.php');

class DayOfTheWeek implements Enum {
    const SUN = 1;
    const MON = 2;
    const TUE = 3;
    const WED = 4;
    const THU = 5;
    const FRI = 6;
    const SAT = 7;

    private static $values = array(
        DayOfTheWeek::SUN => 'sun',
        DayOfTheWeek::MON => 'mon',
        DayOfTheWeek::TUE => 'tue',
        DayOfTheWeek::WED => 'wed',
        DayOfTheWeek::THU => 'thu',
        DayOfTheWeek::FRI => 'fri',
        DayOfTheWeek::SAT => 'sat',
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return DayOfTheWeek::$values[$this->value];
    }

    function __toString() {
        return $this->getText();
    }
}