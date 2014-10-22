<?xml version="1.0" encoding="UTF-8" standalone="yes"?>

<properties>
{foreach $properties as $property}
{include file="trulia-property-v2.5.tpl" property=$property assign="property"}{$property|indent:4:" "}
{/foreach}
</properties>