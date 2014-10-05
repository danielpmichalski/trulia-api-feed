<brokerage>
    <brokerage-name>{$brokerage->getName()}</brokerage-name>
    <brokerage-email>{$brokerage->getEmail()}</brokerage-email>
    <brokerage-broker-name>{$brokerage->getBrokerName()}</brokerage-broker-name>
    <brokerage-id>{$brokerage->getId()}</brokerage-id>
    <brokerage-mls-code>{$brokerage->getMlsCode()}</brokerage-mls-code>
    <brokerage-phone>{$brokerage->getPhone()}</brokerage-phone>
    <brokerage-website>{$brokerage->getWebsite()}</brokerage-website>
    <brokerage-logo-url>{$brokerage->getLogoUrl()}</brokerage-logo-url>
{assign var="brokerage_address" value="{$brokerage->getAddress()}"}
    <brokerage-address>
        <brokerage-street-address>{$brokerage_address->getStreetAddress()}</brokerage-street-address>
        <brokerage-city-name>{$brokerage_address->getCityName()}</brokerage-city-name>
        <brokerage-zipcode>{$brokerage_address->getZipcode()}</brokerage-zipcode>
        <brokerage-state-code>{$brokerage_address->getStateCode()}</brokerage-state-code>
    </brokerage-address>
</brokerage>