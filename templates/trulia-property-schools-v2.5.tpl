<schools>
{foreach $schools as $school}
    <school-district>
        <elementary><![CDATA[{$school->getElementary()}]]></elementary>
        <middle><![CDATA[{$school->getMiddle()}]]></middle>
        <juniorhigh><![CDATA[{$school->getJuniorHigh()}]]></juniorhigh>
        <high><![CDATA[{$school->getHigh()}]]></high>
        <district-name><![CDATA[{$school->getDistrictName()}]]></district-name>
        <district-website><![CDATA[{$school->getDistrictWebsite()}]]></district-website>
        <district-phone-number><![CDATA[{$school->getDistrictPhoneNumber()}]]></district-phone-number>
    </school-district>
{/foreach}
</schools>