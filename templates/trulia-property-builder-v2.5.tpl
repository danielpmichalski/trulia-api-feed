<builder>
    <builder-id>{$builder->getId()}</builder-id>
    <builder-name>{$builder->getName()}</builder-name>
    <builder-phone>{$builder->getPhone()}</builder-phone>
    <builder-email>{$builder->getEmail()}</builder-email>
    <builder-lead-email>{$builder->getLeadEmail()}</builder-lead-email>
    <builder-website>{$builder->getWebsite()}</builder-website>
    <builder-logo-url>{$builder->getLogoUrl()}</builder-logo-url>
{assign var="builder_address" value="{$builder->getAddress()}"}
    <builder-address>
        <builder-street-address>{$builder_address->getStreetAddress()}</builder-street-address>
        <builder-city-name>{$builder_address->getCityName()}</builder-city-name>
        <builder-zipcode>{$builder_address->getZipcode()}</builder-zipcode>
        <builder-state-code>{$builder_address->getStateCode()}</builder-state-code>
    </builder-address>
</builder>