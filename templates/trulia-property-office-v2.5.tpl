<office>
    <office-name>{$office->getName()}</office-name>
    <office-id>{$office->getId()}</office-id>
    <office-mls-code>{$office->getMlsCode()}</office-mls-code>
    <office-broker-id>{$office->getBrokerId()}</office-broker-id>
    <office-phone>{$office->getPhone()}</office-phone>
    <office-email>{$office->getEmail()}</office-email>
    <office-website>{$office->getWebsite()}</office-website>
{assign var="office_address" value="{$office->getAddress()}"}
    <office-address>
        <office-street-address>{$office_address->getStreetAddress()}</office-street-address>
        <office-city-name>{$office_address->getCityName()}</office-city-name>
        <office-zipcode>{$office_address->getZipcode()}</office-zipcode>
        <office-state-code>{$office_address->getStateCode()}</office-state-code>
    </office-address>
</office>