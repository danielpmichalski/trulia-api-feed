<brokerage>
    <brokerage-name><![CDATA[{$brokerage->getName()}]]></brokerage-name>
    <brokerage-email><![CDATA[{$brokerage->getEmail()}]]></brokerage-email>
    <brokerage-broker-name><![CDATA[{$brokerage->getBrokerName()}]]></brokerage-broker-name>
    <brokerage-id>{$brokerage->getId()}</brokerage-id>
    <brokerage-mls-code>{$brokerage->getMlsCode()}</brokerage-mls-code>
    <brokerage-phone><![CDATA[{$brokerage->getPhone()}]]></brokerage-phone>
    <brokerage-website><![CDATA[{$brokerage->getWebsite()}]]></brokerage-website>
    <brokerage-logo-url>{$brokerage->getLogoUrl()}</brokerage-logo-url>
{assign var="brokerage_address" value="{$brokerage->getAddress()}"}
    <brokerage-address>
        <brokerage-street-address><![CDATA[{$brokerage_address->getStreetAddress()}]]></brokerage-street-address>
        <brokerage-city-name><![CDATA[{$brokerage_address->getCityName()}]]></brokerage-city-name>
        <brokerage-zipcode>{$brokerage_address->getZipcode()}</brokerage-zipcode>
        <brokerage-state-code>{$brokerage_address->getStateCode()}</brokerage-state-code>
    </brokerage-address>
</brokerage>