<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/AdditionalAppliances.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/AdditionalAppliance.php');
include_once(MODEL_ROOT . '/enums/RangeType.php');

class Appliances extends Element {
    private $additional_appliances;
    private $has_washer;
    private $has_dryer;
    private $has_dishwasher;
    private $has_refrigerator;
    private $has_disposal;
    private $has_microwave;
    private $range_type;
    private $appliances_comments;

    /**
     * @param mixed $appliances_comments
     */
    public function setAppliancesComments($appliances_comments) {
        $this->appliances_comments = $appliances_comments;
    }

    /**
     * @return mixed
     */
    public function getAppliancesComments() {
        return $this->appliances_comments;
    }

    /**
     * @param boolean $has_dishwasher
     */
    public function setDishwasher($has_dishwasher) {
        $this->has_dishwasher = $has_dishwasher;
    }

    /**
     * @return boolean
     */
    public function hasDishwasher() {
        return $this->has_dishwasher;
    }

    /**
     * @param boolean $has_disposal
     */
    public function setDisposal($has_disposal) {
        $this->has_disposal = $has_disposal;
    }

    /**
     * @return boolean
     */
    public function hasDisposal() {
        return $this->has_disposal;
    }

    /**
     * @param boolean $has_dryer
     */
    public function setDryer($has_dryer) {
        $this->has_dryer = $has_dryer;
    }

    /**
     * @return boolean
     */
    public function hasDryer() {
        return $this->has_dryer;
    }

    /**
     * @param boolean $has_microwave
     */
    public function setMicrowave($has_microwave) {
        $this->has_microwave = $has_microwave;
    }

    /**
     * @return boolean
     */
    public function hasMicrowave() {
        return $this->has_microwave;
    }

    /**
     * @param boolean $has_refrigerator
     */
    public function setRefrigerator($has_refrigerator) {
        $this->has_refrigerator = $has_refrigerator;
    }

    /**
     * @return boolean
     */
    public function hasRefrigerator() {
        return $this->has_refrigerator;
    }

    /**
     * @param boolean $has_washer
     */
    public function setWasher($has_washer) {
        $this->has_washer = $has_washer;
    }

    /**
     * @return boolean
     */
    public function hasWasher() {
        return $this->has_washer;
    }

    /**
     * @param RangeType $range_type
     */
    public function setRangeType(RangeType $range_type) {
        $this->range_type = $range_type;
    }

    /**
     * @return RangeType
     */
    public function getRangeType() {
        return $this->range_type;
    }

    /**
     * @param AdditionalAppliances $additional_appliances
     */
    public function setAdditionalAppliances(AdditionalAppliances $additional_appliances) {
        $this->additional_appliances = $additional_appliances;
    }

    /**
     * @return AdditionalAppliances
     */
    public function getAdditionalAppliances() {
        if ($this->additional_appliances == null) {
            $this->additional_appliances = new AdditionalAppliances(new AdditionalAppliance());
        }
        return $this->additional_appliances->getAll();
    }
} 