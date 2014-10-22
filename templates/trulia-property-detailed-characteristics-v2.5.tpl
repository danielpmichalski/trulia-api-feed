<detailed-characteristics>
{assign var="appliances" value="{$detailed_characteristics->getAppliances()}"}
    <appliances>
        <has-washer>{if $appliances->hasWasher()}yes{else}no{/if}</has-washer>
        <has-dryer>{if $appliances->hasDryer()}yes{else}no{/if}</has-dryer>
        <has-dishwasher>{if $appliances->hasDishwasher()}yes{else}no{/if}</has-dishwasher>
        <has-refrigerator>{if $appliances->hasRefrigerator()}yes{else}no{/if}</has-refrigerator>
        <has-disposal>{if $appliances->hasDisposal()}yes{else}no{/if}</has-disposal>
        <has-microwave>{if $appliances->hasMicrowave()}yes{else}no{/if}</has-microwave>
        <range-type>{$appliances->getRangeType()}</range-type>
        <appliances-comments><![CDATA[{$appliances->getAppliancesComments()}]]></appliances-comments>
{assign var="additional_appliances" value="{$appliances->getAdditionalAppliances()}"}
        <additional-appliances>
{foreach $additional_appliances as $additional_appliance}
            <additional-appliance>
                <additional-appliance-name><![CDATA[{$additional_appliance->getName()}]]></additional-appliance-name>
                <additional-appliance-description><![CDATA[{$additional_appliance->getDescription()}]]></additional-appliance-description>
            </additional-appliance>
{/foreach}
        </additional-appliances>
    </appliances>
{assign var="cooling_systems" value="{$detailed_characteristics->getCoolingSystems()}"}
    <cooling-systems>
        <has-air-conditioning>{if $cooling_systems->hasAirConditioning()}yes{else}no{/if}</has-air-conditioning>
        <has-ceiling-fan>{if $cooling_systems->hasCeilingFan()}yes{else}no{/if}</has-ceiling-fan>
        <other-cooling><![CDATA[{$cooling_systems->getOtherCooling()}]]></other-cooling>
    </cooling-systems>
{assign var="heating_systems" value="{$detailed_characteristics->getHeatingSystems()}"}
    <heating-systems>
        <has-fireplace>{if $heating_systems->hasFireplace()}yes{else}no{/if}</has-fireplace>
        <fireplace-type>{$heating_systems->getFireplaceType()}</fireplace-type>
        <heating-system>{$heating_systems->getHeatingSystem()}</heating-system>
        <heating-fuel>{$heating_systems->getHeatingFuel()}</heating-fuel>
    </heating-systems>
    <floor-coverings>{$detailed_characteristics->getFloorCoverings()}</floor-coverings>
    <total-unit-parking-spaces>{$detailed_characteristics->getTotalUnitParkingSpaces()|string_format:"%d"}</total-unit-parking-spaces>
    <has-garage>{if $detailed_characteristics->hasGarage()}yes{else}no{/if}</has-garage>
    <garage-type>{$detailed_characteristics->getGarageType()}</garage-type>
{assign var="parking_types" value="{$detailed_characteristics->getParkingTypes()}"}
    <parking-types>
{foreach $parking_types as $parking_type}
        <parking-type>{$parking_type}</parking-type>
{/foreach}
    </parking-types>
    <has-assigned-parking-space>{if $detailed_characteristics->hasAssignedParkingSpace()}yes{else}no{/if}</has-assigned-parking-space>
    <parking-space-fee>{$detailed_characteristics->getParkingSpaceFee()}</parking-space-fee>
    <assigned-parking-space-cost>{$detailed_characteristics->getAssignedParkingSpaceCost()|string_format:"%d"}</assigned-parking-space-cost>
    <parking-comment><![CDATA[{$detailed_characteristics->getParkingComment()}]]></parking-comment>
    <foundation-type>{$detailed_characteristics->getFoundationType()}</foundation-type>
    <roof-type><![CDATA[{$detailed_characteristics->getRoofType()}]]></roof-type>
    <architecture-style>{$detailed_characteristics->getArchitectureStyle()}</architecture-style>
    <exterior-type>{$detailed_characteristics->getExteriorType()}</exterior-type>
    <room-count>{$detailed_characteristics->getRoomCount()|string_format:"%d"}</room-count>
{assign var="rooms" value="{$detailed_characteristics->getRooms()}"}
    <rooms>
{foreach $rooms as $room}
        <room>
            <room-type><![CDATA[{$room->getType()}]]></room-type>
            <room-size><![CDATA[{$room->getSize()}]]></room-size>
            <room-description><![CDATA[{$room->getDescription()}]]></room-description>
        </room>
{/foreach}
    </rooms>
    <year-updated>{$detailed_characteristics->getYearUpdated()}</year-updated>
    <total-units-in-building>{$detailed_characteristics->getTotalUnitsInBuilding()|string_format:"%d"}</total-units-in-building>
    <total-floors-in-building>{$detailed_characteristics->getTotalFloorsInBuilding()|string_format:"%d"}</total-floors-in-building>
    <num-floors-in-unit>{$detailed_characteristics->getNumFloorsInUnit()|string_format:"%d"}</num-floors-in-unit>
    <has-attic>{if $detailed_characteristics->hasAttic()}yes{else}no{/if}</has-attic>
    <has-balcony>{if $detailed_characteristics->hasBalcony()}yes{else}no{/if}</has-balcony>
    <has-barbeque-area>{if $detailed_characteristics->hasBarbequeArea()}yes{else}no{/if}</has-barbeque-area>
    <has-basement>{if $detailed_characteristics->hasBasement()}yes{else}no{/if}</has-basement>
    <has-cable-satellite>{if $detailed_characteristics->hasCableSatellite()}yes{else}no{/if}</has-cable-satellite>
    <has-courtyard>{if $detailed_characteristics->hasCourtyard()}yes{else}no{/if}</has-courtyard>
    <has-deck>{if $detailed_characteristics->hasDeck()}yes{else}no{/if}</has-deck>
    <has-disabled-access>{if $detailed_characteristics->hasDisabledAccess()}yes{else}no{/if}</has-disabled-access>
    <has-dock>{if $detailed_characteristics->hasDock()}yes{else}no{/if}</has-dock>
    <has-doublepane-windows>{if $detailed_characteristics->hasDoublepaneWindows()}yes{else}no{/if}</has-doublepane-windows>
    <has-garden>{if $detailed_characteristics->hasGarden()}yes{else}no{/if}</has-garden>
    <has-gated-entry>{if $detailed_characteristics->hasGatedEntry()}yes{else}no{/if}</has-gated-entry>
    <has-greenhouse>{if $detailed_characteristics->hasGreenhouse()}yes{else}no{/if}</has-greenhouse>
    <has-handrails>{if $detailed_characteristics->hasHandrails()}yes{else}no{/if}</has-handrails>
    <has-hot-tub-spa>{if $detailed_characteristics->hasHotTubSpa()}yes{else}no{/if}</has-hot-tub-spa>
    <has-intercom>{if $detailed_characteristics->hasIntercom()}yes{else}no{/if}</has-intercom>
    <has-jetted-bath-tub>{if $detailed_characteristics->hasJettedBathTub()}yes{else}no{/if}</has-jetted-bath-tub>
    <has-lawn>{if $detailed_characteristics->hasLawn()}yes{else}no{/if}</has-lawn>
    <has-mother-in-law>{if $detailed_characteristics->hasMotherInLaw()}yes{else}no{/if}</has-mother-in-law>
    <has-patio>{if $detailed_characteristics->hasPatio()}yes{else}no{/if}</has-patio>
    <has-pond>{if $detailed_characteristics->hasPond()}yes{else}no{/if}</has-pond>
    <has-pool>{if $detailed_characteristics->hasPool()}yes{else}no{/if}</has-pool>
    <has-porch>{if $detailed_characteristics->hasPorch()}yes{else}no{/if}</has-porch>
    <has-private-balcony>{if $detailed_characteristics->hasPrivateBalcony()}yes{else}no{/if}</has-private-balcony>
    <has-private-patio>{if $detailed_characteristics->hasPrivatePatio()}yes{else}no{/if}</has-private-patio>
    <has-rv-parking>{if $detailed_characteristics->hasRvParking()}yes{else}no{/if}</has-rv-parking>
    <has-sauna>{if $detailed_characteristics->hasSauna()}yes{else}no{/if}</has-sauna>
    <has-security-system>{if $detailed_characteristics->hasSecuritySystem()}yes{else}no{/if}</has-security-system>
    <has-skylight>{if $detailed_characteristics->hasSkylight()}yes{else}no{/if}</has-skylight>
    <has-sportscourt>{if $detailed_characteristics->hasSportscourt()}yes{else}no{/if}</has-sportscourt>
    <has-sprinkler-system>{if $detailed_characteristics->hasSprinklerSystem()}yes{else}no{/if}</has-sprinkler-system>
    <has-terrace>{if $detailed_characteristics->hasTerrace()}yes{else}no{/if}</has-terrace>
    <has-vaulted-ceiling>{if $detailed_characteristics->hasVaultedCeiling()}yes{else}no{/if}</has-vaulted-ceiling>
    <has-view>{if $detailed_characteristics->hasView()}yes{else}no{/if}</has-view>
    <has-washer-dryer-hookup>{if $detailed_characteristics->hasWasherDryerHookup()}yes{else}no{/if}</has-washer-dryer-hookup>
    <has-wet-bar>{if $detailed_characteristics->hasWetBar()}yes{else}no{/if}</has-wet-bar>
    <has-window-coverings>{if $detailed_characteristics->hasWindowCoverings()}yes{else}no{/if}</has-window-coverings>
    <building-has-concierge>{if $detailed_characteristics->hasBuildingGotConcierge()}yes{else}no{/if}</building-has-concierge>
    <building-has-doorman>{if $detailed_characteristics->hasBuildingGotDoorman()}yes{else}no{/if}</building-has-doorman>
    <building-has-elevator>{if $detailed_characteristics->hasBuildingGotElevator()}yes{else}no{/if}</building-has-elevator>
    <building-has-fitness-center>{if $detailed_characteristics->hasBuildingGotFitnessCenter()}yes{else}no{/if}</building-has-fitness-center>
    <building-has-on-site-maintenance>{if $detailed_characteristics->hasBuildingGotOnSiteMaintenance()}yes{else}no{/if}</building-has-on-site-maintenance>
    <is-waterfront>{if $detailed_characteristics->isWaterfront()}yes{else}no{/if}</is-waterfront>
    <is-new-construction>{if $detailed_characteristics->isNewConstruction()}yes{else}no{/if}</is-new-construction>
    <furnished>{if $detailed_characteristics->isFurnished()}yes{else}no{/if}</furnished>
    <view-type><![CDATA[{$detailed_characteristics->getViewType()}]]></view-type>
{assign var="other_amenities" value="{$detailed_characteristics->getOtherAmenities()}"}
    <other-amenities>
{foreach $other_amenities as $other_amenity}
        <other-amenity><![CDATA[{$other_amenity}]]></other-amenity>
{/foreach}
    </other-amenities>
</detailed-characteristics>