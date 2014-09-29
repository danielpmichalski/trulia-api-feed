<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class CoolingSystems extends Element {
    private $has_air_conditioning;
    private $has_ceiling_fan;
    private $other_cooling;

    /**
     * @param mixed $has_air_conditioning
     */
    public function setHasAirConditioning($has_air_conditioning) {
        $this->has_air_conditioning = $has_air_conditioning;
    }

    /**
     * @return mixed
     */
    public function getHasAirConditioning() {
        return $this->has_air_conditioning;
    }

    /**
     * @param mixed $has_ceiling_fan
     */
    public function setHasCeilingFan($has_ceiling_fan) {
        $this->has_ceiling_fan = $has_ceiling_fan;
    }

    /**
     * @return mixed
     */
    public function getHasCeilingFan() {
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