<taxes>
{foreach $taxes as $tax}
    <tax>
        <tax-type><![CDATA[{$tax->getTaxType()}]]></tax-type>
        <tax-year>{$tax->getTaxYear()}</tax-year>
        <tax-amount>{$tax->getTaxAmount()|string_format:"%d"}</tax-amount>
        <tax-description><![CDATA[{$tax->getTaxDescription()}]]></tax-description>
    </tax>
{/foreach}
</taxes>