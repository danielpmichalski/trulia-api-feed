<advertise-with-us>
    <channel>{$advertise->getChannel()}</channel>
    <featured>{if $advertise->isFeatured()}yes{else}no{/if}</featured>
    <branded>{if $advertise->isBranded()}yes{else}no{/if}</branded>
    <branded-logo-url>{$advertise->getBrandedLogoUrl()}</branded-logo-url>
</advertise-with-us>