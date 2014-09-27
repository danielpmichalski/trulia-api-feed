<?php
require_once('Element.php');

class Details extends Element {
    private $price;
    private $num_bedrooms;
    private $num_fullbathrooms;
    private $num_halfbathrooms;
    private $num_bathrooms;
    private $living_area_square_feet;
    private $date_listed;
    private $property_type;
    private $description;
    private $listing_disclaimer;
    private $mls_id;
    private $provider_listingid;
    private $mls_name;
    private $lot_size;
    private $listing_title;
    private $year_built;
    private $date_available;
    private $date_sold;
    private $sale_price;

    public function __construct($price) {
        $this->price = $price;
    }

    /**
     * @param mixed $date_available
     */
    public function setDateAvailable($date_available) {
        $this->date_available = $date_available;
    }

    /**
     * @return mixed
     */
    public function getDateAvailable() {
        return $this->date_available;
    }

    /**
     * @param mixed $date_listed
     */
    public function setDateListed($date_listed) {
        $this->date_listed = $date_listed;
    }

    /**
     * @return mixed
     */
    public function getDateListed() {
        return $this->date_listed;
    }

    /**
     * @param mixed $date_sold
     */
    public function setDateSold($date_sold) {
        $this->date_sold = $date_sold;
    }

    /**
     * @return mixed
     */
    public function getDateSold() {
        return $this->date_sold;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $listing_disclaimer
     */
    public function setListingDisclaimer($listing_disclaimer) {
        $this->listing_disclaimer = $listing_disclaimer;
    }

    /**
     * @return mixed
     */
    public function getListingDisclaimer() {
        return $this->listing_disclaimer;
    }

    /**
     * @param mixed $listing_title
     */
    public function setListingTitle($listing_title) {
        $this->listing_title = $listing_title;
    }

    /**
     * @return mixed
     */
    public function getListingTitle() {
        return $this->listing_title;
    }

    /**
     * @param mixed $living_area_square_feet
     */
    public function setLivingAreaSquareFeet($living_area_square_feet) {
        $this->living_area_square_feet = $living_area_square_feet;
    }

    /**
     * @return mixed
     */
    public function getLivingAreaSquareFeet() {
        return $this->living_area_square_feet;
    }

    /**
     * @param mixed $lot_size
     */
    public function setLotSize($lot_size) {
        $this->lot_size = $lot_size;
    }

    /**
     * @return mixed
     */
    public function getLotSize() {
        return $this->lot_size;
    }

    /**
     * @param mixed $mls_id
     */
    public function setMlsId($mls_id) {
        $this->mls_id = $mls_id;
    }

    /**
     * @return mixed
     */
    public function getMlsId() {
        return $this->mls_id;
    }

    /**
     * @param mixed $mls_name
     */
    public function setMlsName($mls_name) {
        $this->mls_name = $mls_name;
    }

    /**
     * @return mixed
     */
    public function getMlsName() {
        return $this->mls_name;
    }

    /**
     * @param mixed $num_bathrooms
     */
    public function setNumBathrooms($num_bathrooms) {
        $this->num_bathrooms = $num_bathrooms;
    }

    /**
     * @return mixed
     */
    public function getNumBathrooms() {
        return $this->num_bathrooms;
    }

    /**
     * @param mixed $num_bedrooms
     */
    public function setNumBedrooms($num_bedrooms) {
        $this->num_bedrooms = $num_bedrooms;
    }

    /**
     * @return mixed
     */
    public function getNumBedrooms() {
        return $this->num_bedrooms;
    }

    /**
     * @param mixed $num_fullbathrooms
     */
    public function setNumFullbathrooms($num_fullbathrooms) {
        $this->num_fullbathrooms = $num_fullbathrooms;
    }

    /**
     * @return mixed
     */
    public function getNumFullbathrooms() {
        return $this->num_fullbathrooms;
    }

    /**
     * @param mixed $num_halfbathrooms
     */
    public function setNumHalfbathrooms($num_halfbathrooms) {
        $this->num_halfbathrooms = $num_halfbathrooms;
    }

    /**
     * @return mixed
     */
    public function getNumHalfbathrooms() {
        return $this->num_halfbathrooms;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price) {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $property_type
     */
    public function setPropertyType($property_type) {
        $this->property_type = $property_type;
    }

    /**
     * @return mixed
     */
    public function getPropertyType() {
        return $this->property_type;
    }

    /**
     * @param mixed $provider_listingid
     */
    public function setProviderListingid($provider_listingid) {
        $this->provider_listingid = $provider_listingid;
    }

    /**
     * @return mixed
     */
    public function getProviderListingid() {
        return $this->provider_listingid;
    }

    /**
     * @param mixed $sale_price
     */
    public function setSalePrice($sale_price) {
        $this->sale_price = $sale_price;
    }

    /**
     * @return mixed
     */
    public function getSalePrice() {
        return $this->sale_price;
    }

    /**
     * @param mixed $year_built
     */
    public function setYearBuilt($year_built) {
        $this->year_built = $year_built;
    }

    /**
     * @return mixed
     */
    public function getYearBuilt() {
        return $this->year_built;
    }
}
