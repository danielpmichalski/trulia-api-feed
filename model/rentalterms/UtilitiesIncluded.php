<?php
require_once('../Element.php');

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

    /**
     * @param mixed $landlord_pays_aircon
     */
    public function setLandlordPaysAircon($landlord_pays_aircon) {
        $this->landlord_pays_aircon = $landlord_pays_aircon;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysAircon() {
        return $this->landlord_pays_aircon;
    }

    /**
     * @param mixed $landlord_pays_broadbandinternet
     */
    public function setLandlordPaysBroadbandinternet($landlord_pays_broadbandinternet) {
        $this->landlord_pays_broadbandinternet = $landlord_pays_broadbandinternet;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysBroadbandinternet() {
        return $this->landlord_pays_broadbandinternet;
    }

    /**
     * @param mixed $landlord_pays_cable
     */
    public function setLandlordPaysCable($landlord_pays_cable) {
        $this->landlord_pays_cable = $landlord_pays_cable;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysCable() {
        return $this->landlord_pays_cable;
    }

    /**
     * @param mixed $landlord_pays_electric
     */
    public function setLandlordPaysElectric($landlord_pays_electric) {
        $this->landlord_pays_electric = $landlord_pays_electric;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysElectric() {
        return $this->landlord_pays_electric;
    }

    /**
     * @param mixed $landlord_pays_gas
     */
    public function setLandlordPaysGas($landlord_pays_gas) {
        $this->landlord_pays_gas = $landlord_pays_gas;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysGas() {
        return $this->landlord_pays_gas;
    }

    /**
     * @param mixed $landlord_pays_heat
     */
    public function setLandlordPaysHeat($landlord_pays_heat) {
        $this->landlord_pays_heat = $landlord_pays_heat;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysHeat() {
        return $this->landlord_pays_heat;
    }

    /**
     * @param mixed $landlord_pays_hotwater
     */
    public function setLandlordPaysHotwater($landlord_pays_hotwater) {
        $this->landlord_pays_hotwater = $landlord_pays_hotwater;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysHotwater() {
        return $this->landlord_pays_hotwater;
    }

    /**
     * @param mixed $landlord_pays_satellite
     */
    public function setLandlordPaysSatellite($landlord_pays_satellite) {
        $this->landlord_pays_satellite = $landlord_pays_satellite;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysSatellite() {
        return $this->landlord_pays_satellite;
    }

    /**
     * @param mixed $landlord_pays_sewer
     */
    public function setLandlordPaysSewer($landlord_pays_sewer) {
        $this->landlord_pays_sewer = $landlord_pays_sewer;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysSewer() {
        return $this->landlord_pays_sewer;
    }

    /**
     * @param mixed $landlord_pays_telephone
     */
    public function setLandlordPaysTelephone($landlord_pays_telephone) {
        $this->landlord_pays_telephone = $landlord_pays_telephone;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysTelephone() {
        return $this->landlord_pays_telephone;
    }

    /**
     * @param mixed $landlord_pays_trash
     */
    public function setLandlordPaysTrash($landlord_pays_trash) {
        $this->landlord_pays_trash = $landlord_pays_trash;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysTrash() {
        return $this->landlord_pays_trash;
    }

    /**
     * @param mixed $landlord_pays_water
     */
    public function setLandlordPaysWater($landlord_pays_water) {
        $this->landlord_pays_water = $landlord_pays_water;
    }

    /**
     * @return mixed
     */
    public function getLandlordPaysWater() {
        return $this->landlord_pays_water;
    }

    /**
     * @param mixed $landlord_utilities_portion_included
     */
    public function setLandlordUtilitiesPortionIncluded($landlord_utilities_portion_included) {
        $this->landlord_utilities_portion_included = $landlord_utilities_portion_included;
    }

    /**
     * @return mixed
     */
    public function getLandlordUtilitiesPortionIncluded() {
        return $this->landlord_utilities_portion_included;
    }
} 