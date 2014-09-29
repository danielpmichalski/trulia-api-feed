<property>
    <listing-type>(resale | foreclosure | new home | rental)</listing-type>
    <status>(for rent | for sale | pending | active contingent | sold | withdrawn | rented|off
        market)
    </status>
    <foreclosure-status>(notice of default (pre-foreclosure) | lis pendens (pre-foreclosure)|notice of trustee sale
        (auction) | notice of foreclosure sale (auction)| reo - bank owned )
    </foreclosure-status>
    <location>
        <unit-number></unit-number>
        <street-address></street-address>
        <display-address>(yes|no)</display-address>
        <city-name></city-name>
        <zipcode></zipcode>
        <county></county>
        <state-code></state-code>
        <street-intersection></street-intersection>
        <parcel-id></parcel-id>
        <building-name></building-name>
        <subdivision></subdivision>
        <neighborhood-name></neighborhood-name>
        <neighborhood-description></neighborhood-description>
        <elevation></elevation>
        <longitude></longitude>
        <latitude></latitude>
        <geocode-type>(exact | offset | approximate)</geocode-type>
        <directions></directions>
    </location>
    <details>
        <price></price>
        <num-bedrooms></num-bedrooms>
        <num-full-bathrooms></num-full-bathrooms>
        <num-half-bathrooms></num-half-bathrooms>
        <num-bathrooms></num-bathrooms>
        <living-area-square-feet></living-area-square-feet>
        <date-listed></date-listed>
        <property-type>(apartment/condo/townhouse | condo | townhouse | coop | apartment | loft |
            tic | mobile/manufactured | farm/ranch | multi-family | income/investment | houseboat |
            lot/land | single-family home)
        </property-type>
        <description></description>
        <mlsId></mlsId>
        <mlsName></mlsName>
        <provider-listingid></provider-listingid>
        <lot-size></lot-size>
        <listing-title></listing-title>
        <year-built></year-built>
        <date-available></date-available>
        <date-sold></date-sold>
        <sale-price></sale-price>
    </details>
    <landing-page>
        <lp-url></lp-url>
    </landing-page>
    <site>
        <site-url></site-url>
        <site-name></site-name>
    </site>
    <pictures>
        <picture><!-- repeatable tag group-->
            <picture-url></picture-url>
            <picture-caption></picture-caption>
            <picture-description></picture-description>
            <picture-seq-number></picture-seq-number>
        </picture>
    </pictures>
    <virtual-tours>
        <virtual-tour><!-- repeatable tag group -->
            <virtual-tour-url></virtual-tour-url>
            <virtual-tour-caption></virtual-tour-caption>
            <virtual-tour-description></virtual-tour-description>
            <virtual-tour-seq-number></virtual-tour-seq-number>
        </virtual-tour>
    </virtual-tours>
    <videos>
        <video><!-- repeatable tag group -->
            <video-url></video-url>
            <video-caption></video-caption>
            <video-description></video-description>
            <video-seq-number></video-seq-number>
        </video>
    </videos>
    <open-homes>
        <open-home><!-- repeatable tag group-->
            <start-time></start-time>
            <end-time></end-time>
            <date></date>
            <details></details>
            <open-home-appointment-required>(yes|no)</open-home-appointment-required>
        </open-home>
    </open-homes>
    <taxes>
        <tax><!-- repeatable tag group-->
            <tax-type></tax-type>
            <tax-year></tax-year>
            <tax-amount></tax-amount>
            <tax-description></tax-description>
        </tax>
    </taxes>
    <hoa-fees>
        <hoa-fee></hoa-fee>
        <hoa-period></hoa-period>
        <hoa-description></hoa-description>
    </hoa-fees>
    <additional-fees>
        <fee><!-- repeatable tag group-->
            <fee-type></fee-type>
            <fee-amount></fee-amount>
            <fee-period></fee-period>
            <fee-description></fee-description>
        </fee>
    </additional-fees>
    <schools>
        <school-district>
            <elementary></elementary>
            <middle></middle>
            <juniorhigh></juniorhigh>
            <high></high>
            <district-name></district-name>
            <district-website></district-website>
            <district-phone-number></district-phone-number>
        </school-district>
    </schools>
    <floorplan-layouts>
        <floorplan-layout><!-- repeatable tag group -->
            <floorplan-layout-url></floorplan-layout-url>
            <floorplan-layout-caption></floorplan-layout-caption>
            <floorplan-layout-description></floorplan-layout-description>
            <floorplan-layout-seq-number></floorplan-layout-seq-number>
        </floorplan-layout>
    </floorplan-layouts>
    <plan>
        <plan-id></plan-id>
        <plan-name></plan-name>
        <plan-type></plan-type>
        <plan-base-price>(yes|no)</plan-base-price>
    </plan>
    <spec>
        <is-spec-home>(yes|no)</is-spec-home>
        <spec-id></spec-id>
    </spec>
    <agent>
        <agent-name></agent-name>
        <agent-email></agent-email>
        <agent-phone></agent-phone>
        <agent-alternate-email></agent-alternate-email>
        <agent-picture-url></agent-picture-url>
        <agent-id></agent-id>
        <agent-licenses>
            <agent-license>
                <agent-license-number></agent-license-number>
                <agent-license-category></agent-license-category>
                <agent-license-state></agent-license-state>
            </agent-license>
        </agent-licenses>
    </agent>
    <brokerage>
        <brokerage-name></brokerage-name>
        <brokerage-email></brokerage-email>
        <brokerage-broker-name></brokerage-broker-name>
        <brokerage-id></brokerage-id>
        <brokerage-mls-code></brokerage-mls-code>
        <brokerage-phone></brokerage-phone>
        <brokerage-website></brokerage-website>
        <brokerage-logo-url></brokerage-logo-url>
        <brokerage-address>
            <brokerage-street-address></brokerage-street-address>
            <brokerage-city-name></brokerage-city-name>
            <brokerage-zipcode></brokerage-zipcode>
            <brokerage-state-code></brokerage-state-code>
        </brokerage-address>
    </brokerage>
    <office>
        <office-name></office-name>
        <office-id></office-id>
        <office-mls-code></office-mls-code>
        <office-broker-id></office-broker-id>
        <office-phone></office-phone>
        <office-email></office-email>
        <office-website></office-website>
        <office-address>
            <office-street-address></office-street-address>
            <office-city-name></office-city-name>
            <office-zipcode></office-zipcode>
            <office-state-code></office-state-code>
        </office-address>
    </office>
    <franchise>
        <franchise-name></franchise-name>
        <franchise-phone></franchise-phone>
        <franchise-email></franchise-email>
        <franchise-website></franchise-website>
        <franchise-logo-url></franchise-logo-url>
    </franchise>
    <builder>
        <builder-id></builder-id>
        <builder-name></builder-name>
        <builder-phone></builder-phone>
        <builder-email></builder-email>
        <builder-lead-email></builder-lead-email>
        <builder-website></builder-website>
        <builder-logo-url></builder-logo-url>
        <builder-address>
            <builder-street-address></builder-street-address>
            <builder-city-name></builder-city-name>
            <builder-zipcode></builder-zipcode>
            <builder-state-code></builder-state-code>
        </builder-address>
    </builder>
    <property-manager> (for rental listings only)
        <property-manager-name></property-manager-name>
        <property-management-company-name></property-management-company-name>
        <property-manager-phone></property-manager-phone>
        <property-manager-email></property-manager-email>
        <property-manager-lead-email></property-manager-lead-email>
        <property-manager-website></property-manager-website>
        <property-manager-logo-url></property-manager-logo-url>
        <property-manager-office-hours>
            <office-day><!-- repeatable tag -->
                <day-of-the-week>(sun | mon | tue | wed | thu | fri | sat)</day-of-the-week>
                <office-start-time></office-start-time>
                <office-end-time></office-end-time>
                <comment></comment>
            </office-day>
        </property-manager-office-hours>
    </property-manager>
    <detailed-characteristics>
        <appliances>
            <has-washer>(yes|no)</has-washer>
            <has-dryer>(yes|no)</has-dryer>
            <has-dishwasher>(yes|no)</has-dishwasher>
            <has-refrigerator>(yes|no)</has-refrigerator>
            <has-disposal>(yes|no)</has-disposal>
            <has-microwave>(yes|no)</has-microwave>
            <range-type>(gas | electric | other)</range-type>
            <appliances-comments></appliances-comments>
            <additional-appliances>
                <additional-appliance><!-- repeatable tag group. List each individually-->
                    <additional-appliance-name></additional-appliance-name>
                    <additional-appliance-description></additional-appliance-description>
                </additional-appliance>
            </additional-appliances>
        </appliances>
        <cooling-systems>
            <has-air-conditioning>(yes|no)</has-air-conditioning>
            <has-ceiling-fan>(yes|no)</has-ceiling-fan>
            <other-cooling></other-cooling>
        </cooling-systems>
        <heating-systems>
            <has-fireplace>(yes|no)</has-fireplace>
            <fireplace-type>(gas | wood | electric | decorative)</fireplace-type>
            <heating-system>(gas | electric | radiant | other)</heating-system>
            <heating-fuel>(coal | oil | gas | electric | propane | butane | solar | woodpelet| other|
                none)
            </heating-fuel>
        </heating-systems>
        <floor-coverings></floor-coverings>
        <total-unit-parking-spaces></total-unit-parking-spaces>
        <has-garage>(yes|no)</has-garage>
        <garage-type>(attached | detached)</garage-type>
        <parking-types>
            <parking-type>(surface lot | garage lot | covered lot | street | carport | none |
                other)
            </parking-type>
            <!-- repeatable tag -->
        </parking-types>
        <has-assigned-parking-space>(yes|no)</has-assigned-parking-space>
        <parking-space-fee>(free | paid | both)</parking-space-fee>
        <assigned-parking-space-cost></assigned-parking-space-cost>
        <parking-comment></parking-comment>
        <foundation-type></foundation-type>
        <roof-type></roof-type>
        <architecture-style></architecture-style>
        <exterior-type></exterior-type>
        <room-count></room-count>
        <rooms>
            <room><!-- repeatable tag -->
                <room-type></room-type>
                <room-size></room-size>
                <room-description></room-description>
            </room>
        </rooms>
        <year-updated></year-updated>
        <total-units-in-building></total-units-in-building>
        <total-floors-in-building></total-floors-in-building>
        <num-floors-in-unit></num-floors-in-unit>
        <has-attic>(yes|no)</has-attic>
        <has-balcony>(yes|no)</has-balcony>
        <has-barbeque-area>(yes|no)</has-barbeque-area>
        <has-basement>(yes|no)</has-basement>
        <has-cable-satellite>(yes|no)</has-cable-satellite>
        <has-courtyard>(yes|no)</has-courtyard>
        <has-deck>(yes|no)</has-deck>
        <has-disabled-access>(yes|no)</has-disabled-access>
        <has-dock>(yes|no)</has-dock>
        <has-doublepane-windows>(yes|no)</has-doublepane-windows>
        <has-garden>(yes|no)</has-garden>
        <has-gated-entry>(yes|no)</has-gated-entry>
        <has-greenhouse>(yes|no)</has-greenhouse>
        <has-handrails>(yes|no)</has-handrails>
        <has-hot-tub-spa>(yes|no)</has-hot-tub-spa>
        <has-intercom>(yes|no)</has-intercom>
        <has-jetted-bath-tub>(yes|no)</has-jetted-bath-tub>
        <has-lawn>(yes|no)</has-lawn>
        <has-mother-in-law>(yes|no)</has-mother-in-law>
        <has-patio>(yes|no)</has-patio>
        <has-pond>(yes|no)</has-pond>
        <has-pool>(yes|no)</has-pool>
        <has-porch>(yes|no)</has-porch>
        <has-private-balcony>(yes|no)</has-private-balcony>
        <has-private-patio>(yes|no)</has-private-patio>
        <has-rv-parking>(yes|no)</has-rv-parking>
        <has-sauna>(yes|no)</has-sauna>
        <has-security-system>(yes|no)</has-security-system>
        <has-skylight>(yes|no)</has-skylight>
        <has-sportscourt>(yes|no)</has-sportscourt>
        <has-sprinkler-system>(yes|no)</has-sprinkler-system>
        <has-terrace>(yes|no)</has-terrace>
        <has-vaulted-ceiling>(yes|no)</has-vaulted-ceiling>
        <has-view>(yes|no)</has-view>
        <has-washer-dryer-hookup>(yes|no)</has-washer-dryer-hookup>
        <has-wet-bar>(yes|no)</has-wet-bar>
        <has-window-coverings>(yes|no)</has-window-coverings>
        <building-has-concierge>(yes|no)</building-has-concierge>
        <building-has-doorman>(yes|no)</building-has-doorman>
        <building-has-elevator>(yes|no)</building-has-elevator>
        <building-has-fitness-center>(yes|no)</building-has-fitness-center>
        <building-has-on-site-maintenance>(yes|no)</building-has-on-site-maintenance>
        <is-waterfront>(yes|no)</is-waterfront>
        <is-new-construction>(yes|no)</is-new-construction>
        <furnished>(yes|no)</furnished>
        <view-type></view-type>
        <other-amenities>
            <other-amenity></other-amenity>
            <!-- repeatable tag -->
        </other-amenities>
    </detailed-characteristics>
    <rental-terms> (for rental listings only)
        <price-term>(night | week | month | year)</price-term>
        <rental-type>(standard | corporate | senior | military | campus | market rate apt | condominium | cooperative |
            assisted living | subsidized | nursing home | student | vacation |
            other)
        </rental-type>
        <lease-type>(sublet | month-to-month | annual | bi-annual)</lease-type>
        <lease-min-length-months></lease-min-length-months>
        <lease-max-length-months></lease-max-length-months>
        <lease-periods>
            <lease-period></lease-period>
        </lease-periods>
        <lease-details></lease-details>
        <security-deposit></security-deposit>
        <security-deposit-description></security-deposit-description>
        <application-fee></application-fee>
        <application-fee-description></application-fee-description>
        <credit-cards-accepted>(yes|no)</credit-cards-accepted>
        <credit-cards>
            <credit-card>(visa | mastercard | discover| american express | other)</credit-card>
            <!--
            repeatable tag -->
        </credit-cards>
        <pets>
            <small-dogs-allowed>(yes|no)</small-dogs-allowed>
            <large-dogs-allowed>(yes|no)</large-dogs-allowed>
            <cats-allowed>(yes|no)</cats-allowed>
            <pet-other-allowed>(yes|no)</pet-other-allowed>
            <max-pets></max-pets>
            <pet-deposit></pet-deposit>
            <pet-fee></pet-fee>
            <pet-rent></pet-rent>
            <pet-weight></pet-weight>
            <pet-comments>
                <pet-comment></pet-comment>
                <!-- repeatable tag -->
            </pet-comments>
        </pets>
        <utilities-included>
            <landlord-pays-aircon>(yes|no)</landlord-pays-aircon>
            <landlord-pays-broadbandinternet>(yes|no)</landlord-pays-broadbandinternet>
            <landlord-pays-cable>(yes|no)</landlord-pays-cable>
            <landlord-pays-electric>(yes|no)</landlord-pays-electric>
            <landlord-pays-gas>(yes|no)</landlord-pays-gas>
            <landlord-pays-heat>(yes|no)</landlord-pays-heat>
            <landlord-pays-hotwater>(yes|no)</landlord-pays-hotwater>
            <landlord-pays-satellite>(yes|no)</landlord-pays-satellite>
            <landlord-pays-sewer>(yes|no)</landlord-pays-sewer>
            <landlord-pays-telephone>(yes|no)</landlord-pays-telephone>
            <landlord-pays-trash>(yes|no)</landlord-pays-trash>
            <landlord-pays-water>(yes|no)</landlord-pays-water>
            <landlord-utilities-portion-included></landlord-utilities-portion-included>
            <utilities-comments>
                <utilities-comment></utilities-comment>
                <!-- repeatable tag -->
            </utilities-comments>
        </utilities-included>
        <property-manager-on-site>(yes|no)</property-manager-on-site>
        <rent-control>(yes|no)</rent-control>
        <subletting-allowed>(yes|no)</subletting-allowed>
        <rental-broker-fee>(yes|no)</rental-broker-fee>
        <rental-broker-fee-amount></rental-broker-fee-amount>
    </rental-terms>
    <advertise-with-us>
        <channel></channel>
        <featured>(yes|no)</featured>
        <branded>(yes|no)</branded>
        <branded-logo-url></branded-logo-url>
    </advertise-with-us>
</property>