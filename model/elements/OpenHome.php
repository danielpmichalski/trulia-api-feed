<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class OpenHome extends Element {
    private $start_time;
    private $end_time;
    private $date;
    private $details;
    private $open_home_appointment_required;

    /**
     * @param mixed $date
     */
    public function setDate($date) {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * @param mixed $details
     */
    public function setDetails($details) {
        $this->details = $details;
    }

    /**
     * @return mixed
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * @param mixed $end_time
     */
    public function setEndTime($end_time) {
        $this->end_time = $end_time;
    }

    /**
     * @return mixed
     */
    public function getEndTime() {
        return $this->end_time;
    }

    /**
     * @param mixed $open_home_appointment_required
     */
    public function setOpenHomeAppointmentRequired($open_home_appointment_required) {
        $this->open_home_appointment_required = $open_home_appointment_required;
    }

    /**
     * @return mixed
     */
    public function getOpenHomeAppointmentRequired() {
        return $this->open_home_appointment_required;
    }

    /**
     * @param mixed $start_time
     */
    public function setStartTime($start_time) {
        $this->start_time = $start_time;
    }

    /**
     * @return mixed
     */
    public function getStartTime() {
        return $this->start_time;
    }
} 