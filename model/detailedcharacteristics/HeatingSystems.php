<?php
require_once('../Element.php');

class HeatingSystems extends Element {
    private $has_fireplace;
    private $fireplace_type;
    private $heating_system;
    private $heating_fuel;

    /**
     * @param mixed $fireplace_type
     */
    public function setFireplaceType($fireplace_type) {
        $this->fireplace_type = $fireplace_type;
    }

    /**
     * @return mixed
     */
    public function getFireplaceType() {
        return $this->fireplace_type;
    }

    /**
     * @param mixed $has_fireplace
     */
    public function setHasFireplace($has_fireplace) {
        $this->has_fireplace = $has_fireplace;
    }

    /**
     * @return mixed
     */
    public function getHasFireplace() {
        return $this->has_fireplace;
    }

    /**
     * @param mixed $heating_fuel
     */
    public function setHeatingFuel($heating_fuel) {
        $this->heating_fuel = $heating_fuel;
    }

    /**
     * @return mixed
     */
    public function getHeatingFuel() {
        return $this->heating_fuel;
    }

    /**
     * @param mixed $heating_system
     */
    public function setHeatingSystem($heating_system) {
        $this->heating_system = $heating_system;
    }

    /**
     * @return mixed
     */
    public function getHeatingSystem() {
        return $this->heating_system;
    }
} 