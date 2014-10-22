<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class CoolingSystems extends Element {
    private $has_air_conditioning;
    private $has_ceiling_fan;
    private $other_cooling;

    /**
     * @param boolean $has_air_conditioning
     */
    public function setAirConditioning($has_air_conditioning) {
        $this->has_air_conditioning = $has_air_conditioning;
    }

    /**
     * @return boolean
     */
    public function hasAirConditioning() {
        return $this->has_air_conditioning;
    }

    /**
     * @param boolean $has_ceiling_fan
     */
    public function setCeilingFan($has_ceiling_fan) {
        $this->has_ceiling_fan = $has_ceiling_fan;
    }

    /**
     * @return boolean
     */
    public function hasCeilingFan() {
        return $this->has_ceiling_fan;
    }

    /**
     * @param mixed $other_cooling
     */
    public function setOtherCooling($other_cooling) {
        $this->other_cooling = $other_cooling;
    }

    /**
     * @return mixed
     */
    public function getOtherCooling() {
        return $this->other_cooling;
    }
} 