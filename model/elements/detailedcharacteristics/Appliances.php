<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/AdditionalAppliances.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/AdditionalAppliance.php');

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
     * @param mixed $has_dishwasher
     */
    public function setHasDishwasher($has_dishwasher) {
        $this->has_dishwasher = $has_dishwasher;
    }

    /**
     * @return mixed
     */
    public function getHasDishwasher() {
        return $this->has_dishwasher;
    }

    /**
     * @param mixed $has_disposal
     */
    public function setHasDisposal($has_disposal) {
        $this->has_disposal = $has_disposal;
    }

    /**
     * @return mixed
     */
    public function getHasDisposal() {
        return $this->has_disposal;
    }

    /**
     * @param mixed $has_dryer
     */
    public function setHasDryer($has_dryer) {
        $this->has_dryer = $has_dryer;
    }

    /**
     * @return mixed
     */
    public function getHasDryer() {
        return $this->has_dryer;
    }

    /**
     * @param mixed $has_microwave
     */
    public function setHasMicrowave($has_microwave) {
        $this->has_microwave = $has_microwave;
    }

    /**
     * @return mixed
     */
    public function getHasMicrowave() {
        return $this->has_microwave;
    }

    /**
     * @param mixed $has_refrigerator
     */
    public function setHasRefrigerator($has_refrigerator) {
        $this->has_refrigerator = $has_refrigerator;
    }

    /**
     * @return mixed
     */
    public function getHasRefrigerator() {
        return $this->has_refrigerator;
    }

    /**
     * @param mixed $has_washer
     */
    public function setHasWasher($has_washer) {
        $this->has_washer = $has_washer;
    }

    /**
     * @return mixed
     */
    public function getHasWasher() {
        return $this->has_washer;
    }

    /**
     * @param mixed $range_type
     */
    public function setRangeType($range_type) {
        $this->range_type = $range_type;
    }

    /**
     * @return mixed
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