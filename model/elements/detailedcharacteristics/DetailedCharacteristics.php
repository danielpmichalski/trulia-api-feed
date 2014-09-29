<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/Appliances.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/CoolingSystems.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/HeatingSystems.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/OtherAmenities.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/ParkingTypes.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/Rooms.php');
include_once(MODEL_ROOT . '/elements/detailedcharacteristics/Room.php');

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
     * @param mixed $architecture_style
     */
    public function setArchitectureStyle($architecture_style) {
        $this->architecture_style = $architecture_style;
    }

    /**
     * @return mixed
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
     * @param mixed $building_has_concierge
     */
    public function setBuildingHasConcierge($building_has_concierge) {
        $this->building_has_concierge = $building_has_concierge;
    }

    /**
     * @return mixed
     */
    public function getBuildingHasConcierge() {
        return $this->building_has_concierge;
    }

    /**
     * @param mixed $building_has_doorman
     */
    public function setBuildingHasDoorman($building_has_doorman) {
        $this->building_has_doorman = $building_has_doorman;
    }

    /**
     * @return mixed
     */
    public function getBuildingHasDoorman() {
        return $this->building_has_doorman;
    }

    /**
     * @param mixed $building_has_elevator
     */
    public function setBuildingHasElevator($building_has_elevator) {
        $this->building_has_elevator = $building_has_elevator;
    }

    /**
     * @return mixed
     */
    public function getBuildingHasElevator() {
        return $this->building_has_elevator;
    }

    /**
     * @param mixed $building_has_fitness_center
     */
    public function setBuildingHasFitnessCenter($building_has_fitness_center) {
        $this->building_has_fitness_center = $building_has_fitness_center;
    }

    /**
     * @return mixed
     */
    public function getBuildingHasFitnessCenter() {
        return $this->building_has_fitness_center;
    }

    /**
     * @param mixed $building_has_on_site_maintenance
     */
    public function setBuildingHasOnSiteMaintenance($building_has_on_site_maintenance) {
        $this->building_has_on_site_maintenance = $building_has_on_site_maintenance;
    }

    /**
     * @return mixed
     */
    public function getBuildingHasOnSiteMaintenance() {
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
     * @param mixed $exterior_type
     */
    public function setExteriorType($exterior_type) {
        $this->exterior_type = $exterior_type;
    }

    /**
     * @return mixed
     */
    public function getExteriorType() {
        return $this->exterior_type;
    }

    /**
     * @param mixed $floor_coverings
     */
    public function setFloorCoverings($floor_coverings) {
        $this->floor_coverings = $floor_coverings;
    }

    /**
     * @return mixed
     */
    public function getFloorCoverings() {
        return $this->floor_coverings;
    }

    /**
     * @param mixed $foundation_type
     */
    public function setFoundationType($foundation_type) {
        $this->foundation_type = $foundation_type;
    }

    /**
     * @return mixed
     */
    public function getFoundationType() {
        return $this->foundation_type;
    }

    /**
     * @param mixed $furnished
     */
    public function setFurnished($furnished) {
        $this->furnished = $furnished;
    }

    /**
     * @return mixed
     */
    public function getFurnished() {
        return $this->furnished;
    }

    /**
     * @param mixed $garage_type
     */
    public function setGarageType($garage_type) {
        $this->garage_type = $garage_type;
    }

    /**
     * @return mixed
     */
    public function getGarageType() {
        return $this->garage_type;
    }

    /**
     * @param mixed $has_assigned_parking_space
     */
    public function setHasAssignedParkingSpace($has_assigned_parking_space) {
        $this->has_assigned_parking_space = $has_assigned_parking_space;
    }

    /**
     * @return mixed
     */
    public function getHasAssignedParkingSpace() {
        return $this->has_assigned_parking_space;
    }

    /**
     * @param mixed $has_attic
     */
    public function setHasAttic($has_attic) {
        $this->has_attic = $has_attic;
    }

    /**
     * @return mixed
     */
    public function getHasAttic() {
        return $this->has_attic;
    }

    /**
     * @param mixed $has_balcony
     */
    public function setHasBalcony($has_balcony) {
        $this->has_balcony = $has_balcony;
    }

    /**
     * @return mixed
     */
    public function getHasBalcony() {
        return $this->has_balcony;
    }

    /**
     * @param mixed $has_barbeque_area
     */
    public function setHasBarbequeArea($has_barbeque_area) {
        $this->has_barbeque_area = $has_barbeque_area;
    }

    /**
     * @return mixed
     */
    public function getHasBarbequeArea() {
        return $this->has_barbeque_area;
    }

    /**
     * @param mixed $has_basement
     */
    public function setHasBasement($has_basement) {
        $this->has_basement = $has_basement;
    }

    /**
     * @return mixed
     */
    public function getHasBasement() {
        return $this->has_basement;
    }

    /**
     * @param mixed $has_cable_satellite
     */
    public function setHasCableSatellite($has_cable_satellite) {
        $this->has_cable_satellite = $has_cable_satellite;
    }

    /**
     * @return mixed
     */
    public function getHasCableSatellite() {
        return $this->has_cable_satellite;
    }

    /**
     * @param mixed $has_courtyard
     */
    public function setHasCourtyard($has_courtyard) {
        $this->has_courtyard = $has_courtyard;
    }

    /**
     * @return mixed
     */
    public function getHasCourtyard() {
        return $this->has_courtyard;
    }

    /**
     * @param mixed $has_deck
     */
    public function setHasDeck($has_deck) {
        $this->has_deck = $has_deck;
    }

    /**
     * @return mixed
     */
    public function getHasDeck() {
        return $this->has_deck;
    }

    /**
     * @param mixed $has_disabled_access
     */
    public function setHasDisabledAccess($has_disabled_access) {
        $this->has_disabled_access = $has_disabled_access;
    }

    /**
     * @return mixed
     */
    public function getHasDisabledAccess() {
        return $this->has_disabled_access;
    }

    /**
     * @param mixed $has_dock
     */
    public function setHasDock($has_dock) {
        $this->has_dock = $has_dock;
    }

    /**
     * @return mixed
     */
    public function getHasDock() {
        return $this->has_dock;
    }

    /**
     * @param mixed $has_doublepane_windows
     */
    public function setHasDoublepaneWindows($has_doublepane_windows) {
        $this->has_doublepane_windows = $has_doublepane_windows;
    }

    /**
     * @return mixed
     */
    public function getHasDoublepaneWindows() {
        return $this->has_doublepane_windows;
    }

    /**
     * @param mixed $has_garage
     */
    public function setHasGarage($has_garage) {
        $this->has_garage = $has_garage;
    }

    /**
     * @return mixed
     */
    public function getHasGarage() {
        return $this->has_garage;
    }

    /**
     * @param mixed $has_garden
     */
    public function setHasGarden($has_garden) {
        $this->has_garden = $has_garden;
    }

    /**
     * @return mixed
     */
    public function getHasGarden() {
        return $this->has_garden;
    }

    /**
     * @param mixed $has_gated_entry
     */
    public function setHasGatedEntry($has_gated_entry) {
        $this->has_gated_entry = $has_gated_entry;
    }

    /**
     * @return mixed
     */
    public function getHasGatedEntry() {
        return $this->has_gated_entry;
    }

    /**
     * @param mixed $has_greenhouse
     */
    public function setHasGreenhouse($has_greenhouse) {
        $this->has_greenhouse = $has_greenhouse;
    }

    /**
     * @return mixed
     */
    public function getHasGreenhouse() {
        return $this->has_greenhouse;
    }

    /**
     * @param mixed $has_handrails
     */
    public function setHasHandrails($has_handrails) {
        $this->has_handrails = $has_handrails;
    }

    /**
     * @return mixed
     */
    public function getHasHandrails() {
        return $this->has_handrails;
    }

    /**
     * @param mixed $has_hot_tub_spa
     */
    public function setHasHotTubSpa($has_hot_tub_spa) {
        $this->has_hot_tub_spa = $has_hot_tub_spa;
    }

    /**
     * @return mixed
     */
    public function getHasHotTubSpa() {
        return $this->has_hot_tub_spa;
    }

    /**
     * @param mixed $has_intercom
     */
    public function setHasIntercom($has_intercom) {
        $this->has_intercom = $has_intercom;
    }

    /**
     * @return mixed
     */
    public function getHasIntercom() {
        return $this->has_intercom;
    }

    /**
     * @param mixed $has_jetted_bath_tub
     */
    public function setHasJettedBathTub($has_jetted_bath_tub) {
        $this->has_jetted_bath_tub = $has_jetted_bath_tub;
    }

    /**
     * @return mixed
     */
    public function getHasJettedBathTub() {
        return $this->has_jetted_bath_tub;
    }

    /**
     * @param mixed $has_lawn
     */
    public function setHasLawn($has_lawn) {
        $this->has_lawn = $has_lawn;
    }

    /**
     * @return mixed
     */
    public function getHasLawn() {
        return $this->has_lawn;
    }

    /**
     * @param mixed $has_mother_in_law
     */
    public function setHasMotherInLaw($has_mother_in_law) {
        $this->has_mother_in_law = $has_mother_in_law;
    }

    /**
     * @return mixed
     */
    public function getHasMotherInLaw() {
        return $this->has_mother_in_law;
    }

    /**
     * @param mixed $has_patio
     */
    public function setHasPatio($has_patio) {
        $this->has_patio = $has_patio;
    }

    /**
     * @return mixed
     */
    public function getHasPatio() {
        return $this->has_patio;
    }

    /**
     * @param mixed $has_pond
     */
    public function setHasPond($has_pond) {
        $this->has_pond = $has_pond;
    }

    /**
     * @return mixed
     */
    public function getHasPond() {
        return $this->has_pond;
    }

    /**
     * @param mixed $has_pool
     */
    public function setHasPool($has_pool) {
        $this->has_pool = $has_pool;
    }

    /**
     * @return mixed
     */
    public function getHasPool() {
        return $this->has_pool;
    }

    /**
     * @param mixed $has_porch
     */
    public function setHasPorch($has_porch) {
        $this->has_porch = $has_porch;
    }

    /**
     * @return mixed
     */
    public function getHasPorch() {
        return $this->has_porch;
    }

    /**
     * @param mixed $has_private_balcony
     */
    public function setHasPrivateBalcony($has_private_balcony) {
        $this->has_private_balcony = $has_private_balcony;
    }

    /**
     * @return mixed
     */
    public function getHasPrivateBalcony() {
        return $this->has_private_balcony;
    }

    /**
     * @param mixed $has_private_patio
     */
    public function setHasPrivatePatio($has_private_patio) {
        $this->has_private_patio = $has_private_patio;
    }

    /**
     * @return mixed
     */
    public function getHasPrivatePatio() {
        return $this->has_private_patio;
    }

    /**
     * @param mixed $has_rv_parking
     */
    public function setHasRvParking($has_rv_parking) {
        $this->has_rv_parking = $has_rv_parking;
    }

    /**
     * @return mixed
     */
    public function getHasRvParking() {
        return $this->has_rv_parking;
    }

    /**
     * @param mixed $has_sauna
     */
    public function setHasSauna($has_sauna) {
        $this->has_sauna = $has_sauna;
    }

    /**
     * @return mixed
     */
    public function getHasSauna() {
        return $this->has_sauna;
    }

    /**
     * @param mixed $has_security_system
     */
    public function setHasSecuritySystem($has_security_system) {
        $this->has_security_system = $has_security_system;
    }

    /**
     * @return mixed
     */
    public function getHasSecuritySystem() {
        return $this->has_security_system;
    }

    /**
     * @param mixed $has_skylight
     */
    public function setHasSkylight($has_skylight) {
        $this->has_skylight = $has_skylight;
    }

    /**
     * @return mixed
     */
    public function getHasSkylight() {
        return $this->has_skylight;
    }

    /**
     * @param mixed $has_sportscourt
     */
    public function setHasSportscourt($has_sportscourt) {
        $this->has_sportscourt = $has_sportscourt;
    }

    /**
     * @return mixed
     */
    public function getHasSportscourt() {
        return $this->has_sportscourt;
    }

    /**
     * @param mixed $has_sprinkler_system
     */
    public function setHasSprinklerSystem($has_sprinkler_system) {
        $this->has_sprinkler_system = $has_sprinkler_system;
    }

    /**
     * @return mixed
     */
    public function getHasSprinklerSystem() {
        return $this->has_sprinkler_system;
    }

    /**
     * @param mixed $has_terrace
     */
    public function setHasTerrace($has_terrace) {
        $this->has_terrace = $has_terrace;
    }

    /**
     * @return mixed
     */
    public function getHasTerrace() {
        return $this->has_terrace;
    }

    /**
     * @param mixed $has_vaulted_ceiling
     */
    public function setHasVaultedCeiling($has_vaulted_ceiling) {
        $this->has_vaulted_ceiling = $has_vaulted_ceiling;
    }

    /**
     * @return mixed
     */
    public function getHasVaultedCeiling() {
        return $this->has_vaulted_ceiling;
    }

    /**
     * @param mixed $has_view
     */
    public function setHasView($has_view) {
        $this->has_view = $has_view;
    }

    /**
     * @return mixed
     */
    public function getHasView() {
        return $this->has_view;
    }

    /**
     * @param mixed $has_washer_dryer_hookup
     */
    public function setHasWasherDryerHookup($has_washer_dryer_hookup) {
        $this->has_washer_dryer_hookup = $has_washer_dryer_hookup;
    }

    /**
     * @return mixed
     */
    public function getHasWasherDryerHookup() {
        return $this->has_washer_dryer_hookup;
    }

    /**
     * @param mixed $has_wet_bar
     */
    public function setHasWetBar($has_wet_bar) {
        $this->has_wet_bar = $has_wet_bar;
    }

    /**
     * @return mixed
     */
    public function getHasWetBar() {
        return $this->has_wet_bar;
    }

    /**
     * @param mixed $has_window_coverings
     */
    public function setHasWindowCoverings($has_window_coverings) {
        $this->has_window_coverings = $has_window_coverings;
    }

    /**
     * @return mixed
     */
    public function getHasWindowCoverings() {
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
     * @param mixed $is_new_construction
     */
    public function setIsNewConstruction($is_new_construction) {
        $this->is_new_construction = $is_new_construction;
    }

    /**
     * @return mixed
     */
    public function getIsNewConstruction() {
        return $this->is_new_construction;
    }

    /**
     * @param mixed $is_waterfront
     */
    public function setIsWaterfront($is_waterfront) {
        $this->is_waterfront = $is_waterfront;
    }

    /**
     * @return mixed
     */
    public function getIsWaterfront() {
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
     * @param mixed $parking_space_fee
     */
    public function setParkingSpaceFee($parking_space_fee) {
        $this->parking_space_fee = $parking_space_fee;
    }

    /**
     * @return mixed
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
            $this->parking_types = new ParkingTypes();
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