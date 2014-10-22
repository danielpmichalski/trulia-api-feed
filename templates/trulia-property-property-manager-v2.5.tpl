<property-manager>
    <property-manager-name><![CDATA[{$property_manager->getName()}]]></property-manager-name>
    <property-management-company-name><![CDATA[{$property_manager->getManagementCompanyName()}]]></property-management-company-name>
    <property-manager-phone><![CDATA[{$property_manager->getPhone()}]]></property-manager-phone>
    <property-manager-email><![CDATA[{$property_manager->getEmail()}]]></property-manager-email>
    <property-manager-lead-email><![CDATA[{$property_manager->getLeadEmail()}]]></property-manager-lead-email>
    <property-manager-website><![CDATA[{$property_manager->getWebsite()}]]></property-manager-website>
    <property-manager-logo-url>{$property_manager->getLogoUrl()}</property-manager-logo-url>
{assign var ="office_hours" value="{$property_manager->getOfficeHours()}"}
    <property-manager-office-hours>
{foreach $office_hours as $office_day}
        <office-day>
            <day-of-the-week>{$office_day->getDayOfTheWeek()}</day-of-the-week>
            <office-start-time>{$office_day->getStartTime()}</office-start-time>
            <office-end-time>{$office_day->getEndTime()}</office-end-time>
            <comment><![CDATA[{$office_day->getComment()}]]></comment>
        </office-day>
{/foreach}
    </property-manager-office-hours>
</property-manager>