<detailed-characteristics>
{assign var="appliances" value="{$detailed_characteristics->getAppliances()}"}
    <appliances>
        <has-washer>{if $appliances->getHasWasher()}yes{else}no{/if}</has-washer>
        <has-dryer>{if $appliances->getHasDryer()}yes{else}no{/if}</has-dryer>
        <has-dishwasher>{if $appliances->getHasDishwasher()}yes{else}no{/if}</has-dishwasher>
        <has-refrigerator>{if $appliances->getHasRefrigerator()}yes{else}no{/if}</has-refrigerator>
        <has-disposal>{if $appliances->getHasDisposal()}yes{else}no{/if}</has-disposal>
        <has-microwave>{if $appliances->getHasMicrowave()}yes{else}no{/if}</has-microwave>
        <range-type>{$appliances->getRangeType()}</range-type>
        <appliances-comments>{$appliances->getAppliancesComments()}</appliances-comments>
{assign var="additional_appliances" value="{$appliances->getAdditionalAppliances()}"}
        <additional-appliances>
{foreach $additional_appliances as $additional_appliance}
            <additional-appliance>
                <additional-appliance-name>{$additional_appliance->getName()}</additional-appliance-name>
                <additional-appliance-description>{$additional_appliance->getDescription()}</additional-appliance-description>
            </additional-appliance>
{/foreach}
        </additional-appliances>
    </appliances>
{assign var="cooling_systems" value="{$detailed_characteristics->getCoolingSystems()}"}
    <cooling-systems>
        <has-air-conditioning>{if $cooling_systems->getHasAirConditioning()}yes{else}no{/if}</has-air-conditioning>
        <has-ceiling-fan>{if $cooling_systems->getHasCeilingFan()}yes{else}no{/if}</has-ceiling-fan>
        <other-cooling>{$cooling_systems->getOtherCooling()}</other-cooling>
    </cooling-systems>
{assign var="heating_systems" value="{$detailed_characteristics->getHeatingSystems()}"}
    <heating-systems>
        <has-fireplace>{if $heating_systems->getHasFireplace()}yes{else}no{/if}</has-fireplace>
        <fireplace-type>{$heating_systems->getFireplaceType()}</fireplace-type>
        <heating-system>{$heating_systems->getHeatingSystem()}</heating-system>
        <heating-fuel>{$heating_systems->getHeatingFuel()}</heating-fuel>
    </heating-systems>
    <floor-coverings>{$detailed_characteristics->getFloorCoverings()}</floor-coverings>
    <total-unit-parking-spaces>{$detailed_characteristics->getTotalUnitParkingSpaces()|string_format:"%d"}</total-unit-parking-spaces>
    <has-garage>{if $detailed_characteristics->getHasGarage()}yes{else}no{/if}</has-garage>
    <garage-type>{$detailed_characteristics->getGarageType()}</garage-type>
{assign var="parking_types" value="{$detailed_characteristics->getParkingTypes()}"}
    <parking-types>
{foreach $parking_types as $parking_type}
        <parking-type></parking-type>
{/foreach}
    </parking-types>
    <has-assigned-parking-space>{if $detailed_characteristics->getHasAssignedParkingSpace()}yes{else}no{/if}</has-assigned-parking-space>
    <parking-space-fee>{$detailed_characteristics->getParkingSpaceFee()}</parking-space-fee>
    <assigned-parking-space-cost>{$detailed_characteristics->getAssignedParkingSpaceCost()|string_format:"%d"}</assigned-parking-space-cost>
    <parking-comment>{$detailed_characteristics->getParkingComment()}</parking-comment>
    <foundation-type>{$detailed_characteristics->getFoundationType()}</foundation-type>
    <roof-type>{$detailed_characteristics->getRoofType()}</roof-type>
    <architecture-style>{$detailed_characteristics->getArchitectureStyle()}</architecture-style>
    <exterior-type>{$detailed_characteristics->getExteriorType()}</exterior-type>
    <room-count>{$detailed_characteristics->getRoomCount()|string_format:"%d"}</room-count>
{assign var="rooms" value="{$detailed_characteristics->getRooms()}"}
    <rooms>
{foreach $rooms as $room}
        <room>
            <room-type>{$room->getType()}</room-type>
            <room-size>{$room->getSize()}</room-size>
            <room-description>{$room->getDescription()}</room-description>
        </room>
{/foreach}
    </rooms>
    <year-updated>{$detailed_characteristics->getYearUpdated()}</year-updated>
    <total-units-in-building>{$detailed_characteristics->getTotalUnitsInBuilding()|string_format:"%d"}</total-units-in-building>
    <total-floors-in-building>{$detailed_characteristics->getTotalFloorsInBuilding()|string_format:"%d"}</total-floors-in-building>
    <num-floors-in-unit>{$detailed_characteristics->getNumFloorsInUnit()|string_format:"%d"}</num-floors-in-unit>
    <has-attic>{if $detailed_characteristics->getHasAttic()}yes{else}no{/if}</has-attic>
    <has-balcony>{if $detailed_characteristics->getHasBalcony()}yes{else}no{/if}</has-balcony>
    <has-barbeque-area>{if $detailed_characteristics->getHasBarbequeArea()}yes{else}no{/if}</has-barbeque-area>
    <has-basement>{if $detailed_characteristics->getHasBasement()}yes{else}no{/if}</has-basement>
    <has-cable-satellite>{if $detailed_characteristics->getHasCableSatellite()}yes{else}no{/if}</has-cable-satellite>
    <has-courtyard>{if $detailed_characteristics->getHasCourtyard()}yes{else}no{/if}</has-courtyard>
    <has-deck>{if $detailed_characteristics->getHasDeck()}yes{else}no{/if}</has-deck>
    <has-disabled-access>{if $detailed_characteristics->getHasDisabledAccess()}yes{else}no{/if}</has-disabled-access>
    <has-dock>{if $detailed_characteristics->getHasDock()}yes{else}no{/if}</has-dock>
    <has-doublepane-windows>{if $detailed_characteristics->getHasDoublepaneWindows()}yes{else}no{/if}</has-doublepane-windows>
    <has-garden>{if $detailed_characteristics->getHasGarden()}yes{else}no{/if}</has-garden>
    <has-gated-entry>{if $detailed_characteristics->getHasGatedEntry()}yes{else}no{/if}</has-gated-entry>
    <has-greenhouse>{if $detailed_characteristics->getHasGreenhouse()}yes{else}no{/if}</has-greenhouse>
    <has-handrails>{if $detailed_characteristics->getHasHandrails()}yes{else}no{/if}</has-handrails>
    <has-hot-tub-spa>{if $detailed_characteristics->getHasHotTubSpa()}yes{else}no{/if}</has-hot-tub-spa>
    <has-intercom>{if $detailed_characteristics->getHasIntercom()}yes{else}no{/if}</has-intercom>
    <has-jetted-bath-tub>{if $detailed_characteristics->getHasJettedBathTub()}yes{else}no{/if}</has-jetted-bath-tub>
    <has-lawn>{if $detailed_characteristics->getHasLawn()}yes{else}no{/if}</has-lawn>
    <has-mother-in-law>{if $detailed_characteristics->getHasMotherInLaw()}yes{else}no{/if}</has-mother-in-law>
    <has-patio>{if $detailed_characteristics->getHasPatio()}yes{else}no{/if}</has-patio>
    <has-pond>{if $detailed_characteristics->getHasPond()}yes{else}no{/if}</has-pond>
    <has-pool>{if $detailed_characteristics->getHasPool()}yes{else}no{/if}</has-pool>
    <has-porch>{if $detailed_characteristics->getHasPorch()}yes{else}no{/if}</has-porch>
    <has-private-balcony>{if $detailed_characteristics->getHasPrivateBalcony()}yes{else}no{/if}</has-private-balcony>
    <has-private-patio>{if $detailed_characteristics->getHasPrivatePatio()}yes{else}no{/if}</has-private-patio>
    <has-rv-parking>{if $detailed_characteristics->getHasRvParking()}yes{else}no{/if}</has-rv-parking>
    <has-sauna>{if $detailed_characteristics->getHasSauna()}yes{else}no{/if}</has-sauna>
    <has-security-system>{if $detailed_characteristics->getHasSecuritySystem()}yes{else}no{/if}</has-security-system>
    <has-skylight>{if $detailed_characteristics->getHasSkylight()}yes{else}no{/if}</has-skylight>
    <has-sportscourt>{if $detailed_characteristics->getHasSportscourt()}yes{else}no{/if}</has-sportscourt>
    <has-sprinkler-system>{if $detailed_characteristics->getHasSprinklerSystem()}yes{else}no{/if}</has-sprinkler-system>
    <has-terrace>{if $detailed_characteristics->getHasTerrace()}yes{else}no{/if}</has-terrace>
    <has-vaulted-ceiling>{if $detailed_characteristics->getHasVaultedCeiling()}yes{else}no{/if}</has-vaulted-ceiling>
    <has-view>{if $detailed_characteristics->getHasView()}yes{else}no{/if}</has-view>
    <has-washer-dryer-hookup>{if $detailed_characteristics->getHasWasherDryerHookup()}yes{else}no{/if}</has-washer-dryer-hookup>
    <has-wet-bar>{if $detailed_characteristics->getHasWetBar()}yes{else}no{/if}</has-wet-bar>
    <has-window-coverings>{if $detailed_characteristics->getHasWindowCoverings()}yes{else}no{/if}</has-window-coverings>
    <building-has-concierge>{if $detailed_characteristics->getBuildingHasConcierge()}yes{else}no{/if}</building-has-concierge>
    <building-has-doorman>{if $detailed_characteristics->getBuildingHasDoorman()}yes{else}no{/if}</building-has-doorman>
    <building-has-elevator>{if $detailed_characteristics->getBuildingHasElevator()}yes{else}no{/if}</building-has-elevator>
    <building-has-fitness-center>{if $detailed_characteristics->getBuildingHasFitnessCenter()}yes{else}no{/if}</building-has-fitness-center>
    <building-has-on-site-maintenance>{if $detailed_characteristics->getBuildingHasOnSiteMaintenance()}yes{else}no{/if}</building-has-on-site-maintenance>
    <is-waterfront>{if $detailed_characteristics->getIsWaterfront()}yes{else}no{/if}</is-waterfront>
    <is-new-construction>{if $detailed_characteristics->getIsNewConstruction()}yes{else}no{/if}</is-new-construction>
    <furnished>{if $detailed_characteristics->getFurnished()}yes{else}no{/if}</furnished>
    <view-type>{$detailed_characteristics->getViewType()}</view-type>
{assign var="other_amenities" value="{$detailed_characteristics->getOtherAmenities()}"}
    <other-amenities>
{foreach $other_amenities as $other_amenity}
        <other-amenity>{$other_amenity}</other-amenity>
{/foreach}
    </other-amenities>
</detailed-characteristics>