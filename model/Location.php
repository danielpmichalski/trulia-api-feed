<?php
require_once('Element.php');

class Location extends Element {
    private $city_name;
    private $zipcode;
    private $unit_number;
    private $street_address;
    private $display_name;
    private $county;
    private $state_code;
    private $parcel_id;
    private $building_name;
    private $subdivision;
    private $neighborhood_name;
    private $neighborhood_description;
    private $elevation;
    private $longitude;
    private $latitude;
    private $geocode_type;
    private $directions;

    /**
     * @param String $city_name
     * @param String $zipcode
     */
    public function __construct($city_name, $zipcode) {
        $this->city_name = $city_name;
        $this->zipcode = $zipcode;
    }

    /**
     * @return String
     */
    public function getCityName() {
        return $this->city_name;
    }

    /**
     * @return int
     */
    public function getZipcode() {
        return $this->zipcode;
    }

    /**
     * @return mixed
     */
    public function getBuildingName() {
        return $this->building_name;
    }

    /**
     * @param mixed $building_name
     */
    public function setBuildingName($building_name) {
        $this->building_name = $building_name;
    }

    /**
     * @return mixed
     */
    public function getCounty() {
        return $this->county;
    }

    /**
     * @param mixed $county
     */
    public function setCounty($county) {
        $this->county = $county;
    }

    /**
     * @return mixed
     */
    public function getDirections() {
        return $this->directions;
    }

    /**
     * @param mixed $directions
     */
    public function setDirections($directions) {
        $this->directions = $directions;
    }

    /**
     * @return mixed
     */
    public function getDisplayName() {
        return $this->display_name;
    }

    /**
     * @param mixed $display_name
     */
    public function setDisplayName($display_name) {
        $this->display_name = $display_name;
    }

    /**
     * @return mixed
     */
    public function getElevation() {
        return $this->elevation;
    }

    /**
     * @param mixed $elevation
     */
    public function setElevation($elevation) {
        $this->elevation = $elevation;
    }

    /**
     * @return mixed
     */
    public function getGeocodeType() {
        return $this->geocode_type;
    }

    /**
     * @param mixed $geocode_type
     */
    public function setGeocodeType($geocode_type) {
        $this->geocode_type = $geocode_type;
    }

    /**
     * @return mixed
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getNeighborhoodDescription() {
        return $this->neighborhood_description;
    }

    /**
     * @param mixed $neighborhood_description
     */
    public function setNeighborhoodDescription($neighborhood_description) {
        $this->neighborhood_description = $neighborhood_description;
    }

    /**
     * @return mixed
     */
    public function getNeighborhoodName() {
        return $this->neighborhood_name;
    }

    /**
     * @param mixed $neighborhood_name
     */
    public function setNeighborhoodName($neighborhood_name) {
        $this->neighborhood_name = $neighborhood_name;
    }

    /**
     * @return mixed
     */
    public function getParcelId() {
        return $this->parcel_id;
    }

    /**
     * @param mixed $parcel_id
     */
    public function setParcelId($parcel_id) {
        $this->parcel_id = $parcel_id;
    }

    /**
     * @return mixed
     */
    public function getStateCode() {
        return $this->state_code;
    }

    /**
     * @param mixed $state_code
     */
    public function setStateCode($state_code) {
        $this->state_code = $state_code;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress() {
        return $this->street_address;
    }

    /**
     * @param mixed $street_address
     */
    public function setStreetAddress($street_address) {
        $this->street_address = $street_address;
    }

    /**
     * @return mixed
     */
    public function getSubdivision() {
        return $this->subdivision;
    }

    /**
     * @param mixed $subdivision
     */
    public function setSubdivision($subdivision) {
        $this->subdivision = $subdivision;
    }

    /**
     * @return mixed
     */
    public function getUnitNumber() {
        return $this->unit_number;
    }

    /**
     * @param mixed $unit_number
     */
    public function setUnitNumber($unit_number) {
        $this->unit_number = $unit_number;
    }
}
