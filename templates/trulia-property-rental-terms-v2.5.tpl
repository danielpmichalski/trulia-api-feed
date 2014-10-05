<rental-terms>
    <price-term>{$rental_terms->getPriceTerm()}</price-term>
    <rental-type>{$rental_terms->getRentalType()}</rental-type>
    <lease-type>{$rental_terms->getLeaseType()}</lease-type>
    <lease-min-length-months>{$rental_terms->getLeaseMinLengthMonths()|string_format:"%d"}</lease-min-length-months>
    <lease-max-length-months>{$rental_terms->getLeaseMaxLengthMonths()|string_format:"%d"}</lease-max-length-months>
{assign var="lease_periods" value="{$rental_terms->getLeasePeriods()}"}
    <lease-periods>
{foreach $lease_periods as $lease_period}
        <lease-period>{$lease_period|string_format:"%d"}</lease-period>
{/foreach}
    </lease-periods>
    <lease-details>{$rental_terms->getLeaseDetails()}</lease-details>
    <security-deposit>{$rental_terms->getSecurityDeposit()|string_format:"%d"}</security-deposit>
    <security-deposit-description>{$rental_terms->getSecurityDepositDescription()}</security-deposit-description>
    <application-fee>{$rental_terms->getApplicationFee()|string_format:"%d"}</application-fee>
    <application-fee-description>{$rental_terms->getApplicationFeeDescription()}</application-fee-description>
    <credit-cards-accepted>{if $rental_terms->getCreditCardsAccepted()}yes{else}no{/if}</credit-cards-accepted>
{assign var="credit_cards" value="{$rental_terms->getCreditCards()}"}
    <credit-cards>
{foreach $credit_cards as $credit_card}
        <credit-card>{$credit_card}</credit-card>
{/foreach}
    </credit-cards>
{assign var="pets" value="{$rental_terms->getPets()}"}
    <pets>
        <small-dogs-allowed>{if $pets->getSmallDogsAllowed()}yes{else}no{/if}</small-dogs-allowed>
        <large-dogs-allowed>{if $pets->getLargeDogsAllowed()}yes{else}no{/if}</large-dogs-allowed>
        <cats-allowed>{if $pets->getCatsAllowed()}yes{else}no{/if}</cats-allowed>
        <pet-other-allowed>{if $pets->getPetOtherAllowed()}yes{else}no{/if}</pet-other-allowed>
        <max-pets>{$pets->getMaxPets()|string_format:"%d"}</max-pets>
        <pet-deposit>{$pets->getPetDeposit()|string_format:"%d"}</pet-deposit>
        <pet-fee>{$pets->getPetFee()|string_format:"%d"}</pet-fee>
        <pet-rent>{$pets->getPetRent()|string_format:"%d"}</pet-rent>
        <pet-weight>{$pets->getPetWeight()}</pet-weight>
{assign var="pet_comments" value="{$pets->getPetComments()}"}
        <pet-comments>
{foreach $pet_comments as $pet_comment}
            <pet-comment>{$pet_comment}</pet-comment>
{/foreach}
        </pet-comments>
    </pets>
{assign var="utilities_included" value="{$rental_terms->getUtilitiesIncluded()}"}
    <utilities-included>
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
{assign var="utilities_comments" value="{$utilities_included->getUtilitiesComments()}"}
        <utilities-comments>
{foreach $utilities_comments as $utilities_comment}
            <utilities-comment>{$utilities_comment}</utilities-comment>
{/foreach}
        </utilities-comments>
    </utilities-included>
    <property-manager-on-site>{if $rental_terms->getPropertyManagerOnSite()}yes{else}no{/if}</property-manager-on-site>
    <rent-control>{if $rental_terms->getRentControl()}yes{else}no{/if}</rent-control>
    <subletting-allowed>{if $rental_terms->getSublettingAllowed()}yes{else}no{/if}</subletting-allowed>
    <rental-broker-fee>{if $rental_terms->getRentalBrokerFee()}yes{else}no{/if}</rental-broker-fee>
    <rental-broker-fee-amount>{$rental_terms->getRentalBrokerFeeAmount()|string_format:"%d"}</rental-broker-fee-amount>
</rental-terms>