<schools>
{foreach $schools as $school}
    <school-district>
        <elementary>{$school->getElementary()}</elementary>
        <middle>{$school->getMiddle()}</middle>
        <juniorhigh>{$school->getJuniorHigh()}</juniorhigh>
        <high>{$school->getHigh()}</high>
        <district-name>{$school->getDistrictName()}</district-name>
        <district-website>{$school->getDistrictWebsite()}</district-website>
        <district-phone-number>{$school->getDistrictPhoneNumber()}</district-phone-number>
    </school-district>
{/foreach}
</schools>