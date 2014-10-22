<?php
// Enums
include_once(MODEL_ROOT . '/enums/Status.php');
include_once(MODEL_ROOT . '/enums/ListingType.php');
// Elements
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/Location.php');
include_once(MODEL_ROOT . '/elements/Details.php');
include_once(MODEL_ROOT . '/elements/LandingPage.php');
include_once(MODEL_ROOT . '/elements/Site.php');
include_once(MODEL_ROOT . '/elements/Pictures.php');
include_once(MODEL_ROOT . '/elements/Picture.php');
include_once(MODEL_ROOT . '/elements/VirtualTours.php');
include_once(MODEL_ROOT . '/elements/VirtualTour.php');
include_once(MODEL_ROOT . '/elements/Videos.php');
include_once(MODEL_ROOT . '/elements/Video.php');
include_once(MODEL_ROOT . '/elements/OpenHomes.php');
include_once(MODEL_ROOT . '/elements/OpenHome.php');
include_once(MODEL_ROOT . '/elements/Taxes.php');
include_once(MODEL_ROOT . '/elements/Tax.php');
include_once(MODEL_ROOT . '/elements/HoaFee.php');
include_once(MODEL_ROOT . '/elements/AdditionalFees.php');
include_once(MODEL_ROOT . '/elements/Fee.php');
include_once(MODEL_ROOT . '/elements/Schools.php');
include_once(MODEL_ROOT . '/elements/SchoolDistrict.php');
include_once(MODEL_ROOT . '/elements/FloorplanLayouts.php');
include_once(MODEL_ROOT . '/elements/FloorplanLayout.php');
include_once(MODEL_ROOT . '/elements/Plan.php');
include_once(MODEL_ROOT . '/elements/Spec.php');
include_once(MODEL_ROOT . '/elements/Agent.php');
include_once(MODEL_ROOT . '/elements/Brokerage.php');
include_once(MODEL_ROOT . '/elements/Office.php');
include_once(MODEL_ROOT . '/elements/Franchise.php');
include_once(MODEL_ROOT . '/elements/Builder.php');
include_once(MODEL_ROOT . '/elements/PropertyManager.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/DetailedCharacteristics.php');
include_once(MODEL_ROOT . '/elements/rentalterms/RentalTerms.php');
include_once(MODEL_ROOT . '/elements/AdvertiseWithUs.php');

class Property extends Element {
    private $listing_type;
    private $status;
    private $foreclosure_status;
    private $location;
    private $details;
    private $landing_page;
    private $site;
    private $pictures;
    private $virtual_tours;
    private $videos;
    private $open_homes;
    private $taxes;
    private $hoa_fee;
    private $additional_fees;
    private $schools;
    private $floorplan_layouts;
    private $plan;
    private $spec;
    private $agent;
    private $brokerage;
    private $office;
    private $franchise;
    private $builder;
    private $property_manager;
    private $detailed_characteristics;
    private $rental_terms;
    private $advertise_with_us;

    public function __construct(ListingType $listing_type, Status $status, Location $location, Details $details,
                                LandingPage $landing_page, Agent $agent) {
        $this->listing_type = $listing_type;
        $this->status = $status;
        $this->location = $location;
        $this->details = $details;
        $this->landing_page = $landing_page;
        $this->agent = $agent;
    }

    /**
     * @param AdditionalFees $additional_fees
     */
    public function setAdditionalFees(AdditionalFees $additional_fees) {
        $this->additional_fees = $additional_fees;
    }

    /**
     * @return AdditionalFees
     */
    public function getAdditionalFees() {
        if ($this->additional_fees == null) {
            $this->additional_fees = new AdditionalFees(new Fee());
        }
        return $this->additional_fees->getAll();
    }

    /**
     * @param AdvertiseWithUs $advertise_with_us
     */
    public function setAdvertiseWithUs(AdvertiseWithUs $advertise_with_us) {
        $this->advertise_with_us = $advertise_with_us;
    }

    /**
     * @return AdvertiseWithUs
     */
    public function getAdvertiseWithUs() {
        if ($this->advertise_with_us == null) {
            $this->advertise_with_us = new AdvertiseWithUs();
        }
        return $this->advertise_with_us;
    }

    /**
     * @param Agent $agent
     */
    public function setAgent(Agent $agent) {
        $this->agent = $agent;
    }

    /**
     * @return Agent
     */
    public function getAgent() {
        return $this->agent;
    }

    /**
     * @param Brokerage $brokerage
     */
    public function setBrokerage(Brokerage $brokerage) {
        $this->brokerage = $brokerage;
    }

    /**
     * @return Brokerage
     */
    public function getBrokerage() {
        if ($this->brokerage == null) {
            $this->brokerage = new Brokerage();
        }
        return $this->brokerage;
    }

    /**
     * @param Builder $builder
     */
    public function setBuilder(Builder $builder) {
        $this->builder = $builder;
    }

    /**
     * @return Builder
     */
    public function getBuilder() {
        if ($this->builder == null) {
            $this->builder = new Builder();
        }
        return $this->builder;
    }

    /**
     * @param DetailedCharacteristics $detailed_characteristics
     */
    public function setDetailedCharacteristics(DetailedCharacteristics $detailed_characteristics) {
        $this->detailed_characteristics = $detailed_characteristics;
    }

    /**
     * @return DetailedCharacteristics
     */
    public function getDetailedCharacteristics() {
        if ($this->detailed_characteristics == null) {
            $this->detailed_characteristics = new DetailedCharacteristics();
        }
        return $this->detailed_characteristics;
    }

    /**
     * @param Details $details
     */
    public function setDetails(Details $details) {
        $this->details = $details;
    }

    /**
     * @return Details
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * @param FloorplanLayouts $floorplan_layouts
     */
    public function setFloorplanLayouts(FloorplanLayouts $floorplan_layouts) {
        $this->floorplan_layouts = $floorplan_layouts;
    }

    /**
     * @return FloorplanLayouts
     */
    public function getFloorplanLayouts() {
        if ($this->floorplan_layouts == null) {
            $this->floorplan_layouts = new FloorplanLayouts(new FloorplanLayout());
        }
        return $this->floorplan_layouts->getAll();
    }

    /**
     * @param ForeclosureStatus $foreclosure_status
     */
    public function setForeclosureStatus(ForeclosureStatus $foreclosure_status) {
        $this->foreclosure_status = $foreclosure_status;
    }

    /**
     * @return ForeclosureStatus
     */
    public function getForeclosureStatus() {
        return $this->foreclosure_status;
    }

    /**
     * @param Franchise $franchise
     */
    public function setFranchise(Franchise $franchise) {
        $this->franchise = $franchise;
    }

    /**
     * @return Franchise
     */
    public function getFranchise() {
        if ($this->franchise == null) {
            $this->franchise = new Franchise();
        }
        return $this->franchise;
    }

    /**
     * @param LandingPage $landing_page
     */
    public function setLandingPage(LandingPage $landing_page) {
        $this->landing_page = $landing_page;
    }

    /**
     * @return LandingPage
     */
    public function getLandingPage() {
        return $this->landing_page;
    }

    /**
     * @param ListingType $listing_type
     */
    public function setListingType(ListingType $listing_type) {
        $this->listing_type = $listing_type;
    }

    /**
     * @return ListingType
     */
    public function getListingType() {
        return $this->listing_type;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location) {
        $this->location = $location;
    }

    /**
     * @return Location
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * @param Office $office
     */
    public function setOffice(Office $office) {
        $this->office = $office;
    }

    /**
     * @return Office
     */
    public function getOffice() {
        if ($this->office == null) {
            $this->office = new Office();
        }
        return $this->office;
    }

    /**
     * @param OpenHomes $open_homes
     */
    public function setOpenHomes(OpenHomes $open_homes) {
        $this->open_homes = $open_homes;
    }

    /**
     * @return OpenHomes
     */
    public function getOpenHomes() {
        if ($this->open_homes == null) {
            $this->open_homes = new OpenHomes(new OpenHome());
        }
        return $this->open_homes->getAll();
    }

    /**
     * @param Pictures $pictures
     */
    public function setPictures(Pictures $pictures) {
        $this->pictures = $pictures;
    }

    /**
     * @return Pictures
     */
    public function getPictures() {
        if ($this->pictures == null) {
            $this->pictures = new Pictures(new Picture());
        }
        return $this->pictures->getAll();
    }

    /**
     * @param Plan $plan
     */
    public function setPlan(Plan $plan) {
        $this->plan = $plan;
    }

    /**
     * @return Plan
     */
    public function getPlan() {
        if ($this->plan == null) {
            $this->plan = new Plan();
        }
        return $this->plan;
    }

    /**
     * @param PropertyManager $property_manager
     */
    public function setPropertyManager(PropertyManager $property_manager) {
        $this->property_manager = $property_manager;
    }

    /**
     * @return PropertyManager
     */
    public function getPropertyManager() {
        if ($this->property_manager == null) {
            $this->property_manager = new PropertyManager();
        }
        return $this->property_manager;
    }

    /**
     * @param RentalTerms $rental_terms
     */
    public function setRentalTerms(RentalTerms $rental_terms) {
        $this->rental_terms = $rental_terms;
    }

    /**
     * @return RentalTerms
     */
    public function getRentalTerms() {
        if ($this->rental_terms == null) {
            $this->rental_terms = new RentalTerms();
        }
        return $this->rental_terms;
    }

    /**
     * @param Schools $schools
     */
    public function setSchools(Schools $schools) {
        $this->schools = $schools;
    }

    /**
     * @return Schools
     */
    public function getSchools() {
        if ($this->schools == null) {
            $this->schools = new Schools(new SchoolDistrict());
        }
        return $this->schools->getAll();
    }

    /**
     * @param Site $site
     */
    public function setSite(Site $site) {
        $this->site = $site;
    }

    /**
     * @return Site
     */
    public function getSite() {
        if ($this->site == null) {
            $this->site = new Site();
        }
        return $this->site;
    }

    /**
     * @param Spec $spec
     */
    public function setSpec(Spec $spec) {
        $this->spec = $spec;
    }

    /**
     * @return Spec
     */
    public function getSpec() {
        if ($this->spec == null) {
            $this->spec = new Spec();
        }
        return $this->spec;
    }

    /**
     * @param Status $status
     */
    public function setStatus(Status $status) {
        $this->status = $status;
    }

    /**
     * @return Status
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param Taxes $taxes
     */
    public function setTaxes(Taxes $taxes) {
        $this->taxes = $taxes;
    }

    /**
     * @return Taxes
     */
    public function getTaxes() {
        if ($this->taxes == null) {
            $this->taxes = new Taxes(new Tax());
        }
        return $this->taxes->getAll();
    }

    /**
     * @param Videos $videos
     */
    public function setVideos(Videos $videos) {
        $this->videos = $videos;
    }

    /**
     * @return Videos
     */
    public function getVideos() {
        if ($this->videos == null) {
            $this->videos = new Videos(new Video());
        }
        return $this->videos->getAll();
    }

    /**
     * @param VirtualTours $virtual_tours
     */
    public function setVirtualTours(VirtualTours $virtual_tours) {
        $this->virtual_tours = $virtual_tours;
    }

    /**
     * @return VirtualTours
     */
    public function getVirtualTours() {
        if ($this->virtual_tours == null) {
            $this->virtual_tours = new VirtualTours(new VirtualTour());
        }
        return $this->virtual_tours->getAll();
    }

    /**
     * @param mixed $hoa_fees
     */
    public function setHoaFee($hoa_fees) {
        $this->hoa_fee = $hoa_fees;
    }

    /**
     * @return mixed
     */
    public function getHoaFee() {
        if ($this->hoa_fee == null) {
            $this->hoa_fee = new HoaFee();
        }
        return $this->hoa_fee;
    }
}