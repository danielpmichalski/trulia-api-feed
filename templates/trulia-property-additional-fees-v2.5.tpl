<additional-fees>
{foreach $additionalFees as $fee}
    <fee>
        <fee-type>{$fee->getFeeType()}</fee-type>
        <fee-amount>{$fee->getFeeAmount()|string_format:"%d"}</fee-amount>
        <fee-period>{$fee->getFeePeriod()}</fee-period>
        <fee-description><![CDATA[{$fee->getFeeDescription()}]]></fee-description>
    </fee>
{/foreach}
</additional-fees>