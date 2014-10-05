<advertise-with-us>
    <channel>{$advertise->getChannel()}</channel>
    <featured>{if $advertise->getFeatured()}yes{else}no{/if}</featured>
    <branded>{if $advertise->getBranded()}yes{else}no{/if}</branded>
    <branded-logo-url>{$advertise->getBrandedLogoUrl()}</branded-logo-url>
</advertise-with-us>