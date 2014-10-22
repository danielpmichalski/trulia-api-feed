<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/rentalterms/UtilitiesComments.php');

class UtilitiesIncluded {
    private $landlord_pays_aircon;
    private $landlord_pays_broadbandinternet;
    private $landlord_pays_cable;
    private $landlord_pays_electric;
    private $landlord_pays_gas;
    private $landlord_pays_heat;
    private $landlord_pays_hotwater;
    private $landlord_pays_satellite;
    private $landlord_pays_sewer;
    private $landlord_pays_telephone;
    private $landlord_pays_trash;
    private $landlord_pays_water;
    private $landlord_utilities_portion_included;
    private $utilities_comments;

    /**
     * @param boolean $landlord_pays_aircon
     */
    public function setLandlordPaysAircon($landlord_pays_aircon) {
        $this->landlord_pays_aircon = $landlord_pays_aircon;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingAircon() {
        return $this->landlord_pays_aircon;
    }

    /**
     * @param boolean $landlord_pays_broadbandinternet
     */
    public function setLandlordPaysBroadbandinternet($landlord_pays_broadbandinternet) {
        $this->landlord_pays_broadbandinternet = $landlord_pays_broadbandinternet;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingBroadbandinternet() {
        return $this->landlord_pays_broadbandinternet;
    }

    /**
     * @param boolean $landlord_pays_cable
     */
    public function setLandlordPaysCable($landlord_pays_cable) {
        $this->landlord_pays_cable = $landlord_pays_cable;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingCable() {
        return $this->landlord_pays_cable;
    }

    /**
     * @param boolean $landlord_pays_electric
     */
    public function setLandlordPaysElectric($landlord_pays_electric) {
        $this->landlord_pays_electric = $landlord_pays_electric;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingElectric() {
        return $this->landlord_pays_electric;
    }

    /**
     * @param boolean $landlord_pays_gas
     */
    public function setLandlordPaysGas($landlord_pays_gas) {
        $this->landlord_pays_gas = $landlord_pays_gas;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingGas() {
        return $this->landlord_pays_gas;
    }

    /**
     * @param boolean $landlord_pays_heat
     */
    public function setLandlordPaysHeat($landlord_pays_heat) {
        $this->landlord_pays_heat = $landlord_pays_heat;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingHeat() {
        return $this->landlord_pays_heat;
    }

    /**
     * @param boolean $landlord_pays_hotwater
     */
    public function setLandlordPaysHotwater($landlord_pays_hotwater) {
        $this->landlord_pays_hotwater = $landlord_pays_hotwater;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingHotwater() {
        return $this->landlord_pays_hotwater;
    }

    /**
     * @param boolean $landlord_pays_satellite
     */
    public function setLandlordPaysSatellite($landlord_pays_satellite) {
        $this->landlord_pays_satellite = $landlord_pays_satellite;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingSatellite() {
        return $this->landlord_pays_satellite;
    }

    /**
     * @param boolean $landlord_pays_sewer
     */
    public function setLandlordPaysSewer($landlord_pays_sewer) {
        $this->landlord_pays_sewer = $landlord_pays_sewer;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingSewer() {
        return $this->landlord_pays_sewer;
    }

    /**
     * @param boolean $landlord_pays_telephone
     */
    public function setLandlordPaysTelephone($landlord_pays_telephone) {
        $this->landlord_pays_telephone = $landlord_pays_telephone;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingTelephone() {
        return $this->landlord_pays_telephone;
    }

    /**
     * @param boolean $landlord_pays_trash
     */
    public function setLandlordPaysTrash($landlord_pays_trash) {
        $this->landlord_pays_trash = $landlord_pays_trash;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingTrash() {
        return $this->landlord_pays_trash;
    }

    /**
     * @param boolean $landlord_pays_water
     */
    public function setLandlordPaysWater($landlord_pays_water) {
        $this->landlord_pays_water = $landlord_pays_water;
    }

    /**
     * @return boolean
     */
    public function isLandlordPayingWater() {
        return $this->landlord_pays_water;
    }

    /**
     * @param boolean $landlord_utilities_portion_included
     */
    public function setLandlordUtilitiesPortionIncluded($landlord_utilities_portion_included) {
        $this->landlord_utilities_portion_included = $landlord_utilities_portion_included;
    }

    /**
     * @return boolean
     */
    public function areLandlordUtilitiesPortionIncluded() {
        return $this->landlord_utilities_portion_included;
    }

    /**
     * @param UtilitiesComments $utilities_comments
     */
    public function setUtilitiesComments(UtilitiesComments $utilities_comments) {
        $this->utilities_comments = $utilities_comments;
    }

    /**
     * @return UtilitiesComments
     */
    public function getUtilitiesComments() {
        if ($this->utilities_comments == null) {
            $this->utilities_comments = new UtilitiesComments(new EmptyElement());
        }
        return $this->utilities_comments->getAll();
    }
} 