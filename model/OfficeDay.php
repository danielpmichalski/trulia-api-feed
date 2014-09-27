<?php
require_once('Element.php');

class OfficeDay extends Element {
    private $day_of_the_week;
    private $office_start_time;
    private $office_end_time;
    private $comment;

    /**
     * @param mixed $coment
     */
    public function setComment($coment) {
        $this->comment = $coment;
    }

    /**
     * @return mixed
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * @param mixed $day_of_the_week
     */
    public function setDayOfTheWeek($day_of_the_week) {
        $this->day_of_the_week = $day_of_the_week;
    }

    /**
     * @return mixed
     */
    public function getDayOfTheWeek() {
        return $this->day_of_the_week;
    }

    /**
     * @param mixed $office_end_time
     */
    public function setOfficeEndTime($office_end_time) {
        $this->office_end_time = $office_end_time;
    }

    /**
     * @return mixed
     */
    public function getOfficeEndTime() {
        return $this->office_end_time;
    }

    /**
     * @param mixed $office_start_time
     */
    public function setOfficeStartTime($office_start_time) {
        $this->office_start_time = $office_start_time;
    }

    /**
     * @return mixed
     */
    public function getOfficeStartTime() {
        return $this->office_start_time;
    }
} 