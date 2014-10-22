<office>
    <office-name><![CDATA[{$office->getName()}]]></office-name>
    <office-id>{$office->getId()}</office-id>
    <office-mls-code><![CDATA[{$office->getMlsCode()}]]></office-mls-code>
    <office-broker-id>{$office->getBrokerId()}</office-broker-id>
    <office-phone><![CDATA[{$office->getPhone()}]]></office-phone>
    <office-email><![CDATA[{$office->getEmail()}]]></office-email>
    <office-website><![CDATA[{$office->getWebsite()}]]></office-website>
{assign var="office_address" value="{$office->getAddress()}"}
    <office-address>
        <office-street-address><![CDATA[{$office_address->getStreetAddress()}]]></office-street-address>
        <office-city-name><![CDATA[{$office_address->getCityName()}]]></office-city-name>
        <office-zipcode>{$office_address->getZipcode()}</office-zipcode>
        <office-state-code>{$office_address->getStateCode()}</office-state-code>
    </office-address>
</office>