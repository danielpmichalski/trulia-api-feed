<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/enums/FirePlaceType.php');
include_once(MODEL_ROOT . '/enums/HeatingFuel.php');
include_once(MODEL_ROOT . '/enums/HeatingSystem.php');

class HeatingSystems extends Element {
    private $has_fireplace;
    private $fireplace_type;
    private $heating_system;
    private $heating_fuel;

    /**
     * @param FirePlaceType $fireplace_type
     */
    public function setFireplaceType(FirePlaceType $fireplace_type) {
        $this->fireplace_type = $fireplace_type;
    }

    /**
     * @return FirePlaceType
     */
    public function getFireplaceType() {
        return $this->fireplace_type;
    }

    /**
     * @param boolean $has_fireplace
     */
    public function setFireplace($has_fireplace) {
        $this->has_fireplace = $has_fireplace;
    }

    /**
     * @return boolean
     */
    public function hasFireplace() {
        return $this->has_fireplace;
    }

    /**
     * @param HeatingFuel $heating_fuel
     */
    public function setHeatingFuel(HeatingFuel $heating_fuel) {
        $this->heating_fuel = $heating_fuel;
    }

    /**
     * @return HeatingFuel
     */
    public function getHeatingFuel() {
        return $this->heating_fuel;
    }

    /**
     * @param HeatingSystem $heating_system
     */
    public function setHeatingSystem(HeatingSystem $heating_system) {
        $this->heating_system = $heating_system;
    }

    /**
     * @return HeatingSystem
     */
    public function getHeatingSystem() {
        return $this->heating_system;
    }
} 