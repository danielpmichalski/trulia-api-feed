<builder>
    <builder-id>{$builder->getId()}</builder-id>
    <builder-name><![CDATA[{$builder->getName()}]]></builder-name>
    <builder-phone><![CDATA[{$builder->getPhone()}]]></builder-phone>
    <builder-email><![CDATA[{$builder->getEmail()}]]></builder-email>
    <builder-lead-email><![CDATA[{$builder->getLeadEmail()}]]></builder-lead-email>
    <builder-website><![CDATA[{$builder->getWebsite()}]]></builder-website>
    <builder-logo-url>{$builder->getLogoUrl()}</builder-logo-url>
{assign var="builder_address" value="{$builder->getAddress()}"}
    <builder-address>
        <builder-street-address><![CDATA[{$builder_address->getStreetAddress()}]]></builder-street-address>
        <builder-city-name><![CDATA[{$builder_address->getCityName()}]]></builder-city-name>
        <builder-zipcode>{$builder_address->getZipcode()}</builder-zipcode>
        <builder-state-code>{$builder_address->getStateCode()}</builder-state-code>
    </builder-address>
</builder>