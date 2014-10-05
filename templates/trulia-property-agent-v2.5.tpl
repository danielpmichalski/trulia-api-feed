<agent>
    <agent-name>{$agent->getName()}</agent-name>
    <agent-email>{$agent->getEmail()}</agent-email>
    <agent-phone>{$agent->getPhone()}</agent-phone>
    <agent-alternate-email>{$agent->getAlternateEmail()}</agent-alternate-email>
    <agent-picture-url>{$agent->getPictureUrl()}</agent-picture-url>
    <agent-id>{$agent->getId()}</agent-id>
{assign var="licenses" value="{$agent->getLicenses()}"}
    <agent-licenses>
{foreach $licenses as $license}
        <agent-license>
            <agent-license-number>{$license->getNumber()}</agent-license-number>
            <agent-license-category>{$license->getCategory()}</agent-license-category>
            <agent-license-state>{$license->getState()}</agent-license-state>
        </agent-license>
{/foreach}
    </agent-licenses>
</agent>