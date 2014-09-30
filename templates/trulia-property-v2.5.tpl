<property>
    <listing-type>{$property->getListingType()}</listing-type>
    <status>{$property->getStatus()}</status>
    <foreclosure-status>{$property->getForeclosureStatus()}</foreclosure-status>
    <location>{assign var="location" value="{$property->getLocation()}"}

        <unit-number>{$location->getUnitNumber()}</unit-number>
        <street-address>{$location->getStreetAddress()}</street-address>
        <display-address>{if $location->getDisplayAddress()}yes{else}no{/if}</display-address>
        <city-name>{$location->getCityName()}</city-name>
        <zipcode>{$location->getZipcode()}</zipcode>
        <county>{$location->getCounty()}</county>
        <state-code>{$location->getStateCode()}</state-code>
        <street-intersection>{$location->getStreetIntersection()}</street-intersection>
        <parcel-id>{$location->getParcelId()}</parcel-id>
        <building-name>{$location->getBuildingName()}</building-name>
        <subdivision>{$location->getSubdivision()}</subdivision>
        <neighborhood-name>{$location->getNeighborhoodName()}</neighborhood-name>
        <neighborhood-description>{$location->getNeighborhoodDescription()}</neighborhood-description>
        <elevation>{$location->getElevation()|string_format:"%d"}</elevation>
        <longitude>{$location->getLongitude()}</longitude>
        <latitude>{$location->getLatitude()}</latitude>
        <geocode-type>{$location->getGeocodeType()}</geocode-type>
        <directions>{$location->getDirections()}</directions>
    </location>
    <details>{assign var="details" value="{$property->getDetails()}"}

        <price>{$details->getPrice()|string_format:"%d"}</price>
        <num-bedrooms>{$details->getNumBedrooms()}</num-bedrooms>
        <num-full-bathrooms>{$details->getNumFullBathrooms()}</num-full-bathrooms>
        <num-half-bathrooms>{$details->getNumHalfBathrooms()}</num-half-bathrooms>
        <num-bathrooms>{$details->getNumBathrooms()}</num-bathrooms>
        <living-area-square-feet>{$details->getLivingAreaSquareFeet()|string_format:"%d"}</living-area-square-feet>
        <date-listed>{$details->getDateListed()}</date-listed>
        <property-type>{$details->getPropertyType()}</property-type>
        <description>{$details->getDescription()}</description>
        <mlsId>{$details->getMlsId()}</mlsId>
        <mlsName>{$details->getMlsName()}</mlsName>
        <provider-listingid>{$details->getProviderListingId()}</provider-listingid>
        <lot-size>{$details->getLotSize()}</lot-size>
        <listing-title>{$details->getListingTitle()}</listing-title>
        <year-built>{$details->getYearBuilt()}</year-built>
        <date-available>{$details->getDateAvailable()}</date-available>
        <date-sold>{$details->getDateSold()}</date-sold>
        <sale-price>{$details->getSalePrice()|string_format:"%d"}</sale-price>
    </details>
    <landing-page>{assign var="landing_page" value="{$property->getLandingPage()}"}

        <lp-url>{$landing_page->getLpUrl()}</lp-url>
    </landing-page>
    <site>{assign var="site" value="{$property->getSite()}"}

        <site-url>{$site->getSiteUrl()}</site-url>
        <site-name>{$site->getSiteName()}</site-name>
    </site>
    <pictures>{assign var="pictures" value="{$property->getPictures()}"}{foreach $pictures as $picture}

        <picture>
            <picture-url>{$picture->getPictureUrl()}</picture-url>
            <picture-caption>{$picture->getPictureCaption()}</picture-caption>
            <picture-description>{$picture->getPictureDescription()}</picture-description>
            <picture-seq-number>{$picture->getPictureSeqNumber()|string_format:"%d"}</picture-seq-number>
        </picture>{/foreach}

    </pictures>
    <virtual-tours>{assign var="virtual_tours" value="{$property->getVirtualTours()}"}{foreach $virtual_tours as $virtual_tour}

        <virtual-tour>
            <virtual-tour-url>{$virtual_tour->getVirtualTourUrl()}</virtual-tour-url>
            <virtual-tour-caption>{$virtual_tour->getVirtualTourCaption()}</virtual-tour-caption>
            <virtual-tour-description>{$virtual_tour->getVirtualTourDescription()}</virtual-tour-description>
            <virtual-tour-seq-number>{$virtual_tour->getVirtualTourSeqNumber()|string_format:"%d"}</virtual-tour-seq-number>
        </virtual-tour>{/foreach}

    </virtual-tours>
    <videos>{assign var="videos" value="{$property->getVideos()}"}{foreach $videos as $video}

        <video>
            <video-url>{$video->getVideoUrl()}</video-url>
            <video-caption>{$video->getVideoCaption()}</video-caption>
            <video-description>{$video->getVideoDescription()}</video-description>
            <video-seq-number>{$video->getVideoSeqNumber()|string_format:"%d"}</video-seq-number>
        </video>{/foreach}

    </videos>
    <open-homes>{assign var="open_homes" value="{$property->getOpenHomes()}"}{foreach $open_homes as $open_home}

        <open-home>
            <start-time>{$open_home->getStartTime()}</start-time>
            <end-time>{$open_home->getEndTime()}</end-time>
            <date>{$open_home->getDate()}</date>
            <details>{$open_home->getDetails()}</details>
            <open-home-appointment-required>{if $open_home->getOpenHomeAppointmentRequired()}yes{else}no{/if}</open-home-appointment-required>
        </open-home>{/foreach}

    </open-homes>
    <taxes>{assign var="taxes" value="{$property->getTaxes()}"}{foreach $taxes as $tax}

        <tax>
            <tax-type>{$tax->getTaxType()}</tax-type>
            <tax-year>{$tax->getTaxYear()}</tax-year>
            <tax-amount>{$tax->getTaxAmount()|string_format:"%d"}</tax-amount>
            <tax-description>{$tax->getTaxDescription()}</tax-description>
        </tax>{/foreach}

    </taxes>
    <hoa-fees>{assign var="hoaFee" value="{$property->getHoaFee()}"}

        <hoa-fee>{$hoaFee->getHoaFee()|string_format:"%d"}</hoa-fee>
        <hoa-period>{$hoaFee->getHoaPeriod()}</hoa-period>
        <hoa-description>{$hoaFee->getHoaDescription()}</hoa-description>
    </hoa-fees>
    <additional-fees>{assign var="additionalFees" value="{$property->getAdditionalFees()}"}{foreach $additionalFees as $fee}

        <fee>
            <fee-type>{$fee->getFeeType()}</fee-type>
            <fee-amount>{$fee->getFeeAmount()|string_format:"%d"}</fee-amount>
            <fee-period>{$fee->getFeePeriod()}</fee-period>
            <fee-description>{$fee->getFeeDescription()}</fee-description>
        </fee>{/foreach}

    </additional-fees>
    <schools>{assign var="schools" value="{$property->getSchools()}"}{foreach $schools as $school}

        <school-district>
            <elementary>{$school->getElementary()}</elementary>
            <middle>{$school->getMiddle()}</middle>
            <juniorhigh>{$school->getJuniorHigh()}</juniorhigh>
            <high>{$school->getHigh()}</high>
            <district-name>{$school->getDistrictName()}</district-name>
            <district-website>{$school->getDistrictWebsite()}</district-website>
            <district-phone-number>{$school->getDistrictPhoneNumber()}</district-phone-number>
        </school-district>{/foreach}

    </schools>
    <floorplan-layouts>{assign var="floorplan_layouts" value="{$property->getFloorplanLayouts()}"}{foreach $floorplan_layouts as $floorplan_layout}

        <floorplan-layout>
            <floorplan-layout-url>{$floorplan_layout->getFloorplanLayoutUrl()}</floorplan-layout-url>
            <floorplan-layout-caption>{$floorplan_layout->getFloorplanLayoutCaption()}</floorplan-layout-caption>
            <floorplan-layout-description>{$floorplan_layout->getFloorplanLayoutDescription()}</floorplan-layout-description>
            <floorplan-layout-seq-number>{$floorplan_layout->getFloorplanLayoutSeqNumber()|string_format:"%d"}</floorplan-layout-seq-number>
        </floorplan-layout>{/foreach}

    </floorplan-layouts>
    <plan>{assign var="plan" value="{$property->getPlan()}"}

        <plan-id>{$plan->getPlanId()}</plan-id>
        <plan-name>{$plan->getPlanName()}</plan-name>
        <plan-type>{$plan->getPlanType()}</plan-type>
        <plan-base-price>{$plan->getPlanBasePrice()}</plan-base-price>
    </plan>
    <spec>{assign var="spec" value="{$property->getSpec()}"}

        <is-spec-home>{$spec->getIsSpecHome()}</is-spec-home>
        <spec-id>{$spec->getSpecid()}</spec-id>
    </spec>
    <agent>{assign var="agent" value="{$property->getAgent()}"}

        <agent-name>{$agent->getName()}</agent-name>
        <agent-email>{$agent->getEmail()}</agent-email>
        <agent-phone>{$agent->getPhone()}</agent-phone>
        <agent-alternate-email>{$agent->getAlternateEmail()}</agent-alternate-email>
        <agent-picture-url>{$agent->getPictureUrl()}</agent-picture-url>
        <agent-id>{$agent->getId()}</agent-id>
        <agent-licenses>{assign var="licenses" value="{$agent->getLicenses()}"}{foreach $licenses as $license}

            <agent-license>
                <agent-license-number>{$license->getNumber()}</agent-license-number>
                <agent-license-category>{$license->getCategory()}</agent-license-category>
                <agent-license-state>{$license->getState()}</agent-license-state>
            </agent-license>{/foreach}

        </agent-licenses>
    </agent>
    <brokerage>{assign var="brokerage" value="{$property->getBrokerage()}"}

        <brokerage-name>{$brokerage->getName()}</brokerage-name>
        <brokerage-email>{$brokerage->getEmail()}</brokerage-email>
        <brokerage-broker-name>{$brokerage->getBrokerName()}</brokerage-broker-name>
        <brokerage-id>{$brokerage->getId()}</brokerage-id>
        <brokerage-mls-code>{$brokerage->getMlsCode()}</brokerage-mls-code>
        <brokerage-phone>{$brokerage->getPhone()}</brokerage-phone>
        <brokerage-website>{$brokerage->getWebsite()}</brokerage-website>
        <brokerage-logo-url>{$brokerage->getLogoUrl()}</brokerage-logo-url>
        <brokerage-address>{assign var="brokerage_address" value="{$brokerage->getAddress()}"}

            <brokerage-street-address>{$brokerage_address->getStreetAddress()}</brokerage-street-address>
            <brokerage-city-name>{$brokerage_address->getCityName()}</brokerage-city-name>
            <brokerage-zipcode>{$brokerage_address->getZipcode()}</brokerage-zipcode>
            <brokerage-state-code>{$brokerage_address->getStateCode()}</brokerage-state-code>
        </brokerage-address>
    </brokerage>
    <office>{assign var="office" value="{$property->getOffice()}"}

        <office-name>{$office->getName()}</office-name>
        <office-id>{$office->getId()}</office-id>
        <office-mls-code>{$office->getMlsCode()}</office-mls-code>
        <office-broker-id>{$office->getBrokerId()}</office-broker-id>
        <office-phone>{$office->getPhone()}</office-phone>
        <office-email>{$office->getEmail()}</office-email>
        <office-website>{$office->getWebsite()}</office-website>
        <office-address>{assign var="office_address" value="{$office->getAddress()}"}

            <office-street-address>{$office_address->getStreetAddress()}</office-street-address>
            <office-city-name>{$office_address->getCityName()}</office-city-name>
            <office-zipcode>{$office_address->getZipcode()}</office-zipcode>
            <office-state-code>{$office_address->getStateCode()}</office-state-code>
        </office-address>
    </office>
    <franchise>{assign var="franchise" value="{$property->getFranchise()}"}

        <franchise-name>{$franchise->getName()}</franchise-name>
        <franchise-phone>{$franchise->getPhone()}</franchise-phone>
        <franchise-email>{$franchise->getEmail()}</franchise-email>
        <franchise-website>{$franchise->getWebsite()}</franchise-website>
        <franchise-logo-url>{$franchise->getLogoUrl()}</franchise-logo-url>
    </franchise>
    <builder>{assign var="builder" value="{$property->getBuilder()}"}

        <builder-id>{$builder->getId()}</builder-id>
        <builder-name>{$builder->getName()}</builder-name>
        <builder-phone>{$builder->getPhone()}</builder-phone>
        <builder-email>{$builder->getEmail()}</builder-email>
        <builder-lead-email>{$builder->getLeadEmail()}</builder-lead-email>
        <builder-website>{$builder->getWebsite()}</builder-website>
        <builder-logo-url>{$builder->getLogoUrl()}</builder-logo-url>
        <builder-address>{assign var="builder_address" value="{$builder->getAddress()}"}

            <builder-street-address>{$builder_address->getStreetAddress()}</builder-street-address>
            <builder-city-name>{$builder_address->getCityName()}</builder-city-name>
            <builder-zipcode>{$builder_address->getZipcode()}</builder-zipcode>
            <builder-state-code>{$builder_address->getStateCode()}</builder-state-code>
        </builder-address>
    </builder>
    {if $property->getListingType()->equals(ListingType::RENTAL)}
    <property-manager>{assign var="property_manager" value="{$property->getPropertyManager()}"}

        <property-manager-name>{$property_manager->getName()}</property-manager-name>
        <property-management-company-name>{$property_manager->getManagementCompanyName()}</property-management-company-name>
        <property-manager-phone>{$property_manager->getPhone()}</property-manager-phone>
        <property-manager-email>{$property_manager->getEmail()}</property-manager-email>
        <property-manager-lead-email>{$property_manager->getLeadEmail()}</property-manager-lead-email>
        <property-manager-website>{$property_manager->getWebsite()}</property-manager-website>
        <property-manager-logo-url>{$property_manager->getLogoUrl()}</property-manager-logo-url>
        <property-manager-office-hours>{assign var ="office_hours" value="{$property_manager->getOfficeHours()}"}{foreach $office_hours as $office_day}

            <office-day>
                <day-of-the-week>{$office_day->getDayOfTheWeek()}</day-of-the-week>
                <office-start-time>{$office_day->getStartTime()}</office-start-time>
                <office-end-time>{$office_day->getEndTime()}</office-end-time>
                <comment>{$office_day->getComment()}</comment>
            </office-day>{/foreach}

        </property-manager-office-hours>
    </property-manager>{/if}

    <detailed-characteristics>{assign var="detailed_characteristics" value="{$property->getDetailedCharacteristics()}"}

        <appliances>{assign var="appliances" value="{$detailed_characteristics->getAppliances()}"}

            <has-washer>{if $appliances->getHasWasher()}yes{else}no{/if}</has-washer>
            <has-dryer>{if $appliances->getHasDryer()}yes{else}no{/if}</has-dryer>
            <has-dishwasher>{if $appliances->getHasDishwasher()}yes{else}no{/if}</has-dishwasher>
            <has-refrigerator>{if $appliances->getHasRefrigerator()}yes{else}no{/if}</has-refrigerator>
            <has-disposal>{if $appliances->getHasDisposal()}yes{else}no{/if}</has-disposal>
            <has-microwave>{if $appliances->getHasMicrowave()}yes{else}no{/if}</has-microwave>
            <range-type>{$appliances->getRangeType()}</range-type>
            <appliances-comments>{$appliances->getAppliancesComments()}</appliances-comments>
            <additional-appliances>{assign var="additional_appliances" value="{$appliances->getAdditionalAppliances()}"}
                {foreach $additional_appliances as $additional_appliance}

                <additional-appliance>
                    <additional-appliance-name>{$additional_appliance->getName()}</additional-appliance-name>
                    <additional-appliance-description>{$additional_appliance->getDescription()}</additional-appliance-description>
                </additional-appliance>{/foreach}

            </additional-appliances>
        </appliances>
        <cooling-systems>{assign var="cooling_systems" value="{$detailed_characteristics->getCoolingSystems()}"}

            <has-air-conditioning>{if $cooling_systems->getHasAirConditioning()}yes{else}no{/if}</has-air-conditioning>
            <has-ceiling-fan>{if $cooling_systems->getHasCeilingFan()}yes{else}no{/if}</has-ceiling-fan>
            <other-cooling>{$cooling_systems->getOtherCooling()}</other-cooling>
        </cooling-systems>
        <heating-systems>{assign var="heating_systems" value="{$detailed_characteristics->getHeatingSystems()}"}

            <has-fireplace>{if $heating_systems->getHasFireplace()}yes{else}no{/if}</has-fireplace>
            <fireplace-type>{$heating_systems->getFireplaceType()}</fireplace-type>
            <heating-system>{$heating_systems->getHeatingSystem()}</heating-system>
            <heating-fuel>{$heating_systems->getHeatingFuel()}</heating-fuel>
        </heating-systems>
        <floor-coverings>{$detailed_characteristics->getFloorCoverings()}</floor-coverings>
        <total-unit-parking-spaces>{$detailed_characteristics->getTotalUnitParkingSpaces()|string_format:"%d"}</total-unit-parking-spaces>
        <has-garage>{if $detailed_characteristics->getHasGarage()}yes{else}no{/if}</has-garage>
        <garage-type>{$detailed_characteristics->getGarageType()}</garage-type>
        <parking-types>{assign var="parking_types" value="{$detailed_characteristics->getParkingTypes()}"}
            {foreach $parking_types as $parking_type}

            <parking-type></parking-type>{/foreach}

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
        <rooms>{assign var="rooms" value="{$detailed_characteristics->getRooms()}"}{foreach $rooms as $room}

            <room>
                <room-type>{$room->getType()}</room-type>
                <room-size>{$room->getSize()}</room-size>
                <room-description>{$room->getDescription()}</room-description>
            </room>{/foreach}

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
        <building-has-concierge>{$detailed_characteristics->getBuildingHasConcierge()}</building-has-concierge>
        <building-has-doorman>{$detailed_characteristics->getBuildingHasDoorman()}</building-has-doorman>
        <building-has-elevator>{$detailed_characteristics->getBuildingHasElevator()}</building-has-elevator>
        <building-has-fitness-center>{$detailed_characteristics->getBuildingHasFitnessCenter()}</building-has-fitness-center>
        <building-has-on-site-maintenance>{$detailed_characteristics->getBuildingHasOnSiteMaintenance()}</building-has-on-site-maintenance>
        <is-waterfront>{$detailed_characteristics->getIsWaterfront()}</is-waterfront>
        <is-new-construction>{$detailed_characteristics->getIsNewConstruction()}</is-new-construction>
        <furnished>{$detailed_characteristics->getFurnished()}</furnished>
        <view-type>{$detailed_characteristics->getViewType()}</view-type>
        <other-amenities>{assign var="other_amenities" value="{$detailed_characteristics->getOtherAmenities()}"}
            {foreach $other_amenities as $other_amenity}

            <other-amenity>{$other_amenity}</other-amenity>{/foreach}

        </other-amenities>
    </detailed-characteristics>
    {if $property->getListingType()->equals(ListingType::RENTAL)}
    <rental-terms>{assign var="rental_terms" value="{$property->getRentalTerms()}"}

        <price-term>{$rental_terms->getPriceTerm()}</price-term>
        <rental-type>{$rental_terms->getRentalType()}</rental-type>
        <lease-type>{$rental_terms->getLeaseType()}</lease-type>
        <lease-min-length-months>{$rental_terms->getLeaseMinLengthMonths()|string_format:"%d"}</lease-min-length-months>
        <lease-max-length-months>{$rental_terms->getLeaseMaxLengthMonths()|string_format:"%d"}</lease-max-length-months>
        <lease-periods>{assign var="lease_periods" value="{$rental_terms->getLeasePeriods()}"}{foreach $lease_periods as $lease_period}

            <lease-period>{$lease_period|string_format:"%d"}</lease-period>{/foreach}

        </lease-periods>
        <lease-details>{$rental_terms->getLeaseDetails()}</lease-details>
        <security-deposit>{$rental_terms->getSecurityDeposit()|string_format:"%d"}</security-deposit>
        <security-deposit-description>{$rental_terms->getSecurityDepositDescription()}</security-deposit-description>
        <application-fee>{$rental_terms->getApplicationFee()|string_format:"%d"}</application-fee>
        <application-fee-description>{$rental_terms->getApplicationFeeDescription()}</application-fee-description>
        <credit-cards-accepted>{if $rental_terms->getCreditCardsAccepted()}yes{else}no{/if}</credit-cards-accepted>
        <credit-cards>{assign var="credit_cards" value="{$rental_terms->getCreditCards()}"}{foreach $credit_cards as $credit_card}

            <credit-card>{$credit_card}</credit-card>{/foreach}

        </credit-cards>
        <pets>{assign var="pets" value="{$rental_terms->getPets()}"}

            <small-dogs-allowed>{if $pets->getSmallDogsAllowed()}yes{else}no{/if}</small-dogs-allowed>
            <large-dogs-allowed>{if $pets->getLargeDogsAllowed()}yes{else}no{/if}</large-dogs-allowed>
            <cats-allowed>{if $pets->getCatsAllowed()}yes{else}no{/if}</cats-allowed>
            <pet-other-allowed>{if $pets->getPetOtherAllowed()}yes{else}no{/if}</pet-other-allowed>
            <max-pets>{$pets->getMaxPets()|string_format:"%d"}</max-pets>
            <pet-deposit>{$pets->getPetDeposit()|string_format:"%d"}</pet-deposit>
            <pet-fee>{$pets->getPetFee()|string_format:"%d"}</pet-fee>
            <pet-rent>{$pets->getPetRent()|string_format:"%d"}</pet-rent>
            <pet-weight>{$pets->getPetWeight()}</pet-weight>
            <pet-comments>{assign var="pet_comments" value="{$pets->getPetComments()}"}{foreach $pet_comments as $pet_comment}

                <pet-comment>{$pet_comment}</pet-comment>{/foreach}

            </pet-comments>
        </pets>
        <utilities-included>{assign var="utilities_included" value="{$rental_terms->getUtilitiesIncluded()}"}

            <landlord-pays-aircon>{if $utilities_included->getLandlordPaysAircon()}yes{else}no{/if}</landlord-pays-aircon>
            <landlord-pays-broadbandinternet>{if $utilities_included->getLandlordPaysBroadbandinternet()}yes{else}no{/if}</landlord-pays-broadbandinternet>
            <landlord-pays-cable>{if $utilities_included->getLandlordPaysCable()}yes{else}no{/if}</landlord-pays-cable>
            <landlord-pays-electric>{if $utilities_included->getLandlordPaysElectric()}yes{else}no{/if}</landlord-pays-electric>
            <landlord-pays-gas>{if $utilities_included->getLandlordPaysGas()}yes{else}no{/if}</landlord-pays-gas>
            <landlord-pays-heat>{if $utilities_included->getLandlordPaysHeat()}yes{else}no{/if}</landlord-pays-heat>
            <landlord-pays-hotwater>{if $utilities_included->getLandlordPaysHotwater()}yes{else}no{/if}</landlord-pays-hotwater>
            <landlord-pays-satellite>{if $utilities_included->getLandlordPaysSatellite()}yes{else}no{/if}</landlord-pays-satellite>
            <landlord-pays-sewer>{if $utilities_included->getLandlordPaysSewer()}yes{else}no{/if}</landlord-pays-sewer>
            <landlord-pays-telephone>{if $utilities_included->getLandlordPaysTelephone()}yes{else}no{/if}</landlord-pays-telephone>
            <landlord-pays-trash>{if $utilities_included->getLandlordPaysTrash()}yes{else}no{/if}</landlord-pays-trash>
            <landlord-pays-water>{if $utilities_included->getLandlordPaysWater()}yes{else}no{/if}</landlord-pays-water>
            <landlord-utilities-portion-included>{if $utilities_included->getLandlordUtilitiesPortionIncluded()}yes{else}no{/if}</landlord-utilities-portion-included>
            <utilities-comments>{assign var="utilities_comments" value="{$utilities_included->getUtilitiesComments()}"}
                {foreach $utilities_comments as $utilities_comment}

                <utilities-comment>{$utilities_comment}</utilities-comment>{/foreach}

            </utilities-comments>
        </utilities-included>
        <property-manager-on-site>{if $rental_terms->getPropertyManagerOnSite()}yes{else}no{/if}</property-manager-on-site>
        <rent-control>{if $rental_terms->getRentControl()}yes{else}no{/if}</rent-control>
        <subletting-allowed>{if $rental_terms->getSublettingAllowed()}yes{else}no{/if}</subletting-allowed>
        <rental-broker-fee>{if $rental_terms->getRentalBrokerFee()}yes{else}no{/if}</rental-broker-fee>
        <rental-broker-fee-amount>{$rental_terms->getRentalBrokerFeeAmount()|string_format:"%d"}</rental-broker-fee-amount>
    </rental-terms>{/if}

    <advertise-with-us>{assign var="advertise" value="{$property->getAdvertiseWithUs()}"}

        <channel>{$advertise->getChannel()}</channel>
        <featured>{if $advertise->getFeatured()}yes{else}no{/if}</featured>
        <branded>{if $advertise->getBranded()}yes{else}no{/if}</branded>
        <branded-logo-url>{$advertise->getBrandedLogoUrl()}</branded-logo-url>
    </advertise-with-us>
</property>