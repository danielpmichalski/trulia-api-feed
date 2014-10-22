<open-homes>
{foreach $open_homes as $open_home}
    <open-home>
        <start-time>{$open_home->getStartTime()}</start-time>
        <end-time>{$open_home->getEndTime()}</end-time>
        <date>{$open_home->getDate()}</date>
        <details><![CDATA[{$open_home->getDetails()}]]></details>
        <open-home-appointment-required>{if $open_home->getOpenHomeAppointmentRequired()}yes{else}no{/if}</open-home-appointment-required>
    </open-home>
{/foreach}
</open-homes>