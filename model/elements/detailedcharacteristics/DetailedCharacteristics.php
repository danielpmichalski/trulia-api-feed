<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/EmptyElement.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/Appliances.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/CoolingSystems.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/HeatingSystems.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/OtherAmenities.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/ParkingTypes.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/Rooms.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/Room.php');
include_once(MODEL_ROOT . '/enums/ArchitectureStyle.php');
include_once(MODEL_ROOT . '/enums/ExteriorType.php');
include_once(MODEL_ROOT . '/enums/FloorCoverings.php');
include_once(MODEL_ROOT . '/enums/FoundationType.php');
include_once(MODEL_ROOT . '/enums/GarageType.php');

class DetailedCharacteristics extends Element {
    private $appliances;
    private $cooling_systems;
    private $heating_systems;
    private $floor_coverings;
    private $total_unit_parking_spaces;
    private $has_garage;
    private $garage_type;
    private $parking_types;
    private $has_assigned_parking_space;
    private $parking_space_fee;
    private $assigned_parking_space_cost;
    private $parking_comment;
    private $foundation_type;
    private $roof_type;
    private $architecture_style;
    private $exterior_type;
    private $room_count;
    private $rooms;
    private $year_updated;
    private $total_units_in_building;
    private $total_floors_in_building;
    private $num_floors_in_unit;
    private $has_attic;
    private $has_balcony;
    private $has_barbeque_area;
    private $has_basement;
    private $has_cable_satellite;
    private $has_courtyard;
    private $has_deck;
    private $has_disabled_access;
    private $has_dock;
    private $has_doublepane_windows;
    private $has_garden;
    private $has_gated_entry;
    private $has_greenhouse;
    private $has_handrails;
    private $has_hot_tub_spa;
    private $has_intercom;
    private $has_jetted_bath_tub;
    private $has_lawn;
    private $has_mother_in_law;
    private $has_patio;
    private $has_pond;
    private $has_pool;
    private $has_porch;
    private $has_private_balcony;
    private $has_private_patio;
    private $has_rv_parking;
    private $has_sauna;
    private $has_security_system;
    private $has_skylight;
    private $has_sportscourt;
    private $has_sprinkler_system;
    private $has_terrace;
    private $has_vaulted_ceiling;
    private $has_view;
    private $has_washer_dryer_hookup;
    private $has_wet_bar;
    private $has_window_coverings;
    private $building_has_concierge;
    private $building_has_doorman;
    private $building_has_elevator;
    private $building_has_fitness_center;
    private $building_has_on_site_maintenance;
    private $is_waterfront;
    private $is_new_construction;
    private $furnished;
    private $view_type;
    private $other_amenities;

    /**
     * @param Appliances $appliances
     */
    public function setAppliances(Appliances $appliances) {
        $this->appliances = $appliances;
    }

    /**
     * @return Appliances
     */
    public function getAppliances() {
        if ($this->appliances == null) {
            $this->appliances = new Appliances();
        }
        return $this->appliances;
    }

    /**
     * @param ArchitectureStyle $architecture_style
     */
    public function setArchitectureStyle(ArchitectureStyle $architecture_style) {
        $this->architecture_style = $architecture_style;
    }

    /**
     * @return ArchitectureStyle
     */
    public function getArchitectureStyle() {
        return $this->architecture_style;
    }

    /**
     * @param mixed $assigned_parking_space_cost
     */
    public function setAssignedParkingSpaceCost($assigned_parking_space_cost) {
        $this->assigned_parking_space_cost = $assigned_parking_space_cost;
    }

    /**
     * @return mixed
     */
    public function getAssignedParkingSpaceCost() {
        return $this->assigned_parking_space_cost;
    }

    /**
     * @param boolean $building_has_concierge
     */
    public function setBuildingHasConcierge($building_has_concierge) {
        $this->building_has_concierge = $building_has_concierge;
    }

    /**
     * @return boolean
     */
    public function hasBuildingGotConcierge() {
        return $this->building_has_concierge;
    }

    /**
     * @param boolean $building_has_doorman
     */
    public function setBuildingHasDoorman($building_has_doorman) {
        $this->building_has_doorman = $building_has_doorman;
    }

    /**
     * @return boolean
     */
    public function hasBuildingGotDoorman() {
        return $this->building_has_doorman;
    }

    /**
     * @param boolean $building_has_elevator
     */
    public function setBuildingHasElevator($building_has_elevator) {
        $this->building_has_elevator = $building_has_elevator;
    }

    /**
     * @return boolean
     */
    public function hasBuildingGotElevator() {
        return $this->building_has_elevator;
    }

    /**
     * @param boolean $building_has_fitness_center
     */
    public function setBuildingHasFitnessCenter($building_has_fitness_center) {
        $this->building_has_fitness_center = $building_has_fitness_center;
    }

    /**
     * @return boolean
     */
    public function hasBuildingGotFitnessCenter() {
        return $this->building_has_fitness_center;
    }

    /**
     * @param boolean $building_has_on_site_maintenance
     */
    public function setBuildingHasOnSiteMaintenance($building_has_on_site_maintenance) {
        $this->building_has_on_site_maintenance = $building_has_on_site_maintenance;
    }

    /**
     * @return boolean
     */
    public function hasBuildingGotOnSiteMaintenance() {
        return $this->building_has_on_site_maintenance;
    }

    /**
     * @param CoolingSystems $cooling_systems
     */
    public function setCoolingSystems(CoolingSystems $cooling_systems) {
        $this->cooling_systems = $cooling_systems;
    }

    /**
     * @return CoolingSystems
     */
    public function getCoolingSystems() {
        if ($this->cooling_systems == null) {
            $this->cooling_systems = new CoolingSystems();
        }
        return $this->cooling_systems;
    }

    /**
     * @param ExteriorType $exterior_type
     */
    public function setExteriorType(ExteriorType $exterior_type) {
        $this->exterior_type = $exterior_type;
    }

    /**
     * @return ExteriorType
     */
    public function getExteriorType() {
        return $this->exterior_type;
    }

    /**
     * @param FloorCoverings $floor_coverings
     */
    public function setFloorCoverings(FloorCoverings $floor_coverings) {
        $this->floor_coverings = $floor_coverings;
    }

    /**
     * @return FloorCoverings
     */
    public function getFloorCoverings() {
        return $this->floor_coverings;
    }

    /**
     * @param FoundationType $foundation_type
     */
    public function setFoundationType(FoundationType $foundation_type) {
        $this->foundation_type = $foundation_type;
    }

    /**
     * @return FoundationType
     */
    public function getFoundationType() {
        return $this->foundation_type;
    }

    /**
     * @param boolean $furnished
     */
    public function setFurnished($furnished) {
        $this->furnished = $furnished;
    }

    /**
     * @return boolean
     */
    public function isFurnished() {
        return $this->furnished;
    }

    /**
     * @param GarageType $garage_type
     */
    public function setGarageType(GarageType $garage_type) {
        $this->garage_type = $garage_type;
    }

    /**
     * @return GarageType
     */
    public function getGarageType() {
        return $this->garage_type;
    }

    /**
     * @param boolean $has_assigned_parking_space
     */
    public function setAssignedParkingSpace($has_assigned_parking_space) {
        $this->has_assigned_parking_space = $has_assigned_parking_space;
    }

    /**
     * @return boolean
     */
    public function hasAssignedParkingSpace() {
        return $this->has_assigned_parking_space;
    }

    /**
     * @param boolean $has_attic
     */
    public function setAttic($has_attic) {
        $this->has_attic = $has_attic;
    }

    /**
     * @return boolean
     */
    public function hasAttic() {
        return $this->has_attic;
    }

    /**
     * @param boolean $has_balcony
     */
    public function setBalcony($has_balcony) {
        $this->has_balcony = $has_balcony;
    }

    /**
     * @return boolean
     */
    public function hasBalcony() {
        return $this->has_balcony;
    }

    /**
     * @param boolean $has_barbeque_area
     */
    public function setBarbequeArea($has_barbeque_area) {
        $this->has_barbeque_area = $has_barbeque_area;
    }

    /**
     * @return boolean
     */
    public function hasBarbequeArea() {
        return $this->has_barbeque_area;
    }

    /**
     * @param boolean $has_basement
     */
    public function setBasement($has_basement) {
        $this->has_basement = $has_basement;
    }

    /**
     * @return boolean
     */
    public function hasBasement() {
        return $this->has_basement;
    }

    /**
     * @param boolean $has_cable_satellite
     */
    public function setCableSatellite($has_cable_satellite) {
        $this->has_cable_satellite = $has_cable_satellite;
    }

    /**
     * @return boolean
     */
    public function hasCableSatellite() {
        return $this->has_cable_satellite;
    }

    /**
     * @param boolean $has_courtyard
     */
    public function setCourtyard($has_courtyard) {
        $this->has_courtyard = $has_courtyard;
    }

    /**
     * @return boolean
     */
    public function hasCourtyard() {
        return $this->has_courtyard;
    }

    /**
     * @param boolean $has_deck
     */
    public function setDeck($has_deck) {
        $this->has_deck = $has_deck;
    }

    /**
     * @return boolean
     */
    public function hasDeck() {
        return $this->has_deck;
    }

    /**
     * @param boolean $has_disabled_access
     */
    public function setDisabledAccess($has_disabled_access) {
        $this->has_disabled_access = $has_disabled_access;
    }

    /**
     * @return boolean
     */
    public function hasDisabledAccess() {
        return $this->has_disabled_access;
    }

    /**
     * @param boolean $has_dock
     */
    public function setDock($has_dock) {
        $this->has_dock = $has_dock;
    }

    /**
     * @return boolean
     */
    public function hasDock() {
        return $this->has_dock;
    }

    /**
     * @param boolean $has_doublepane_windows
     */
    public function setDoublepaneWindows($has_doublepane_windows) {
        $this->has_doublepane_windows = $has_doublepane_windows;
    }

    /**
     * @return boolean
     */
    public function hasDoublepaneWindows() {
        return $this->has_doublepane_windows;
    }

    /**
     * @param boolean $has_garage
     */
    public function setGarage($has_garage) {
        $this->has_garage = $has_garage;
    }

    /**
     * @return boolean
     */
    public function hasGarage() {
        return $this->has_garage;
    }

    /**
     * @param boolean $has_garden
     */
    public function setGarden($has_garden) {
        $this->has_garden = $has_garden;
    }

    /**
     * @return boolean
     */
    public function hasGarden() {
        return $this->has_garden;
    }

    /**
     * @param boolean $has_gated_entry
     */
    public function setGatedEntry($has_gated_entry) {
        $this->has_gated_entry = $has_gated_entry;
    }

    /**
     * @return boolean
     */
    public function hasGatedEntry() {
        return $this->has_gated_entry;
    }

    /**
     * @param boolean $has_greenhouse
     */
    public function setGreenhouse($has_greenhouse) {
        $this->has_greenhouse = $has_greenhouse;
    }

    /**
     * @return boolean
     */
    public function hasGreenhouse() {
        return $this->has_greenhouse;
    }

    /**
     * @param boolean $has_handrails
     */
    public function setHandrails($has_handrails) {
        $this->has_handrails = $has_handrails;
    }

    /**
     * @return boolean
     */
    public function hasHandrails() {
        return $this->has_handrails;
    }

    /**
     * @param boolean $has_hot_tub_spa
     */
    public function setHotTubSpa($has_hot_tub_spa) {
        $this->has_hot_tub_spa = $has_hot_tub_spa;
    }

    /**
     * @return boolean
     */
    public function hasHotTubSpa() {
        return $this->has_hot_tub_spa;
    }

    /**
     * @param boolean $has_intercom
     */
    public function setIntercom($has_intercom) {
        $this->has_intercom = $has_intercom;
    }

    /**
     * @return boolean
     */
    public function hasIntercom() {
        return $this->has_intercom;
    }

    /**
     * @param boolean $has_jetted_bath_tub
     */
    public function setJettedBathTub($has_jetted_bath_tub) {
        $this->has_jetted_bath_tub = $has_jetted_bath_tub;
    }

    /**
     * @return boolean
     */
    public function hasJettedBathTub() {
        return $this->has_jetted_bath_tub;
    }

    /**
     * @param boolean $has_lawn
     */
    public function setLawn($has_lawn) {
        $this->has_lawn = $has_lawn;
    }

    /**
     * @return boolean
     */
    public function hasLawn() {
        return $this->has_lawn;
    }

    /**
     * @param boolean $has_mother_in_law
     */
    public function setMotherInLaw($has_mother_in_law) {
        $this->has_mother_in_law = $has_mother_in_law;
    }

    /**
     * @return boolean
     */
    public function hasMotherInLaw() {
        return $this->has_mother_in_law;
    }

    /**
     * @param boolean $has_patio
     */
    public function setPatio($has_patio) {
        $this->has_patio = $has_patio;
    }

    /**
     * @return boolean
     */
    public function hasPatio() {
        return $this->has_patio;
    }

    /**
     * @param boolean $has_pond
     */
    public function setPond($has_pond) {
        $this->has_pond = $has_pond;
    }

    /**
     * @return boolean
     */
    public function hasPond() {
        return $this->has_pond;
    }

    /**
     * @param boolean $has_pool
     */
    public function setPool($has_pool) {
        $this->has_pool = $has_pool;
    }

    /**
     * @return boolean
     */
    public function hasPool() {
        return $this->has_pool;
    }

    /**
     * @param boolean $has_porch
     */
    public function setPorch($has_porch) {
        $this->has_porch = $has_porch;
    }

    /**
     * @return boolean
     */
    public function hasPorch() {
        return $this->has_porch;
    }

    /**
     * @param boolean $has_private_balcony
     */
    public function setPrivateBalcony($has_private_balcony) {
        $this->has_private_balcony = $has_private_balcony;
    }

    /**
     * @return boolean
     */
    public function hasPrivateBalcony() {
        return $this->has_private_balcony;
    }

    /**
     * @param boolean $has_private_patio
     */
    public function setPrivatePatio($has_private_patio) {
        $this->has_private_patio = $has_private_patio;
    }

    /**
     * @return boolean
     */
    public function hasPrivatePatio() {
        return $this->has_private_patio;
    }

    /**
     * @param boolean $has_rv_parking
     */
    public function setRvParking($has_rv_parking) {
        $this->has_rv_parking = $has_rv_parking;
    }

    /**
     * @return boolean
     */
    public function hasRvParking() {
        return $this->has_rv_parking;
    }

    /**
     * @param boolean $has_sauna
     */
    public function setSauna($has_sauna) {
        $this->has_sauna = $has_sauna;
    }

    /**
     * @return boolean
     */
    public function hasSauna() {
        return $this->has_sauna;
    }

    /**
     * @param boolean $has_security_system
     */
    public function setSecuritySystem($has_security_system) {
        $this->has_security_system = $has_security_system;
    }

    /**
     * @return boolean
     */
    public function hasSecuritySystem() {
        return $this->has_security_system;
    }

    /**
     * @param boolean $has_skylight
     */
    public function setSkylight($has_skylight) {
        $this->has_skylight = $has_skylight;
    }

    /**
     * @return boolean
     */
    public function hasSkylight() {
        return $this->has_skylight;
    }

    /**
     * @param boolean $has_sportscourt
     */
    public function setSportscourt($has_sportscourt) {
        $this->has_sportscourt = $has_sportscourt;
    }

    /**
     * @return boolean
     */
    public function hasSportscourt() {
        return $this->has_sportscourt;
    }

    /**
     * @param boolean $has_sprinkler_system
     */
    public function setSprinklerSystem($has_sprinkler_system) {
        $this->has_sprinkler_system = $has_sprinkler_system;
    }

    /**
     * @return boolean
     */
    public function hasSprinklerSystem() {
        return $this->has_sprinkler_system;
    }

    /**
     * @param boolean $has_terrace
     */
    public function setTerrace($has_terrace) {
        $this->has_terrace = $has_terrace;
    }

    /**
     * @return boolean
     */
    public function hasTerrace() {
        return $this->has_terrace;
    }

    /**
     * @param boolean $has_vaulted_ceiling
     */
    public function setVaultedCeiling($has_vaulted_ceiling) {
        $this->has_vaulted_ceiling = $has_vaulted_ceiling;
    }

    /**
     * @return boolean
     */
    public function hasVaultedCeiling() {
        return $this->has_vaulted_ceiling;
    }

    /**
     * @param boolean $has_view
     */
    public function setView($has_view) {
        $this->has_view = $has_view;
    }

    /**
     * @return boolean
     */
    public function hasView() {
        return $this->has_view;
    }

    /**
     * @param boolean $has_washer_dryer_hookup
     */
    public function setWasherDryerHookup($has_washer_dryer_hookup) {
        $this->has_washer_dryer_hookup = $has_washer_dryer_hookup;
    }

    /**
     * @return boolean
     */
    public function hasWasherDryerHookup() {
        return $this->has_washer_dryer_hookup;
    }

    /**
     * @param boolean $has_wet_bar
     */
    public function setWetBar($has_wet_bar) {
        $this->has_wet_bar = $has_wet_bar;
    }

    /**
     * @return boolean
     */
    public function hasWetBar() {
        return $this->has_wet_bar;
    }

    /**
     * @param boolean $has_window_coverings
     */
    public function setWindowCoverings($has_window_coverings) {
        $this->has_window_coverings = $has_window_coverings;
    }

    /**
     * @return boolean
     */
    public function hasWindowCoverings() {
        return $this->has_window_coverings;
    }

    /**
     * @param HeatingSystems $heating_systems
     */
    public function setHeatingSystems(HeatingSystems $heating_systems) {
        $this->heating_systems = $heating_systems;
    }

    /**
     * @return HeatingSystems
     */
    public function getHeatingSystems() {
        if ($this->heating_systems == null) {
            $this->heating_systems = new HeatingSystems();
        }
        return $this->heating_systems;
    }

    /**
     * @param boolean $is_new_construction
     */
    public function setNewConstruction($is_new_construction) {
        $this->is_new_construction = $is_new_construction;
    }

    /**
     * @return boolean
     */
    public function isNewConstruction() {
        return $this->is_new_construction;
    }

    /**
     * @param boolean $is_waterfront
     */
    public function setWaterfront($is_waterfront) {
        $this->is_waterfront = $is_waterfront;
    }

    /**
     * @return boolean
     */
    public function isWaterfront() {
        return $this->is_waterfront;
    }

    /**
     * @param mixed $num_floors_in_unit
     */
    public function setNumFloorsInUnit($num_floors_in_unit) {
        $this->num_floors_in_unit = $num_floors_in_unit;
    }

    /**
     * @return mixed
     */
    public function getNumFloorsInUnit() {
        return $this->num_floors_in_unit;
    }

    /**
     * @param OtherAmenities $other_amenities
     */
    public function setOtherAmenities(OtherAmenities $other_amenities) {
        $this->other_amenities = $other_amenities;
    }

    /**
     * @return mixed
     */
    public function getOtherAmenities() {
        if ($this->other_amenities == null) {
            $this->other_amenities = new OtherAmenities(new EmptyElement());
        }
        return $this->other_amenities->getAll();
    }

    /**
     * @param mixed $parking_comment
     */
    public function setParkingComment($parking_comment) {
        $this->parking_comment = $parking_comment;
    }

    /**
     * @return mixed
     */
    public function getParkingComment() {
        return $this->parking_comment;
    }

    /**
     * @param ParkingSpaceFee $parking_space_fee
     */
    public function setParkingSpaceFee(ParkingSpaceFee $parking_space_fee) {
        $this->parking_space_fee = $parking_space_fee;
    }

    /**
     * @return ParkingSpaceFee
     */
    public function getParkingSpaceFee() {
        return $this->parking_space_fee;
    }

    /**
     * @param ParkingTypes $parking_types
     */
    public function setParkingTypes(ParkingTypes $parking_types) {
        $this->parking_types = $parking_types;
    }

    /**
     * @return ParkingTypes
     */
    public function getParkingTypes() {
        if ($this->parking_types == null) {
            $this->parking_types = new ParkingTypes(new EmptyElement());
        }
        return $this->parking_types->getAll();
    }

    /**
     * @param mixed $roof_type
     */
    public function setRoofType($roof_type) {
        $this->roof_type = $roof_type;
    }

    /**
     * @return mixed
     */
    public function getRoofType() {
        return $this->roof_type;
    }

    /**
     * @param mixed $room_count
     */
    public function setRoomCount($room_count) {
        $this->room_count = $room_count;
    }

    /**
     * @return mixed
     */
    public function getRoomCount() {
        return $this->room_count;
    }

    /**
     * @param Rooms $rooms
     */
    public function setRooms(Rooms $rooms) {
        $this->rooms = $rooms;
    }

    /**
     * @return Rooms
     */
    public function getRooms() {
        if ($this->rooms == null) {
            $this->rooms = new Rooms(new Room());
        }
        return $this->rooms->getAll();
    }

    /**
     * @param mixed $total_floors_in_building
     */
    public function setTotalFloorsInBuilding($total_floors_in_building) {
        $this->total_floors_in_building = $total_floors_in_building;
    }

    /**
     * @return mixed
     */
    public function getTotalFloorsInBuilding() {
        return $this->total_floors_in_building;
    }

    /**
     * @param mixed $total_unit_parking_spaces
     */
    public function setTotalUnitParkingSpaces($total_unit_parking_spaces) {
        $this->total_unit_parking_spaces = $total_unit_parking_spaces;
    }

    /**
     * @return mixed
     */
    public function getTotalUnitParkingSpaces() {
        return $this->total_unit_parking_spaces;
    }

    /**
     * @param mixed $total_units_in_building
     */
    public function setTotalUnitsInBuilding($total_units_in_building) {
        $this->total_units_in_building = $total_units_in_building;
    }

    /**
     * @return mixed
     */
    public function getTotalUnitsInBuilding() {
        return $this->total_units_in_building;
    }

    /**
     * @param mixed $view_type
     */
    public function setViewType($view_type) {
        $this->view_type = $view_type;
    }

    /**
     * @return mixed
     */
    public function getViewType() {
        return $this->view_type;
    }

    /**
     * @param mixed $year_updated
     */
    public function setYearUpdated($year_updated) {
        $this->year_updated = $year_updated;
    }

    /**
     * @return mixed
     */
    public function getYearUpdated() {
        return $this->year_updated;
    }
} 