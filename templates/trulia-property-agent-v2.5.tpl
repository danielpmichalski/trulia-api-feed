<agent>
    <agent-name><![CDATA[{$agent->getName()}]]></agent-name>
    <agent-email><![CDATA[{$agent->getEmail()}]]></agent-email>
    <agent-phone><![CDATA[{$agent->getPhone()}]]></agent-phone>
    <agent-alternate-email><![CDATA[{$agent->getAlternateEmail()}]]></agent-alternate-email>
    <agent-picture-url>{$agent->getPictureUrl()}</agent-picture-url>
    <agent-id>{$agent->getId()}</agent-id>
{assign var="licenses" value="{$agent->getLicenses()}"}
    <agent-licenses>
{foreach $licenses as $license}
        <agent-license>
            <agent-license-number><![CDATA[{$license->getNumber()}]]></agent-license-number>
            <agent-license-category><![CDATA[{$license->getCategory()}]]></agent-license-category>
            <agent-license-state>{$license->getState()}</agent-license-state>
        </agent-license>
{/foreach}
    </agent-licenses>
</agent>