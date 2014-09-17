<properties>
{foreach $properties as $property}
{include file="trulia-property-v2.5.tpl" property=$property assign="property"}{$property|indent:4:" "}
{/foreach}
</properties>