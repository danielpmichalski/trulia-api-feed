<?php
include_once('Enum.php');

class DayOfTheWeek extends Enum {
    const SUN = 1;
    const MON = 2;
    const TUE = 3;
    const WED = 4;
    const THU = 5;
    const FRI = 6;
    const SAT = 7;

    protected $values = array(
        self::SUN => 'sun',
        self::MON => 'mon',
        self::TUE => 'tue',
        self::WED => 'wed',
        self::THU => 'thu',
        self::FRI => 'fri',
        self::SAT => 'sat',
    );
}