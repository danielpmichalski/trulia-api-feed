<property>
    <listing-type>{$property->getListingType()}</listing-type>
    <status>{$property->getStatus()}</status>
    <foreclosure-status>{$property->getForeclosureStatus()}</foreclosure-status>
{assign var="location" value="{$property->getLocation()}"}
{include file="trulia-property-location-v2.5.tpl" property=$location assign="location"}{$location|indent:4:" "}
{assign var="details" value="{$property->getDetails()}"}
{include file="trulia-property-details-v2.5.tpl" property=$details assign="details"}{$details|indent:4:" "}
{assign var="landing_page" value="{$property->getLandingPage()}"}
    <landing-page>
        <lp-url>{$landing_page->getLpUrl()}</lp-url>
    </landing-page>
{assign var="site" value="{$property->getSite()}"}
    <site>
        <site-url>{$site->getSiteUrl()}</site-url>
        <site-name><![CDATA[{$site->getSiteName()}]]></site-name>
    </site>
{assign var="pictures" value="{$property->getPictures()}"}
{include file="trulia-property-pictures-v2.5.tpl" property=$pictures assign="pictures"}{$pictures|indent:4:" "}
{assign var="virtual_tours" value="{$property->getVirtualTours()}"}
{include file="trulia-property-virtual-tours-v2.5.tpl" property=$virtual_tours assign="virtual_tours"}{$virtual_tours|indent:4:" "}
{assign var="videos" value="{$property->getVideos()}"}
{include file="trulia-property-videos-v2.5.tpl" property=$videos assign="videos"}{$videos|indent:4:" "}
{assign var="open_homes" value="{$property->getOpenHomes()}"}
{include file="trulia-property-open-homes-v2.5.tpl" property=$open_homes assign="open_homes"}{$open_homes|indent:4:" "}
{assign var="taxes" value="{$property->getTaxes()}"}
{include file="trulia-property-taxes-v2.5.tpl" property=$taxes assign="taxes"}{$taxes|indent:4:" "}
{assign var="hoaFee" value="{$property->getHoaFee()}"}
    <hoa-fees>
        <hoa-fee>{$hoaFee->getHoaFee()|string_format:"%d"}</hoa-fee>
        <hoa-period>{$hoaFee->getHoaPeriod()}</hoa-period>
        <hoa-description><![CDATA[{$hoaFee->getHoaDescription()}]]></hoa-description>
    </hoa-fees>
{assign var="additionalFees" value="{$property->getAdditionalFees()}"}
{include file="trulia-property-additional-fees-v2.5.tpl" property=$additionalFees assign="additionalFees"}{$additionalFees|indent:4:" "}
{assign var="schools" value="{$property->getSchools()}"}
{include file="trulia-property-schools-v2.5.tpl" property=$schools assign="schools"}{$schools|indent:4:" "}
{assign var="floorplan_layouts" value="{$property->getFloorplanLayouts()}"}
{include file="trulia-property-floorplan-layouts-v2.5.tpl" property=$floorplan_layouts assign="floorplan_layouts"}{$floorplan_layouts|indent:4:" "}
{assign var="plan" value="{$property->getPlan()}"}
    <plan>
        <plan-id>{$plan->getPlanId()}</plan-id>
        <plan-name><![CDATA[{$plan->getPlanName()}]]></plan-name>
        <plan-type><![CDATA[{$plan->getPlanType()}]]></plan-type>
        <plan-base-price>{$plan->getPlanBasePrice()}</plan-base-price>
    </plan>
{assign var="spec" value="{$property->getSpec()}"}
    <spec>
        <is-spec-home>{$spec->isSpecHome()}</is-spec-home>
        <spec-id>{$spec->getSpecid()}</spec-id>
    </spec>
{assign var="agent" value="{$property->getAgent()}"}
{include file="trulia-property-agent-v2.5.tpl" property=$agent assign="agent"}{$agent|indent:4:" "}
{assign var="brokerage" value="{$property->getBrokerage()}"}
{include file="trulia-property-brokerage-v2.5.tpl" property=$brokerage assign="brokerage"}{$brokerage|indent:4:" "}
{assign var="office" value="{$property->getOffice()}"}
{include file="trulia-property-office-v2.5.tpl" property=$office assign="office"}{$office|indent:4:" "}
{assign var="franchise" value="{$property->getFranchise()}"}
{include file="trulia-property-franchise-v2.5.tpl" property=$franchise assign="franchise"}{$franchise|indent:4:" "}
{assign var="builder" value="{$property->getBuilder()}"}
{include file="trulia-property-builder-v2.5.tpl" property=$builder assign="builder"}{$builder|indent:4:" "}
{if $property->getListingType() != null && $property->getListingType()->equals(ListingType::RENTAL)}
    {assign var="property_manager" value="{$property->getPropertyManager()}"}
    {include file="trulia-property-property-manager-v2.5.tpl" property=$property_manager assign="property_manager"}{$property_manager|indent:4:" "}
{/if}
{assign var="detailed_characteristics" value="{$property->getDetailedCharacteristics()}"}
{include file="trulia-property-detailed-characteristics-v2.5.tpl" property=$detailed_characteristics assign="detailed_characteristics"}{$detailed_characteristics|indent:4:" "}
{if $property->getListingType() != null && $property->getListingType()->equals(ListingType::RENTAL)}
    {assign var="rental_terms" value="{$property->getRentalTerms()}"}
    {include file="trulia-property-rental-terms-v2.5.tpl" property=$rental_terms assign="rental_terms"}{$rental_terms|indent:4:" "}
{/if}
{assign var="advertise" value="{$property->getAdvertiseWithUs()}"}
{include file="trulia-property-advertise-with-us-v2.5.tpl" property=$advertise assign="advertise"}{$advertise|indent:4:" "}
</property>