<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class OfficeDay extends Element {
    private $day_of_the_week;
    private $start_time;
    private $end_time;
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
    public function setEndTime($office_end_time) {
        $this->end_time = $office_end_time;
    }

    /**
     * @return mixed
     */
    public function getEndTime() {
        return $this->end_time;
    }

    /**
     * @param mixed $office_start_time
     */
    public function setStartTime($office_start_time) {
        $this->start_time = $office_start_time;
    }

    /**
     * @return mixed
     */
    public function getStartTime() {
        return $this->start_time;
    }
} 